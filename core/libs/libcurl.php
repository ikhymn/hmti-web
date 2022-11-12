<?php
	# libcurl v1.3
        # 1.3
            # handling error
        # 1.2
            # add ssl_verify_peer
        # 1.1
            # added toFile
	# Author : K4pT3N
	# URL : www.ExploreCrew.org

	class czUrl {
		var $url;
		var $method='GET';
		var $cookie='/tmp/cookies';
		var $follow=true;
		var $curl_return=true;
		var $useragent='cz.libcurl';
		var $nobody=false;
		var $verbose=false;
    var $toFile = false;
		var $timeout = false;
		var $ip_resolve = false;
		// POST METHOD
		var $data;

		// IF PROXY
		var $proxy=false;
		var $proxy_server;
		var $proxy_auth; // "3491de8885dd989b:71d262369c0be9fd";
		var $isFile=false;

		// IF SOCKS5
		var $socks5=false;

		// OPTIONAL
		var $SET_HEADER=false;
		var $referer=false;
    var $usrpwd = false;
		var $USERNAME = false;
		var $customrequest = false;

		// SSL
		var $ssl_verify_host  = false;
        var $ssl_verify_peer  = false;

		function postFile(){
			$file=$this->isFile;
			$filenya[$file['form_name']]=new CURLFile($file['tmp_name'],$file['type'],$file['name']);
			$query=(is_array($this->data))?array_merge($filenya,$this->data):$filenya;
			return $query;
		}

		function fetch(){
			$ch = curl_init ();
				curl_setopt($ch, CURLOPT_URL, $this->url);
				curl_setopt($ch, CURLOPT_USERAGENT, $this->useragent);
			//if($this->cookie!==''){
				$cookie=$this->cookie;
				curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie);
				curl_setopt ($ch, CURLOPT_COOKIEFILE, $cookie);
			//}
				curl_setopt ($ch, CURLOPT_RETURNTRANSFER, $this->curl_return);
			if(strtoupper($this->method)=='POST'){
				curl_setopt($ch, CURLOPT_POST, true);
				if($this->isFile){
					curl_setopt($ch, CURLOPT_POSTFIELDS, $this->postFile());
				} else {
					$data = (is_array($this->data)) ? http_build_query($this->data) : $this->data;
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				}
			}
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $this->follow);

			if($this->proxy){
				curl_setopt($ch, CURLOPT_PROXY, $this->proxy_server);
				curl_setopt($ch, CURLOPT_PROXYUSERPWD, $this->proxy_auth);
			}
			if($this->ip_resolve) curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
			if($this->customrequest) curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $this->customrequest);
			if($this->SET_HEADER) curl_setopt($ch, CURLOPT_HTTPHEADER, $this->SET_HEADER);
			if($this->referer) curl_setopt($ch, CURLOPT_REFERER, $this->referer);
			if($this->usrpwd) curl_setopt($ch, CURLOPT_USERPWD, $this->usrpwd['user'].':'.$this->usrpwd['password']);
			if($this->USERNAME) curl_setopt($ch, CURLOPT_USERNAME, $this->USERNAME);
			if($this->socks5)	curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
			if($this->nobody)	curl_setopt($ch, CURLOPT_NOBODY,true);
			if($this->timeout){
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
				curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout); //timeout in seconds
			}
			if($this->verbose){
				curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
				$streamVerboseHandle = fopen('php://temp', 'w+');
				curl_setopt($ch, CURLOPT_STDERR, $streamVerboseHandle);
				//curl_setopt($ch, CURLOPT_STDERR, $);
			}
			// if request header only
			if(strtoupper($this->method=='HEAD')){
				curl_setopt($ch, CURLOPT_HEADER, true);
				curl_setopt($ch, CURLOPT_NOBODY,true);
			}
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $this->ssl_verify_host);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->ssl_verify_peer);

      // Download to file
      if($this->toFile){
      	$fp = fopen($this->toFile,'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
      }

			//var_dump($this);

			//logs_be('DEBUG_CURL_USERPWD',1,json_encode($ch));
      // IF ERROR
      $op['html']		= curl_exec($ch);
      $op['info']		= curl_getinfo($ch);
			$op['errno']	= 0;
			$op['errmsg']	= 'OK';

			if($this->verbose){
				if ($op['html'] === FALSE) {
				    printf("cUrl error (#%d): %s<br>\n",
				           curl_errno($curlHandle),
				           htmlspecialchars(curl_error($curlHandle)))
				           ;
				}

				rewind($streamVerboseHandle);
				$verboseLog = stream_get_contents($streamVerboseHandle);

				echo "cUrl verbose information:\n",
				     "<pre>", htmlspecialchars($verboseLog), "</pre>\n";
			}

			if($errno = curl_errno($ch)) {
      	$op['errno']    = $errno;
        $op['errmsg']   = curl_strerror($errno);
        $op['html']     = 'Error ('.$errno.'): '.$op['errmsg'];
			}

			curl_close($ch);
			if($this->toFile){
      	fclose($fp);
      }
			return $op;
		}
	}
	/* GET
	$curl=new czUrl;
	$curl->url='http://localhost/cafezit.com/get/zit/?tokenkey=X6Y16O9XNCBGSPRU';
	$grab=$curl->fetch();
	echo '<pre>';
	print_r($grab);
	*/
	// POST
	/*
	$c=new czUrl;
	$c->url="http://localhost/cafezit.com/post/zit/create";
	$c->method='POST';
	$c->data='postzit=wadepak&tokenkey=X6Y16O9XNCBGSPRU';
	$grab=$c->fetch();
	echo '<pre>';
	print_r($grab);
	*/
	// POST FILE
	/*
	$curl->url="http://localhost/zit-hacking/2014-des-27/defense/defender-1-clientside.php";
	$curl->method="post";
		$file['tmp_name']='bd-via-curl.php.png';
		$file['name']='bd.php';
		$file['type']='image/png';
		$file['form_name']='img';
	$curl->data=array('ini'=>'ya ini yang string');
	$curl->isFile=$file;
	$curl->SET_HEADER=array('Content-Type: image/jpg');
	echo '<pre>';
	print_r(
		$curl->fetch()
	);
	*/
	// OPTIONAL
	// $curl->SET_HEADER=array('Content-Type: image/jpg');

	// SOCKS5
	/*
	$curl=new czUrl;
	$curl->url="http://localhost/zit-hacking/2014-des-27/defense/defender-1-clientside.php";
	$curl->proxy=true;
	$curl->socks5=true;
	$curl->proxy_server="http://127.0.0.1:9090";
	$curl->proxy_auth="a:b";
	echo $curl->fetch();
	*/
