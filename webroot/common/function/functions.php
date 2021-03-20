<?php 

/**
 * 1.刚刚 10秒内
 * 2.几秒内  10秒以外
 * 3.几分钟前
 * 4.几小时前
 * 5.几天前
 * 6.几周前
 * 7.几月前
 * 8.几年前
 * @param [type] $time [description]
 */

if ( ! function_exists( 'T' ) ) {
	function T($time){
		$time = intval($time);
		$nowTime = time();

		$t = $nowTime - $time;// 时间差
		if($t<=10){
			$str = '刚刚';
		}else if($t>10 && $t<=60){
			$str = $t . '秒内';
		}else if($t>60 && $t<=60*60){
			$str = floor($t/60) . '分钟前';
		}else if($t>60*60 && $t<=60*60*24){
			$str = floor($t/(60*60)) . '小时前';
		}else if($t>60*60*24 && $t<=60*60*24*7){
			$str = floor($t/(60*60*24)) . '天前';
		}else if($t>60*60*24*7 && $t<=60*60*24*7*4){
			$str = floor($t/(60*60*24*7)) . '周前';
		}else if($t>60*60*24*7*4 && $t<=60*60*24*365){
			$nowM = date('m',$nowTime);
			$m = date('m',$time);
			if($nowM<$m){
				$str = (12-$m) + $nowM . '个月前';
			}else{
				$str = $nowM - $m . '个月前';
			}
		}else if($t>60*60*24*365){
			$str = date('Y',$nowTime) - date('Y',$time) . '年前';
		}

		return $str;
	}
}

/**
 * p函数 打印数据
 */
if ( ! function_exists( 'p' ) ) {
	function p( $var ) {
		echo "<pre>" . print_r( $var, TRUE ) . "</pre>";
	}
}

/**
 * content_img函数 匹配IMG标签外层包裹a标签
 */
if ( ! function_exists( 'content_img' ) ) {
	function content_img( $str ) {
		$preg = '/(<img.*?src=[\"|\']?(.*?)[\"|\']?\s.*?>)/i';
		return preg_replace($preg, '<a href="javascript:;" class="fancybox">${1}</a>', $str);
	}
}

/**
 * 把返回的数据集转换成Tree
 * @param array $list 要转换的数据集
 * @param string $pid parent标记字段
 * @param string $level level标记字段
 * @return array
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
if ( ! function_exists( 'list_to_tree' ) ) {
    function list_to_tree($list, $pk='id', $pid = 'pid', $child = '_child', $root = 0, $level = 0) {
        // 创建Tree
        $tree = array();
        if(is_array($list)) {
            // 创建基于主键的数组引用
            $refer = array();
            foreach ($list as $key => $data) {
                $refer[$data[$pk]] =& $list[$key];
            }
            foreach ($list as $key => $data) {
                // 判断是否存在parent
                $parentId =  $data[$pid];
                if ($root == $parentId) {
                    $tree[] =& $list[$key];
                }else{
                    $level++;
                    if (isset($refer[$parentId])) {
                        $parent =& $refer[$parentId];
                        $parent[$child][] =& $list[$key];
                    }
                }
            }
        }
        return $tree;
    }
}

if ( ! function_exists( 'selectTree' ) ) {
    function selectTree($param, $pid = 0, $lvl = 0)
    {
        $res = [];
        foreach ($param as $key => $vo) {
            if ($pid == $vo['pid']) {
                $vo['_level'] = $lvl;
                $vo['_'] = selectTree($param, $vo['id'], $lvl+1);
                $res[] = $vo;
            }
        }
        return $res;
    }
}


if ( ! function_exists( 'success' ) ) {
    function success($data = null){
        $result = [
            "result"=>true,
            "status" => 200,
            "msg"=>"操作成功！",
            "message"=>"操作成功！",
            "data"=>null
        ];
        $result["data"] = $data;
        return $result;
    }
}


if ( ! function_exists( 'fail' ) ) {
    function fail($status = 400,$msg=""){
        $result = [
            "result"=>false,
            "status" => 10000,
            "msg"=>"操作成功！",
            "message"=>"操作成功！",
            "data"=>null
        ];
        $result["status"] = $status;
        $result["msg"] = $msg;
        $result["message"] = $msg;
        return $result;
    }
}

if ( ! function_exists( 'gmt_iso8601' ) ) {
    function gmt_iso8601($time)
    {
        $dtStr = date("c", $time);
        $mydatetime = new DateTime($dtStr);
        $expiration = $mydatetime->format(DateTime::ISO8601);
        $pos = strpos($expiration, '+');
        $expiration = substr($expiration, 0, $pos);
        return $expiration . "Z";
    }
}

if ( ! function_exists( 'getOssUrl' ) ) {
    function getOssUrl()
    {
        return "http://pinle123.oss-cn-beijing.aliyuncs.com/pinle";
    }
}

if ( ! function_exists( 'getConfigList' ) ) {
    function getConfigList($str, $split = "=")
    {
        $match = explode("\n", $str);
        $res = [];
        foreach ($match as $val) {
            $arr = explode($split, $val);
            $res[trim($arr[0])] = trim($arr[1]);
        }
        return $res;
    }
}

if ( ! function_exists( 'getArrKeyValueList' ) ) {
    function getArrKeyValueList($str, $split = "="){
        $string = str_replace("：",":", $str);
        $list = getConfigList($string, $split);
        $res = [];
        foreach ($list as $key => $val) {
            $group = [];
            $group['key'] = $key;
            $group['val'] = $val;
            array_push($res, $group);
        }
        return $res;
    }
}

if ( ! function_exists( 'CheckDocumentPosition' ) ) {
    function CheckDocumentPosition($pos = 0, $contain = 0)
    {
        if (empty($pos) || empty($contain)) {
            return false;
        }
        //将两个参数进行按位与运算，不为0则表示$contain属于$pos
        $res = $pos & $contain;
        if ($res !== 0) {
            return true;
        } else {
            return false;
        }
    }
}

if ( ! function_exists( 'showPosition' ) ) {
    function showPosition($positionParams = [], $position = 0)
    {
        $tags = [];
        foreach ($positionParams as $key => $val) {
            if (CheckDocumentPosition($position, $key)) {
                array_push($tags, $val);
            }
        }
        return implode(",", $tags);
    }
}

if(!function_exists('curlGet')){
    function curlGet($url, $header = false){
        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
        curl_setopt($ch, CURLOPT_ENCODING, "gzip"); //指定gzip压缩
        //add header
        if(!empty($header)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }
        //add ssl support
        if(substr($url, 0, 5) == 'https') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    //SSL 报错时使用
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);    //SSL 报错时使用
        }
        //add 302 support
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//        curl_setopt($ch,CURLOPT_COOKIEFILE, $this->lastCookieFile); //使用提交后得到的cookie数据
        try {
            $content = curl_exec($ch); //执行并存储结果
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        $curlError = curl_error($ch);
        if(!empty($curlError)) {
            return $curlError;
        }
        curl_close($ch);
        return $content;
    }
}