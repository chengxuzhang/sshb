<?php
/* PHP SDK
 * @version 3.0.0
 * @author 1066443079@qq.com
 * @copyright © 2017 , Github Corporation. All rights reserved.
 */

namespace frontend\components\github;

use frontend\components\github\Recorder;
use frontend\components\github\URL;
use frontend\components\github\ErrorCase;

class Oauth{

    const VERSION = "3.0";
    const GET_AUTH_CODE_URL = "https://github.com/login/oauth/authorize";
    const GET_ACCESS_TOKEN_URL = "https://github.com/login/oauth/access_token";
    const GET_OPENID_URL = "https://api.github.com/user";

    protected $recorder;
    public $urlUtils;
    protected $error;
    

    function __construct(){
        $this->recorder = new Recorder();
        $this->urlUtils = new URL();
        $this->error = new ErrorCase();
    }

    public function gh_login(){
        $appid = $this->recorder->readInc("appid");
        $callback = $this->recorder->readInc("callback");
        $scope = $this->recorder->readInc("scope");

        //-------生成唯一随机串防CSRF攻击
        $state = md5(uniqid(rand(), TRUE));
        $this->recorder->write('state',$state);

        //-------构造请求参数列表
        $keysArr = array(
            "response_type" => "code",
            "client_id" => $appid,
            "redirect_uri" => $callback,
            "state" => $state,
            "scope" => $scope
        );

        $login_url =  $this->urlUtils->combineURL(self::GET_AUTH_CODE_URL, $keysArr);

        header("Location:$login_url");die;
    }

    public function gh_callback(){
        $state = $this->recorder->read("state");

        //--------验证state防止CSRF攻击
        if($_GET['state'] != $state){
            $this->error->showError("30001");
        }

        //-------请求参数列表
        $keysArr = array(
            "grant_type" => "authorization_code",
            "client_id" => $this->recorder->readInc("appid"),
            "redirect_uri" => urlencode($this->recorder->readInc("callback")),
            "client_secret" => $this->recorder->readInc("appkey"),
            "code" => $_GET['code'],
            "state" => $state
        );

        //------构造请求access_token的url
        $token_url = $this->urlUtils->combineURL(self::GET_ACCESS_TOKEN_URL, $keysArr);
        $response = $this->urlUtils->get_contents($token_url);

        if(strpos($response, "callback") !== false){
            $lpos = strpos($response, "(");
            $rpos = strrpos($response, ")");
            $response  = substr($response, $lpos + 1, $rpos - $lpos -1);
            $msg = json_decode($response);

            if(isset($msg->error)){
                $this->error->showError($msg->error, $msg->error_description);
            }
        }

        $params = array();
        parse_str($response, $params);

        $this->recorder->write("access_token", $params["access_token"]);
        return $params;

    }

    public function get_openid(){

        //-------请求参数列表
        $keysArr = array(
            "access_token" => $this->recorder->read("access_token")
        );

        // $graph_url = $this->urlUtils->combineURL(self::GET_OPENID_URL, $keysArr);

        $headers = array(
            'Authorization: token ' . $this->recorder->read("access_token"),
            'User-Agent: codegong_login'
        );
        $response = $this->urlUtils->curl(self::GET_OPENID_URL, $keysArr, 'GET', $headers);

        //--------检测错误是否发生
        if(strpos($response, "callback") !== false){

            $lpos = strpos($response, "(");
            $rpos = strrpos($response, ")");
            $response = substr($response, $lpos + 1, $rpos - $lpos -1);
        }

        $user = json_decode($response);
        if(isset($user->error)){
            $this->error->showError($user->error, $user->error_description);
        }

        //------记录openid 这里的openid是自己组合的就是一个用户的唯一标识
        $this->recorder->write("openid", 'github_user_id_' . $user->id);
        return 'github_user_id_' . $user->id;
    }
}
