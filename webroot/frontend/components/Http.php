<?php
namespace frontend\components;

use Yii;
use yii\helpers\Json;
use yii\base\Component;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Http extends Component
{

    /** {{{ http methods */
    const GET = 'GET';
    const POST = 'POST';
    const DELETE = 'DELETE';
    const PUT = 'PUT';
    const OPTION = 'OPTIONS';
    const PATCH = 'PATCH';
    /** }}} */

    /** {{{ log event */
    const LOG_BEFORE = 'logBeforeRequest';
    const LOG_AFTER = 'logAfterRequest';
    /** }}} */

    /** {{{ CuzzleHttp\Client */
    private $_client = null;
    /** }}} */

    /** {{{ 是否触发日志记录 */
    private $_logIsEnable = true;
    /** }}} */

    /** {{{ __construct($config)
     * @param $config = [] Components::__construct($config)
     */
    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->_client = new Client();
    }
    /** }}} */

    /**
     * {{{ 方便用户自定义请求
     */
    public function getClient()
    {
        return $this->_client;
    }
    /** }}} */


    /**
     * {{{ getInstanceWithConfig($config = [])
     * @param $config
     * @return new Client($config);
     */
    public function getInstanceWithConfig($config = [])
    {
        $this->_client = new Client($config);
        return $this->_client;
    }

    /**
     * {{{ 嵌入网关的签名信息, 只有server响应的http status 200 的时候才会返回body
     */
    public function request($method, $url, $params = [])
    {
        $params = $this->assembleParams($method, $params);
        try {
            $this->onBeforeRequest([
                'method' => $method,
                'url' => $url,
                'params' => $params
            ]);
            $response = $this->_client->request($method, $url, $params);
            if ($response->getStatusCode() === 200) {
                $this->onAfterRequest([
                    'respHeader' => $response->getHeaders(),
                    'respBody' => (string) $response->getBody(),
                ]);
                return $response->getBody();
            } else {
                $log = 'Body=%s:Url=%s:Req=%s';
                throw new \Exception(sprintf($log, $response->getBody(), $url, Json::encode($params)));
            }
        } catch (ClientException $e) {
            return $this->processExceptionEvent($e);
        } catch (\Exception $e) {
            return $this->processExceptionEvent($e);
        }
    }
    /** }}} */

    /**
     * {{{ assembleUrl($path)
     * @param $path
     * @return string
     */
    public function assembleUrl($path)
    {
        return rtrim(Yii::$app->params['gatewayUrl'], '/') . "/$path";
    }
    /** }}} */

    /** {{{ 请求之前注册记录日志事件
     * attach event on beforeRequest
     * @param $data = []
     * */
    private function onBeforeRequest($data = [])
    {
        if (!$this->isLoggerEnable()) {
            return true;
        }
        $this->on(
            self::LOG_BEFORE,
            ['frontend\components\Logger', 'write'],
            $data
        );
        $this->trigger(self::LOG_BEFORE);
        return true;
    }
    /** }}} */

    /** {{{ 请求之后注册记录日志事件
     * attach event on afterRequset
     * @param $data = []
     */
    private function onAfterRequest($data = [])
    {
        if (!$this->isLoggerEnable()) {
            return true;
        }
        $this->on(
            self::LOG_AFTER,
            ['frontend\components\Logger', 'write'],
            $data
        );
        $this->trigger(self::LOG_AFTER);
        return true;
    }
    /** }}} */

    /**
     * 处理异常，记录日志
     */
    private function processExceptionEvent($e)
    {
        Yii::error('Http::request->Exception=' . $e->getMessage());
        $this->onAfterRequest($e->getMessage());
        return false;
    }
    /** }}} */

    /** {{{ 加密处理 */
    public function doSignature($method)
    {
        $signArray['app_key'] = Yii::$app->params['ffanApi']['appKey'];
        $signArray['app_secret'] = Yii::$app->params['ffanApi']['appSecret'];
        $signArray['ts'] = time();
        $signArray['method'] = $method;

        ksort($signArray);
        $signArray['sign'] = strtolower(md5(http_build_query($signArray)));

        return $signArray;
    }
    /** }}} */

    /** {{{ 组合请求参数*/
    private function assembleParams($method, $params = [])
    {
        $method = strtoupper($method);
        $signArray = $this->doSignature($method);
        if ($method == self::GET) {
            if (isset($params['query'])) {
                if (is_array($params['query'])) {
                    $params['query'] = array_merge($signArray, $params['query']);
                } elseif (is_string($params['query'])) {
                    $params['query'] = http_build_query($signArray) . '&' . $params['query'];
                }
            } else {
                $params['query'] = $signArray;
            }
        } else {
            if (isset($params['form_params'])) {
                $params['form_params'] = array_merge($signArray, $params['form_params']);
            } else {
                $params['form_params'] = $signArray;
            }
        }
        return $this->assembleHeader($method, $params);
    }
    /** }}} */

    /** {{{ 组合自定义内嵌的header */
    private function assembleHeader($method, $params = [])
    {
        if (isset($params['headers'])) {
            if (isset($params['headers'][0])) {
                $params['headers'][] = 'X-HTTP-Method-Override: ' . $method;
            } else {
                $params['headers']['X-HTTP-Method-Override'] = $method;
            }
        } else {
            $params['headers']['X-HTTP-Method-Override'] = $method;
        }
        return $params;
    }
    /** }}} */

    public function setLoggerDisabled()
    {
        $this->_logIsEnable = false;
    }

    public function setLoggerEnable()
    {
        $this->_logIsEnable = true;
    }

    public function isLoggerEnable()
    {
        return $this->_logIsEnable === true;
    }
}
