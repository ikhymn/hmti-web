<?php

use Core\ProgrezAPI;

$kegiatanFID = '0726f6772657a7-22-5ea64ee6f64e0cc4cec1ccce';

$prgrz        = new ProgrezAPI(PROGREZ_USERKEY);
$kegiatanData = $prgrz->getTasks(PROGREZ_TOKENPROJECT, $kegiatanFID, 'task_name,files,description');

//var_dump($kegiatanData);die();

$itExpo      = $kegiatanData['subtask'][0];
$marchEvent  = $kegiatanData['subtask'][1];
$hmtiFun     = $kegiatanData['subtask'][2];
$skillClass  = $kegiatanData['subtask'][3];

$title     = "Kegiatan";
$CustomCSS = '<link rel=stylesheet href='.RESOURCE.'/css/projects.css >';
$body      = " 
<main class='projects'>
<h1 class='project-title'>Projects</h1>
<section class='skill-class hmti-event' id=skill-class>
  
</section>
</main>";