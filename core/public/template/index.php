<?php

use Core\ProgrezAPI;

$poweredFID = 'e4caf4e0e4dece-2121-5ea64e5839d83998e6f64e0e';

$prgrz       = new ProgrezAPI(PROGREZ_USERKEY);
$poweredData = $prgrz->getSubTask(PROGREZ_TOKENPROJECT, $poweredFID, 'task_name, files');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="<?=RESOURCE?>/favicon.ico" type="image/x-icon">

  <link rel=preconnect href=https://fonts.googleapis.com>
  <link rel=preconnect href=https://fonts.gstatic.com crossorigin>
  <link href=https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap rel=stylesheet>

  <link rel=stylesheet href=<?=RESOURCE?>/fonts/hmti-fonticons.css>
  <link rel=stylesheet href=<?=RESOURCE?>/css/main.css>
  <?php echo isset($CustomCSS) ? $CustomCSS : '' ?>

  <title><?=$title?></title>
</head>
<body>
  <!-- Header -->
<header>
  <span class=logo>
    <img src=<?=RESOURCE?>/img/hmti_logo.png alt=hmti_logo>
  </span>
  <nav class=menu>
    <ul class=menu-items>
      <li class="menu-item">
        <a href=<?=BASE_URL?>/# class="<?= $activePage=='home'? 'active' : '' ?> home-menu">Home</a>
      </li>
      <li class="menu-item">
        <a href=<?=BASE_URL?>/#profil class="<?= $activePage=='profil'? 'active' : '' ?> profil-menu">Profil</a>
      </li>
      <li class="menu-item">
        <a href=<?=BASE_URL?>/berita class="<?= $activePage=='berita'? 'active' : '' ?> berita-menu">Berita</a>
      </li>
      <li class="menu-item dropdown">
        <span class="kegiatan-menu dropdown-trigger"> Kegiatan <i class="hf caret-down"></i> </span>
        <ul class="dropdown-menu kegiatan-menu">
          <li class="dropdown-item skill-class">
            <a href=<?=BASE_URL?>/kegiatan#skill-class>HMTI Skill Class</a>
          </li>
          <li class="dropdown-item hmti-fun">
            <a href=<?=BASE_URL?>/kegiatan#hmti-fun>HMTI Fun</a>
          </li>
          <li class="dropdown-item march-event">
            <a href=<?=BASE_URL?>/kegiatan#march-event>March Event</a>
          </li>
          <li class="dropdown-item it-expo">
            <a href=<?=BASE_URL?>/kegiatan#it-expo>IT Expo</a>
          </li>
        </ul>
      </li>
      <li class="menu-item dropdown">
        <span class="projects-menu dropdown-trigger"> Projects <i class="hf caret-down"></i> </span>
        <ul class="dropdown-menu projects-menu">
          <li class="dropdown-item ai-project">
            <a href=<?=BASE_URL?>/#keterampilan>Artificial Intelligence</a>
          </li>
          <li class="dropdown-item iot-project">
            <a href=<?=BASE_URL?>/#keterampilan>Internet of Things</a>
          </li>
          <li class="dropdown-item gis-project">
            <a href=<?=BASE_URL?>/#keterampilan>Geographic Information System</a>
          </li>
          <li class="dropdown-item troubleshooting-project">
            <a href=<?=BASE_URL?>/#keterampilan>Troubleshooting</a>
          </li>
          <li class="dropdown-item mobile-dev-project">
            <a href=<?=BASE_URL?>/#keterampilan>Mobile App Development</a>
          </li>
          <li class="dropdown-item networking-project">
            <a href=<?=BASE_URL?>/#keterampilan>Network Engineering</a>
          </li>
          <li class="dropdown-item web-dev-project">
            <a href=<?=BASE_URL?>/#keterampilan>Web Development</a>
          </li>
          <li class="dropdown-item game-dev-project">
            <a href=<?=BASE_URL?>/#keterampilan>Game Development</a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href=<?=BASE_URL?>/arsip class="<?= $activePage=='arsip'? 'active' : '' ?> arsip-menu">Arsip</a>
      </li>
    </ul>
  </nav>
</header>
<?=$body?>
<!-- Footer -->
<footer>
  <section class="about cards">
    <div class="profil card">
      <div class="logo">
        <img height=120 src=<?=RESOURCE?>/img/hmti_logo.png alt=hmti_logo>
      </div>
      <div class="information">
        <div class="sekretariat">
          <h4 class="title">Sekretariat:</h4>
          <p class="text">Jl. Jati Metro, Kampus 3 Unkhair, Kelurahan Jati, Ternate Selatan, Kota Ternate</p>
        </div>
        <div class="email">
          <h4 class="title">Email:</h4>
          <p class="text">hmtiunkhair@gmail.com</p>
        </div>
        <div class="website">
          <h4 class="title">Website:</h4>
          <a href=# class="text">www.hmtiunkhair.org</a>
        </div>
      </div>
    </div>
    <div class="terkait card">
      <h3 class=card-title>Terkait</h3>
      <div class="card-body">
        <p>Terkait Kami:</p>
        <div class="items">
          <div class="item">
            <strong>Universitas Khairun</strong>
            <a href=https://unkhair.ac.id/ target=_blank>www.unkhair.ac.id</a>
          </div>
          <div class="item">
            <strong>Fakultas Teknik Universitas Khairun</strong>
            <a href=https://ft.unkhair.ac.id/ target=_blank>www.ft.unkhair.ac.id</a>
          </div>
          <div class="item">
            <strong>Prodi Informatika Universitas Khairun</strong>
            <a href=https://if.unkhair.ac.id/ target=_blank>www.if.unkhair.ac.id</a>
          </div>
        </div>
      </div>
    </div>
    <div class="medsos card">
      <h3 class="card-title">Media Sosial</h3>
      <div class="card-body">
        <p>Ikuti media sosial kami untuk informasi 
          terbaru seputar kegiatan kami.</p>
        
        <div class="items">
          <div class="item">
            <a href=https://instagram.com/hmti_unkhair/ target=_blank >
              <i class="hf instagram-icon"></i>
            </a>
          </div>
          <div class="item">
            <a href=https://facebook.com/hmtiunkhair/ target=_blank >
              <i class="hf facebook-icon"></i>
            </a>
          </div>
          <div class="item">
            <a href=https://instagram.com/hmti_unkhair/ target=_blank >
              <i class="hf twitter-icon"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=poweredby>
    <div class=powered-heading>
      <h5><?=$poweredData['task_name']?></h5>
    </div>
    <div class=powered-items>
      <ul>
        <?php
        for($i=0;$i<count($poweredData['files']);$i++) {
          echo "
          <li class=powered-item> <a href=https://progrez.cloud target=_blank ><img src=".$poweredData['files'][$i]['link']." alt=poweredby></a> </li>
          ";
        }
        ?>
      </ul>
    </div>
  </section>
  <span class=copyright>
    <span class=copy-icon>&copy;</span><span class=copy-text>2022 Himpunan Mahasiswa Teknik Informatika Universitas Khairun. All Right Reserved. Hak Cipta HMTI Unkhair.</span>
  </span>
</footer>
</body>
</html>