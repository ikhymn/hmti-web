<?php

use Core\ProgrezAPI;

$flyingID = '5e9c1c9bd9dc99-2224-5eab132b0733264ee6f64e0e';

$prgrz = new ProgrezAPI(PROGREZ_USERKEY);
$data  = $prgrz->getTasks(PROGREZ_TOKENPROJECT, $flyingID, 'task_name,files,description,datetime_done,flying_id');

$news     = $data['subtask'];
$newest   = $news[count($news)-1];
$topnews  = [
              $news[count($news)-2],
              $news[count($news)-3],
              $news[count($news)-4],
            ];

$newsEls = [];
for ($i=0;$i<count($news);$i++) {
  $titleblog = $news[$i]['task_name'];
  $img       = $news[$i]['files'][0]['link'];
  $content   = substr(strip_tags($news[$i]['description']), 0, 100).'...';
  $datetime  = $news[$i]['datetime_done'];

  $el = ' 
    <div class="card news-item">
      <div class="card-thumbnail">
        <img src='.$img.' alt="thumbnail">
      </div>
      <div class="card-content">
        <h3 class="card-title news-headline">
          <a href='.BASE_URL.'/berita/detail/'.$news[$i]['flying_id'].' >
            '.$titleblog.'
          </a>
        </h3>
        <p class="news-date"><i class="hf time-icon"></i> '.$datetime.'</p>
        <p class="news-paragraph">'.$content.'</p>
      </div>
    </div>
  ';
  array_unshift($newsEls, $el);
}

$topEls = [];
for ($i=0;$i<count($topnews);$i++) {
  $titleblog = $topnews[$i]['task_name'];
  $img       = $topnews[$i]['files'][0]['link'];
  $content   = substr(strip_tags($topnews[$i]['description']), 0, 80).'...';

  $el = ' 
    <div class="popular-news-item card">
      <div class="card-img">
        <img src='.$img.' alt=popular-thumbnail>
      </div>
      <div class="card-body">
        <div class="card-body-title">
          <a href='.BASE_URL.'/berita/detail/'.$topnews[$i]['flying_id'].' >
            <h5>'.$titleblog.'</h5>
          </a>
        </div>
        <div class="card-body-paragraph">
          <p>'.$content.'</p>
        </div>
      </div>
    </div>
  ';

  array_unshift($topEls, $el);
}

/////////////////////////////////////////////////////////////////////////////

$title      = 'Berita';
$CustomCSS  = '<link rel=stylesheet href='.RESOURCE.'/css/berita.css>';
$activePage = 'berita';
$body       = '
<section class=top-news>
  <div class=hero>
    <div class=hero-background>
      <img src='.RESOURCE.'/img/berita-hero.jpg alt=hero-berita loading=lazy>
    </div>
    <div class=hero-overlay>
      <h1 class="headline">'.$data['task_name'].' Terbaru</h1>
      <div class=news-container>
        <div class="newest">
          <div class="img-thumbnail">
            <img src='.$newest['files'][0]['link'].' alt=newest-thumbnail>
          </div>
          <div class="news-content">
            <p class="date"><i class="hf time-icon"></i> '.$newest['datetime_done'].'</p>
            <h4 class="news-headline">'.$newest['task_name'].'</h4>
            <p class="news-paragraph">'.substr(strip_tags($newest['description']),0,300).'...</p>
            <div class="news-cta">
              <a href='.BASE_URL.'/berita/detail/'.$newest['flying_id'].' ><button class="read-more cta-btn">Lanjut Baca</button></a> 
            </div>
          </div>
        </div>
        <div class="populars">
          <div class="popular-title">
            <h3>Berita Populer</h3>
          </div>
          <div class="popular-news-list cards">
            '.implode('', $topEls).'
          </div>
          <div class="popular-cta">
            <a href='.BASE_URL.'/berita#news><button class=cta-btn>Lebih Banyak</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="news container" id="news">
  <h2 class="title">'.$data['task_name'].'</h2>
  <div class="cards news-list">
    '.implode('', $newsEls).'
  </div>
  <nav class="pagination">
    <ul>
      <li class="arrow">
        <a href=#>&lt;</a>
      </li>
      <li class="active">
        <a href=#>1</a>
      </li>
      <li>
        <a href=#>2</a>
      </li>
      <li class="arrow">
        <a href=#>&gt;</a>
      </li>
    </ul>
  </nav>
</section>
';