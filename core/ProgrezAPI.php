<?php

namespace Core;
use progrezfox;

class ProgrezAPI {
  var $foxAPI;
  function __construct($userkey) {
    include_once LIB_PATH.'/progrez-fox.php';
    $this->foxAPI = new progrezfox;
    $this->loginUserKey($userkey);
  }

  function loginUserKey($userkey) {
    $this->foxAPI->foxauth_file = BASE_PATH.'/core/credentials/pgzfox-credentials';
    $this->foxAPI->formlogin = [
        'type'    => 'userkey',
        'userkey' => $userkey
      ];
  }

  function getTasks($t, $f, $i) {
    $obj = [
              'token'     => $t,
              'flying_id' => $f,
              'fields'    => 'task_name',
              'subtask'   => [
                'fields'   => $i,
                'where'    => [
                  'status_done' => 1
                ]
              ]
            ];
    
    $req = $this->foxAPI->task($obj);
    if(!is_null($req)) {
      $res = $req;
    } else {
      $res = 'not_found';
    }
    return $res;
  }

  function getSubTask($t, $f, $i) {
    $obj = [
              'token'     => $t,
              'flying_id' => $f,
              'fields' => $i
            ];

    $req = $this->foxAPI->task($obj);
    if(!is_null($req)) {
      $res = $req;
    } else {
      $res = 'not_found';
    }
    return $res;
  }

  function getProject($data) {
    return $this->foxAPI->project($data);
  }
}

