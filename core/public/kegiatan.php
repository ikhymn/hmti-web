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
$CustomCSS = '<link rel=stylesheet href='.RESOURCE.'/css/kegiatan.css >';
$body      = " 
<section class='skill-class hmti-event' id=skill-class>
  <div class=hero-background>
    <div class=hero-img>
      <img src=".RESOURCE."/img/skill-class-img.jpg alt=hero-skill-class>
    </div>
  </div>
  <div class=section-overlay>
    <div class=events-text>
      <h1 class=section-title>".$skillClass['task_name']."</h1>
      <p class=section-text>
        ".$skillClass['description']."
      </p>
      <a href=# class=section-cta><button class=cta-btn>Selengkapnya &LongRightArrow; </button></a>
    </div>
    <div class=events-image>
      <img src=".RESOURCE."/img/skill-class-img.jpg alt=skill-class-image loading=lazy>
    </div>
  </div>
</section>
<section class='hmti-fun hmti-event' id=hmti-fun>
  <div class=hero-background>
    <div class=hero-img>
      <img src=".RESOURCE."/img/hmti-fun-img.jpg alt=hero-hmti-fun>
    </div>
  </div>
  <div class=section-overlay>
    <div class=events-image>
      <img src=".RESOURCE."/img/hmti-fun-img.jpg alt=hmti-fun-image loading=lazy>
    </div>
    <div class=events-text>
      <h1 class=section-title>".$hmtiFun['task_name']."</h1>
      <p class=section-text>
        ".$hmtiFun['description']."
      </p>
      <a href=# class=section-cta><button class=cta-btn>Selengkapnya &LongRightArrow; </button></a>
    </div>
  </div>
</section>
<section class='march-event hmti-event' id=march-event>
  <div class=hero-background>
    <div class=hero-img>
      <img src=".RESOURCE."/img/march-event-img.jpg alt=hero-march-event>
    </div>
  </div>
  <div class=section-overlay>
    <div class=events-text>
      <h1 class=section-title>".$marchEvent['task_name']."</h1>
      <p class=section-text>
        ".$marchEvent['description']."
      </p>
      <a href=# class=section-cta><button class=cta-btn>Selengkapnya &LongRightArrow; </button></a>
    </div>
    <div class=events-image>
      <img src=".RESOURCE."/img/march-event-img.jpg alt=march-event-image loading=lazy>
    </div>
  </div>
</section>
<section class='it-expo hmti-event' id=it-expo>
  <div class=hero-background>
    <div class=hero-img>
      <img src=".RESOURCE."/img/it-expo-img.jpg alt=hero-it-expo>
    </div>
  </div>
  <div class=section-overlay>
    <div class=events-image>
      <img src=".RESOURCE."/img/it-expo-img.jpg alt=it-expo-image loading=lazy>
    </div>
    <div class=events-text>
      <h1 class=section-title>".$itExpo['task_name']."</h1>
      <p class=section-text>
        ".$itExpo['description']."
      </p>
      <a href=# class=section-cta><button class=cta-btn>Selengkapnya &LongRightArrow; </button></a>
    </div>
  </div>
</section>
";