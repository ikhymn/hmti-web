<?php 

use Core\ProgrezAPI;

$flyingID = $data[0];
$prgrz    = new ProgrezAPI(PROGREZ_USERKEY);
$news     = $prgrz->getSubTask(PROGREZ_TOKENPROJECT, $flyingID, 'task_name,description,files,datetime_done');

var_dump($news);die();

$titleblog = $news['task_name'];
$img       = $news['files'][0]['link'];
$datetime  = $news['datetime_done'];
$content   = $news['description'];

$title      = "Detail Berita";
$CustomCSS  = "<link rel=stylesheet href=".RESOURCE."/css/berita-detail.css >";
$activePage = 'berita';
$body       = ' 
<main id=main>
  <section class=blog>
    <section class=blog-hero>
      <h1 class=hero-title>'.$titleblog.'</h1>
      <h4 class=datetime><i class="hf time-icon"></i> '.$datetime.'</h4>

      <div class=hero-image>
        <img src='.$img.' alt=popular-thumbnail >
      </div>
    </section>
    <section class=blog-body>
      <article class=paragraphs>
        '.$content.'
      </article>
    </section>
  </section>
</main>
';