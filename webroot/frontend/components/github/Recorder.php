<?php
/* PHP SDK
 * @version 3.0.0
 * @author 1066443079@qq.com
 * @copyright © 2017 , Github Corporation. All rights reserved.
 */

namespace frontend\components\github;

use Yii;
use frontend\components\github\ErrorCase;

class Recorder{
    private static $data;
    private $inc;
    private $error;

    public function __construct(){
        $this->error = new ErrorCase();

        //-------读取配置文件
        $incFileContents = file(__DIR__ . "/../../config/github.php");
        $incFileContents = $incFileContents[1];
        $this->inc = json_decode($incFileContents);
        if(empty($this->inc)){
            $this->error->showError("20001");
        }

        if(Yii::$app->session['codegong_userData'] == null){
            self::$data = array();
        }else{
            self::$data = Yii::$app->session['codegong_userData'];
        }
    }

    public function write($name,$value){
        self::$data[$name] = $value;
    }

    public function read($name){
        if(empty(self::$data[$name])){
            return null;
        }else{
            return self::$data[$name];
        }
    }

    public function readInc($name){
        if(empty($this->inc->$name)){
            return null;
        }else{
            return $this->inc->$name;
        }
    }

    public function delete($name){
        unset(self::$data[$name]);
    }

    function __destruct(){
        Yii::$app->session['codegong_userData'] = self::$data;
    }
}
