<?php

namespace frontend\components;
/**
 * 模拟HTTP请求类，通过 CURL 发起请求
 * @author zhanglibin3
 */
class HttpHandlerCurl {

  const CHARSET_UTF8 = 'UTF-8';
  const CHARSET_GBK = 'GBK';
  const DEFAULT_TIMEOUT = 30;

  private $responseCharset;
  private $ch;

  /**
   * 构造函数
   * @param type $responseCharset  响应字符集。非UTF-8的站重写此变量
   * @param int $timeout 超时时间
   */
  public function __construct($responseCharset = self::CHARSET_UTF8, $timeout = self::DEFAULT_TIMEOUT) {
    $this->responseCharset = $responseCharset;

    $this->ch = curl_init();

    $opt = array(
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_FOLLOWLOCATION => false,
      //因为生成tmp下文件太多，且液态和bd后台以及飞凡主站不使用，故暂时屏蔽
      //CURLOPT_COOKIEJAR => tempnam('/tmp/', 'HttpHandlerCurl_Cookie_'),
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_TIMEOUT => $timeout,
      CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
    );

    curl_setopt_array($this->ch, $opt);
  }

  public function __destruct() {
    curl_close($this->ch);
  }

  /**
   * 任意编码转为utf8，接收response后调用
   *
   * @param mixed $anyData
   *
   * @return mixed
   */
  private function iconvAny2utf8($anyData) {
    $ret = $anyData;

    if ($this->responseCharset != self::CHARSET_UTF8) {
      $ret = self::iconvAny($this->responseCharset, self::CHARSET_UTF8, $anyData);
    }

    return $ret;
  }

  /**
   * utf8转为任意编码，向外发request时调用
   *
   * @param mixed $utf8Data
   *
   * @return mixed
   */
  private function iconvUtf82Any($utf8Data) {
    $ret = $utf8Data;

    if ($this->responseCharset != self::CHARSET_UTF8) {
      $ret = self::iconvAny(self::CHARSET_UTF8, $this->responseCharset, $utf8Data);
    }

    return $ret;
  }

  /**
   * 字符集转换，支持字符串和数组类型
   *
   * @param string $in_charset
   * @param string $out_charset
   * @param mixed $data
   * @return mixed
   */
  private static function iconvAny($in_charset, $out_charset, $data) {
    $ret;

    if (is_array($data)) {
      //数组，递归处理

      $ret = array();

      foreach ($data as $k => $v) {
        $ret[self::iconvAny($in_charset, $out_charset, $k)] = self::iconvAny($in_charset, $out_charset, $v);
      }
    } else {
      // 字符串，iconv转码
      $ret = iconv($in_charset, $out_charset . "//IGNORE", $data);

      // 字符串iconv转码失败，尝试用 mb_convert_encoding 转码
      if ($data !== false && $ret === false) {
        $ret = mb_convert_encoding($data, $out_charset, $in_charset);
      }
    }

    return $ret;
  }

  /**
   * HTTP GET
   *
   * @todo $headers 未处理
   *
   * @param string $url
   * @param array $headers
   * @param array $opts array[cookies, header]
   * @return string
   */
  public function get($url, array $headers = array(), array $opts = array()) {
    $opt = array(
      CURLOPT_URL => $this->iconvUtf82Any($url),
      CURLOPT_POST => 0,
    );

    if (isset($opts['cookies']) && $opts['cookies']) {
      $opt[CURLOPT_COOKIE] = $opts['cookies'];
    }

    if (isset($opts['header']) && $opts['header']) {
      $opt[CURLOPT_HEADER] = true;
    }

    curl_setopt_array($this->ch, $opt);
    $data = curl_exec($this->ch);

    $data = $this->iconvAny2utf8($data);

    return $data;
  }
	/**
   * HTTP POSTJson
   *
   * @todo $headers 未处理
   *
   * @param string $url
   * @param array $query
   * @param array $headers
   * @param array $opts array[cookies, header]
   * @return string
   */
  public function postJson($url, array $query, array $headers = array(), array $opts = array()) {
    $opt = array(
      CURLOPT_URL => $this->iconvUtf82Any($url),
      CURLOPT_POST => 1,
      CURLOPT_POSTFIELDS => json_encode($query,true),
			CURLOPT_HTTPHEADER=>array(
				'Content-Type: application/json',
				'Content-Length: ' . strlen(json_encode($query,true))),

		);

    if (isset($opts['cookies']) && $opts['cookies']) {
      $opt[CURLOPT_COOKIE] = $opts['cookies'];
    }

    if (isset($opts['header']) && $opts['header']) {
			$opt[CURLOPT_HEADER] = true;
		}

    curl_setopt_array($this->ch, $opt);
    $data = curl_exec($this->ch);

    $data = $this->iconvAny2utf8($data);

    return $data;
  }

