<?php
namespace backend\components;
// require_once(PHP_ROOT . '/libs/util/HttpHandlerCurl.php');
// require_once(PHP_ROOT . '/libs/util/Log.php');
use backend\components\HttpHandlerCurl;
use Yii;

//获取api数据
class GatewayHelper {

	const URL_ROOT = "";//GATEWAY_URL_ROOT;
	const API_KEY = "";//GATEWAY_KEY;
	const API_SECRET = "";//GATEWAY_SECRET;

	const CHARSET_UTF8 = 'UTF-8';
	const CHARSET_GBK = 'GBK';
	const DEFAULT_TIMEOUT = 30;

	protected $curl;

	public function __construct($responseCharset = self::CHARSET_UTF8, $timeout = self::DEFAULT_TIMEOUT) {
		$this->curl = new HttpHandlerCurl($responseCharset,$timeout);
	}
	
	//curl统一方法
	public function  curl($method="GET", $url, $query=array(),array $headers = array(), array $opts = array()){
	    if(isset($_SERVER['HTTP_TRACE_ID'])){
	        if ( (is_array($query) || is_object($query))){
	            $query["__trace_id"] = $_SERVER['HTTP_TRACE_ID'];
	        }else {
	            $query .= '&__trace_id='.$_SERVER['HTTP_TRACE_ID'];
	        }
	    }

	    // 使用access token验证用户
	    // if(is_array($query) && !isset($query['gwApi'])){ // 如果是数组进行合并token验证
	    // 	$query = array_merge(['access-token'=>Yii::$app->session['token'],'access-username'=>Yii::$app->session['username']],$query);
	    // }
	    $result = $this->curl->curl($method,$url,$query,$headers,$opts);
	    // $info = json_decode($result,true);
	    // $log_method = 'info';
	    // if ($info['status'] >= 500){
	    // 	$log_method = "error";
	    // }else if($info['status'] > 200){
	    // 	$log_method = "warning";
	    // }
	    // $log_method = 'warning';
	    // Yii::$log_method('curl: method['.$method.'],url['.$url.'],query['.json_encode($query).'],headers['.json_encode($headers).'],opts['.json_encode($$opts).'],result['.json_encode($result).']');
	    return $result;
	}

	//$url, array $headers = array(), array $opts = array()
	public function get($url, array $headers = array(), array $opts = array()) {
		$url = $this->getSecurityUrl($url, 'GET');
		//Log::Debug('gateway get url: ' . $url);

		if(isset($_SERVER['HTTP_TRACE_ID'])){
			$url.='&__trace_id='.$_SERVER['HTTP_TRACE_ID'];
			//$headers =  ['Trace-Id'=>$_SERVER['HTTP_TRACE_ID']];
			$headers['Trace-Id'] = $_SERVER['HTTP_TRACE_ID'];

			$str = $this->curl->get($url,$headers,$opts);
		}else{
			$str = $this->curl->get($url,$headers,$opts);
		}

		if (!$str) {
			//Log::Debug('gateway url return null.');
			if (ENV !== 'pro') {
				//echo '[gateway return null! url: '.$url.']';
			}
		}
		$arr = json_decode($str/*, true*/);
		return $arr;
	}
	
	//$url, array $query, array $headers = array(), array $opts = array()
	public function post($url, $params = array(), array $headers = array(), array $opts = array()) {
		$url = $this->getSecurityUrl($url, 'POST');
		//Log::Debug('gateway post url: ' . $url . '; params: ' . print_r($params, true));

		if(isset($_REQUEST['__trace_id'])){
			$url.='&__trace_id='.$_SERVER['HTTP_TRACE_ID'];
			//$headers =  ['Trace-Id'=>$_SERVER['HTTP_TRACE_ID']];
			$headers['Trace-Id'] = $_SERVER['HTTP_TRACE_ID'];

			$str = $this->curl->post($url, $params,$headers,$opts);
		}else{
			$str = $this->curl->post($url, $params,$headers,$opts);
		}
		if (!$str) {
			//Log::Debug('gateway url return null.');
			if (ENV !== 'pro') {
				//echo '[gateway return null! url: '.$url.']';
			}
		}
		$arr = json_decode($str, true);
		return $arr;
	}
	/**
   * 获取return中的data字段
   */
	public function retData($arr, $succCode = 200, $retMsg = false) {
		if (is_array($arr)){
			if ($arr['status'] == $succCode) {
				// 返回data字段
				return isset($arr['data']) ? $arr['data'] : true;
			} else {
				//Log::Debug('gateway url return: ' . print_r($arr, true));
				// 返回错误消息
				if ($retMsg) {
					return isset($arr['message']) ? $arr['message'] :
					(isset($arr['msg']) ? $arr['msg'] : '');
				}
			}
		}
	}
	private function getSecurityUrl($url, $method) {
		$app_key = self::API_KEY;
		$app_secret = self::API_SECRET;
		$ts = time();

		$params = array(
		'app_key='.$app_key,
		'app_secret='.$app_secret,
		'method='.$method,
		'ts='.$ts);
		sort($params);
		$sign = md5(join('&', $params));

		$params2 = array(
		'app_key='.$app_key,
		'sign='.$sign,
		'method='.$method,
		'ts='.$ts);

		$url .= (strpos($url, '?') === false ? '?' : '&') . join('&', $params2);
		return $url;
	}
	


}