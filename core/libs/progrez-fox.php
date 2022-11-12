<?php
  include_once('libcurl.php');

  class progrezfox {
    var $foxauth_file = 'pgz-auth';
    var $formlogin;

    function login(){
      $c = new czUrl;
      $c->method = 'POST';
      $c->url = 'https://progrez.cloud/s/fox/login';
      $c->data = $this->formlogin;

      $grab = $c->fetch();
      $json = json_decode($grab['html'], true);

      if($json['errno'] == '0' && !is_null($json)){
        $this->credential_fox_save($json['credentials']);
        return true;
      }
      return false;
    }

    function project($obj){
      $data = json_encode($obj);

      $c = new czUrl;
      if(file_exists($this->foxauth_file)){
        $c->SET_HEADER = ['Credential-Fox: '.$this->credential_fox_read()];
      } else {
        $login = $this->login();
        if(!$login){
          return false;
        } else {
          $c->SET_HEADER = ['Credential-Fox: '.$this->credential_fox_read()];
        }
      }
      $c->url = 'https://progrez.cloud/s/fox/project';
      $c->method = 'POST';
      $c->data = $data;
      $grab = $c->fetch();

      $json = json_decode($grab['html'], true);
      if($json['errno'] != '0'){
        $this->login();
      } else {
        $this->credential_fox_save($json['credentials']);
        return $json['data'];
      }
    }

    function task($obj){
      $data = json_encode($obj);

      $c = new czUrl;
      if(file_exists($this->foxauth_file)){
        $c->SET_HEADER = ['Credential-Fox: '.$this->credential_fox_read()];
      } else {
        $login = $this->login();
        if(!$login){
          return false;
        } else {
          $c->SET_HEADER = ['Credential-Fox: '.$this->credential_fox_read()];
        }
      }
      $c->url = 'https://progrez.cloud/s/fox/task';
      $c->method = 'POST';
      $c->data = $data;
      $grab = $c->fetch();
      $json = json_decode($grab['html'], true);
      if(isset($json)) {
        if($json['errno'] != '0'){
          $this->login();
        } else {
          $this->credential_fox_save($json['credentials']);
          return $json['data'];
        }
      }
      
    }

    private function credential_fox_save($credentials){
      $fp = fopen($this->foxauth_file,'w');
      fwrite($fp,json_encode($credentials));
      fclose($fp);
    }
    private function credential_fox_read(){
      $credentials = file_get_contents($this->foxauth_file);
      return $credentials;
    }
  }