  /**
   * HTTP POST
   *
   * @todo $headers 未处理
   *
   * @param string $url
   * @param array $query
   * @param array $headers
   * @param array $opts array[cookies, header]
   * @return string
   */
  public function post($url, array $query, array $headers = array(), array $opts = array()) {
    $opt = array(
      CURLOPT_URL => $this->iconvUtf82Any($url),
      CURLOPT_POST => 1,
      CURLOPT_POSTFIELDS => http_build_query((array)$query),
    );

    if (isset($opts['cookies']) && $opts['cookies']) {
      $opt[CURLOPT_COOKIE] = $opts['cookies'];
    }

    if (isset($opts['header']) && $opts['header']) {
      $opt[CURLOPT_HEADER] = true;
    }

    curl_setopt_array($this->ch, $opt);
    $data = curl_exec($this->ch);

    $data = $this->iconvAny2utf8($data);

    return $data;
  }


  /**
   * 根据parse_url格式的数组生成完整的url
   * @param array $arr 接受parse_url解析出来的所有参数,完整参数实例如下：
   *        Array
   *        (
   *            [scheme] => http            // 协议
   *            [host] => www.baidu.com     // 主机
   *            [port] => 80                // 端口，可选
                    [user] => username9
                    [pass] => password
   *            [path] => /path/file.php    // 路径(文件名)，可选
   *            [query] => a=aaa&b=aaabbb    // 参数(query string)，可选
   *            [fragment] => 123            // 附加部分或者叫做锚点(#后面的)，可选
   *        )
   *           $url = 'http://username:password@hostname:port/path?arg=value#anchor';
   */
  function http_build_url($url_arr){
      $new_url = "";
      if(!empty($url_arr['scheme']))
          $new_url .= $url_arr['scheme'] . "://";
      if(!empty($url_arr['user']))
          $new_url .= $url_arr['user']
                        .(!empty($url_arr['pass'])? ":".$url_arr['pass'] : "")
                        ."@";
      if(!empty($url_arr['host']))
          $new_url .= $url_arr['host'] ;
      if(!empty($url_arr['port']))
          $new_url .= ":".$url_arr['port'] ;
      if(!empty($url_arr['path']))
          $new_url .= $url_arr['path'] ;
      if(!empty($url_arr['query']))
          $new_url .= "?" . $url_arr['query'];
      if(!empty($url_arr['fragment']))
          $new_url .= "#" . $url_arr['fragment'];
      return $new_url;
  }
  
