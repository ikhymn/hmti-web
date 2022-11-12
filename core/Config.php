<?php

namespace Core;

class Config {
  protected $route  = ['home'];
  protected $params = [];

  function __construct() {
    $url = isset($_GET['url'])? $_GET['url'] : 'home';
    $url = rtrim($url);
    $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));

    $this->route = $url;

    if (count($url)>2) {
      $this->route  = [$url[0], $url[1]];
      $this->params = array_slice($url, 2, 666);
    }
    
    $this->route = implode('/', $this->route);

    if (file_exists(BASE_PATH.'/core/public/'.$this->route.'.php')) {
      $title      = '';
      $body       = '';
      $activePage = '';
      $data       = $this->params;

      require BASE_PATH.'/core/public/'.$this->route.'.php';
      require BASE_PATH.'/core/public/template/index.php';
    }
  }
}