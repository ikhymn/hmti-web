<?php
function pgzfox($route,$obj){
  include_once('progrez-fox.php');
  $formlogin = [
    'type'    => 'userkey',
    'userkey' => 'OKEL0R1SYFVYF9BS07EKJ12GTS82E7FRGJ260SNNX7B16CIV8M5HDWMWDKNHXXX'
  ];
  $pgzfox = new progrezfox;
  $pgzfox->foxauth_file = 'pgzfox-credentials';
  $pgzfox->formlogin = $formlogin;

  switch($route){
    case 'project':
      $res = $pgzfox->project($obj);
    break;
    case 'task':
      $res = $pgzfox->task($obj);
    break;
  }
  return $res;
}

$obj_task = [
  'token'     => '75yb4epqoxqxpxcyescmjdn6jmpisnqo',
  'flying_id' => '9bd9dc995e9c1c-1f22-5ea6ree6f64b1b1307330e0e',
  'fields'    => 'task_name',
  'subtask'   => [
      'fields'  => 'task_name,description,datetime_done',
      'where'   => [
        'status_done' => 1
      ]
  ]
];

$data = pgzfox('task',$obj_task);
$subtask = $data['subtask'];
for($i=0;$i<count($subtask);$i++){
// CODE HERE
}

$title    = $subtask[$i]['task_name'];
$img = $subtask[$i]['files'][0]['link'];
$content  = substr(strip_tags($subtask[$i]['description']),0,200).'...';
$datetime = $subtask[$i]['datetime_done'];