  public function  curl($method="GET", $url, $query=array(),array $headers = array(), array $opts = array()){
    $opt_default = array();
    $opt_curr = array();
    
    $url =   $this->iconvUtf82Any($url);
    $method = strtoupper(trim($method));
    $is_post = 0 ;

    $query_str = ( is_array($query) || is_object($query)) ? http_build_query($query) : $query;
    if ($method == "GET"){
        $url_arr = parse_url($url);
        $url_arr["query"] = isset($url_arr["query"]) ? $url_arr["query"]."&".$query_str : $query_str;
        $url = $this->http_build_url($url_arr);
        $query_str = "";
    }elseif ($method == "POST"){
        //$query_str = $query;
        $is_post = 1 ;
    }elseif ($method == "POSTFILE"){
        $method = 'POST';
        $query_str = $query;
        $is_post = 1 ;
    }elseif ($method == "DELETE"){
        $opt_curr[CURLOPT_FOLLOWLOCATION] = 1;
    }

    $opt_curr[CURLOPT_URL] = $url;
    $opt_curr[CURLOPT_POST] = $is_post;
    $opt_curr[CURLOPT_CUSTOMREQUEST] = $method;
    $opt_curr[CURLOPT_POSTFIELDS] = $query_str;
    
    if ($headers) {
        $opts[CURLOPT_HTTPHEADER] = $headers;
        $opt_curr[CURLOPT_HEADER] = false;
    }
    
    // if ($opts[CURLOPT_COOKIEFILE] && !$opts[CURLOPT_COOKIEJAR]) {
    //     $opts[CURLOPT_COOKIEJAR] = $opts[CURLOPT_COOKIEFILE];
    // }
    
  	curl_setopt_array($this->ch, $opt_default);
  	curl_setopt_array($this->ch, $opts);
  	curl_setopt_array($this->ch, $opt_curr);
  	$data = curl_exec($this->ch);

      /*
      $cookie_jar = tempnam('D:/','cookie');//存放COOKIE的文件
   	curl_setopt($this->ch, CURLOPT_HEADER, 1);
      //curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,1); //返回获取的输出文本流
      curl_setopt ( $this->ch, CURLOPT_COOKIESESSION, true );
       curl_setopt($this->ch, CURLOPT_COOKIEJAR, $cookie);
   	//curl_setopt($this->ch, CURLOPT_NOBODY, 1);
      $data = curl_exec($this->ch);
   	$all = explode("\n", trim($data));
   	print_r(	$data);exit();
      */
//   	curl_setopt($this->ch, CURLOPT_HEADER, 1);
//   	//curl_setopt($this->ch, CURLOPT_NOBODY, 1);
//   	$all = explode("\n", trim($data));
//   	print_r();exit();
/*
  	if (curl_getinfo($this->ch, CURLINFO_HTTP_CODE) == '200') {
  	    $headerSize = curl_getinfo($this->ch, CURLINFO_HEADER_SIZE);
  	    $header = substr($response, 0, $headerSize);
  	    $body = substr($response, $headerSize);
  	}*/
  	
  	$data = $this->iconvAny2utf8($data);
  	return $data;
  
   }

   /*
  function mycurl($url,array $requestData=array(),array $headers = array(), array $opts = array()) {
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_USERAGENT, isset($date['useragent']) ? $date['useragent'] : 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0' );
      curl_setopt($ch, CURLOPT_HEADER, 0);
      if (isset($date['proxy'])) {
          curl_setopt($ch, CURLOPT_PROXY, $date['proxy']);
      }
      curl_setopt($ch, CURLOPT_TIMEOUT, isset($date['timeout']) ? $date['timeout'] : 30 );
      curl_setopt($ch, CURLOPT_AUTOREFERER, true);
      if (isset($date['referer'])) {
          curl_setopt($ch, CURLOPT_REFERER, $date['referer']);
      }
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, isset($date['verifypeer']) ? $date['verifypeer'] : false );
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, isset($date['verifyhost']) ? $date['verifyhost'] : false );
      curl_setopt($ch, CURLOPT_ENCODING, ' gzip, deflate');
      if (isset($date['method'])) {
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $date['method']); //设置请求方式 GET POST PUT DELETE
      }
      if (isset($date['header'])) {
          curl_setopt($ch, CURLOPT_HTTPHEADER, $date['header']);
      }
      if (isset($date['cookie_file'])) {
          curl_setopt($ch, CURLOPT_COOKIEFILE, $date['cookie_file']);
          curl_setopt($ch, CURLOPT_COOKIEJAR, $date['cookie_file']);
      }
      if (isset($date['cookie_str'])) {
          curl_setopt($ch, CURLOPT_COOKIE, $date['cookie_str']);
      }
      if (isset($date['post_datas'])) {
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $date['post_datas']);
      }
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, isset($date['returntransfer']) ? $date['returntransfer'] : 1);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, isset($date['followlocation']) ? $date['followlocation'] : 1);
      $cons = curl_exec($ch);
      curl_close($ch);
      return $cons;
  }*/
  
  /**
   *
   * @param : $requests
   *        	= array(
   *        	array('url' => 'http://1', 'timeout' => '', 'host' => ''),
   *        	array('url' => 'http://1', 'timeout' => '', 'host' => '')
   *        	);
   * @param  $time_ms   true--s, false--ms
   * @return : $results = array(
   *         'content1',
   *         'content1',
   *         );
   */
  public function multiRequest($requests,$time_ms=false)
  {

  	$mh = curl_multi_init();
  	$handles = array();
  	$results = array();
  	$map = array();
  	foreach ($requests as $key => $value) {
  		if ($value['url']) {
  			$handles[$key] = curl_init($value['url']);
  			if ($value['timeout']) {
  				if(true === $time_ms){
  					curl_setopt($handles[$key], CURLOPT_NOSIGNAL, 1);
  					if (empty($value['timeout'])) {
  						$requests[$key]['timeout'] = $value['timeout'] = 1000;
  					}
  					curl_setopt($handles[$key], CURLOPT_TIMEOUT_MS, $value['timeout']);
  					curl_setopt($handles[$key], CURLOPT_CONNECTTIMEOUT_MS, 100);  //尝试连接等待的时间
  					//             			curl_setopt($handles[$key], CURLE_OPERATION_TIMEOUTED, 1);  //尝试连接等待的时间
  				}
  				else{
  					if (empty($value['timeout'])) {
  						$requests[$key]['timeout'] = $value['timeout'] = 1;
  					}
  					curl_setopt($handles[$key], CURLOPT_TIMEOUT, $value['timeout']);
  					curl_setopt($handles[$key], CURLOPT_CONNECTTIMEOUT, 1);  //尝试连接等待的时间

  				}
  			}
  			else{
  				curl_setopt($handles[$key], CURLOPT_TIMEOUT, 1);
  				curl_setopt($handles[$key], CURLOPT_CONNECTTIMEOUT, 1);  //尝试连接等待的时间
  			}

  			curl_setopt($handles[$key], CURLOPT_FAILONERROR, 1);
  			curl_setopt($handles[$key], CURLOPT_RETURNTRANSFER, true);
  			if ($value['data']) {
  				curl_setopt($handles[$key], CURLOPT_POST, 1);
  				curl_setopt($handles[$key], CURLOPT_POSTFIELDS, $value['data']);
  			}
  			curl_multi_add_handle($mh, $handles[$key]);
  			$map[$handles[$key]] = array('key'=>$key,'value'=>$value);
  		} else {
  			unset($requests[$key]);
  		}
  	}

  	if (empty($handles)) {
  		curl_multi_close($mh);
  		return $results;
  	}

  	$responses = array();
  	do {
  		while (($code = curl_multi_exec($mh, $active)) == CURLM_CALL_MULTI_PERFORM) ;

  		if ($code != CURLM_OK) {
  			break;
  		}
  		$done = '';
  		while ($done = curl_multi_info_read($mh)) {
  			$info = curl_getinfo($done['handle']);
  			$error = curl_error($done['handle']);
  			$errno = curl_errno($done['handle']);
  			$results[$map[$done['handle']]['key']] = curl_multi_getcontent($done['handle']);
  			// remove the curl handle that just completed
  			curl_multi_remove_handle($mh, $done['handle']);
  			curl_close($done['handle']);
  		}

  		// Block for data in / output; error handling is done by curl_multi_exec
  		if ($active > 0) {
  			curl_multi_select($mh, 0.5);
  		}

  	} while ($active);

  	curl_multi_close($mh);
  	return $results;
  }
  /**
   * HTTP PUT
   *
   * @todo $headers 未处理
   *
   * @param string $url
   * @param array $query
   * @param array $headers
   * @param array $opts array[cookies, header]
   * @return string
   */
  public function put($url, array $query, array $headers = array(), array $opts = array()) {
  	$opt = array(
  			CURLOPT_URL => $this->iconvUtf82Any($url),
  			CURLOPT_POST => 0,
  			CURLOPT_CUSTOMREQUEST => 'PUT',
  			CURLOPT_POSTFIELDS => http_build_query((array)$query),
  	);

  	if (isset($opts['cookies']) && $opts['cookies']) {
  		$opt[CURLOPT_COOKIE] = $opts['cookies'];
  	}

  	if (isset($opts['header']) && $opts['header']) {
  		$opt[CURLOPT_HEADER] = true;
  	}

  	curl_setopt_array($this->ch, $opt);
  	$data = curl_exec($this->ch);

  	$data = $this->iconvAny2utf8($data);
  	return $data;
  }

  public function putJson($url, array $query, array $headers = array(), array $opts = array()){
    $opt = array(
        CURLOPT_URL => $this->iconvUtf82Any($url),
        CURLOPT_POST => 0,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => json_encode($query),
        CURLOPT_HTTPHEADER=>array(
            'Content-Type:application/json;charset=utf-8',
            'Accept:application/json',
        ),
    );

  	if (isset($opts['cookies']) && $opts['cookies']) {
  		$opt[CURLOPT_COOKIE] = $opts['cookies'];
  	}

  	if (isset($opts['header']) && $opts['header']) {
  		$opt[CURLOPT_HEADER] = true;
  	}

  	curl_setopt_array($this->ch, $opt);
  	$data = curl_exec($this->ch);

  	$data = $this->iconvAny2utf8($data);
  	return $data;
  }

  /**
   * HTTP DELETE
   *
   * @param string $url
   * @param array/string $query
   * @param array $headers
   * @param array $opts array[cookies, header]
   * @return string
   */
  public function delete($url, $query = '', array $headers = array(), array $opts = array()) {
    $query = (is_array($query)) ? http_build_query($query) : $query; // 保证string

  	$opt = array(
    	CURLOPT_URL => $this->iconvUtf82Any($url),
    	CURLOPT_FOLLOWLOCATION => 1,
    	CURLOPT_CUSTOMREQUEST => 'DELETE',
    	CURLOPT_POSTFIELDS => $query, // string
  	);

  	if (isset($opts['cookies']) && $opts['cookies']) {
  		$opt[CURLOPT_COOKIE] = $opts['cookies'];
  	}

  	curl_setopt_array($this->ch, $opt);
  	$data = curl_exec($this->ch);

  	$data = $this->iconvAny2utf8($data);
  	return $data;
  }

  /**
   * HTTP POST 上传文件binary流
   *
   * @todo $headers 未处理
   * @author xielei14
   *
   * @param string $url
   * @param array $query
   * @param array $headers
   * @param array $opts array[cookies, header]
   * @return string
   */
  public function postFile($url, $data, array $headers = array(), array $opts = array()) {
    $opt = array(
      CURLOPT_URL => $this->iconvUtf82Any($url),
      CURLOPT_POST => 1,
      CURLOPT_POSTFIELDS => $data,
    );

    if (isset($opts['cookies']) && $opts['cookies']) {
      $opt[CURLOPT_COOKIE] = $opts['cookies'];
    }

    if (isset($opts['header']) && $opts['header']) {
      $opt[CURLOPT_HEADER] = true;
    }

    curl_setopt_array($this->ch, $opt);
    $data = curl_exec($this->ch);

    $data = $this->iconvAny2utf8($data);

    return $data;
  }

}
