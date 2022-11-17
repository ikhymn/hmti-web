<?php 

use Core\ProgrezAPI;

$homeFID = "decee4caf4e0e4-1f25-5ea64ee6f719995839984e0e";

$prgrz      = new ProgrezAPI(PROGREZ_USERKEY);
$homeData   = $prgrz->getTasks(PROGREZ_TOKENPROJECT, $homeFID, 'task_name,description');

if($homeData == 'not_found') {
  $body = " 
    <h1>Something Wrong with Connection to Progrez.Cloud</h1>
  ";
  //die();
}

$profilData       = $homeData['subtask'][0];
$strukturData     = $homeData['subtask'][1];
$keterampilanData = $homeData['subtask'][2];

$title      = 'Home';
$CustomCSS  = '<link rel="stylesheet" href='.RESOURCE.'/css/home.css>';
$activePage = 'home';

$body       = ' 
  <section class=home>
    <div class=hero>
      <div class=hero-background>
        <img src='.RESOURCE.'/img/hero-image.jpg alt=hero-home loading=lazy>
      </div>
      <div class=hero-overlay>
        <div class=home-content>
          <div class=content-logo>
            <img src='.RESOURCE.'/img/hmti_logo.png alt=hmti_logo>
          </div>
          <div class=content-text>
            <div class="welcome-text 1"><h2>Selamat Datang di Laman Resmi</h2></div>
            <div class="welcome-text 2"><h1>Himpunan Mahasiswa Teknik Informatika</h1></div>
            <div class="welcome-text 3"><h1>Universitas Khairun</h1></div>
          </div>
          <div class=content-cta>
            <a href=#profil class=cta-profil><button class=cta-btn>Tentang Kami</button></a>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <section class="container profil-singkat wow fadeInUp" data-wow-duration=1s data-wow-delay=.3s id=profil>
    <div class=content>
      <div class=content-title>
        <h2 class=profile-title>'.$profilData['task_name'].'</h2>
      </div>
      <div class="content paragraph">
        '.$profilData['description'].'
      </div>
    </div>
    <aside class=content-img>
      <img width="300" src='.RESOURCE.'/img/hmti_logo.png alt=hmti_logo loading=lazy>
    </aside>
  </section>
  <section class="container struktur-organisasi wow fadeInLeft" data-wow-delay=".3s">
    <div class=content>
      <div class=content-title>
        <h2 class=title>'.$strukturData['task_name'].'</h2>
      </div>
      <div class="content-body">
        <div class="body-text">
          <a href="'.RESOURCE.'/img/BAGAN STRUKTUR HMTI PERIODE 2022 - 2023.png" download>
            <img class="struktur-img" src="'.RESOURCE.'/img/BAGAN STRUKTUR HMTI PERIODE 2022 - 2023.png" alt="Struktur Organisasi HMTI 2022-2023">
          </a>
        </div>
        <aside class="news"></aside>
      </div>
    </div>
  </section>
  <section class="container keterampilan wow fadeInUp" data-wow-delay=.3s id=keterampilan>
    <div class=content>
      <div class=content-title>
        <h2 class=keterampilan-title>'.$keterampilanData['task_name'].'</h2>
      </div>
      <div class=content-body>
        '.$keterampilanData['description'].'
        <div class="cards skills">
          <div class="card ai-skill">
            <div class=card-img>
              <svg width="100" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.65 13.9648C34.0599 11.3823 38.2226 9.98949 42.5 9.99977C43.9772 9.96664 45.439 10.3067 46.7499 10.9884C48.0609 11.6701 49.1787 12.6714 50 13.8998C50.8213 12.6714 51.9391 11.6701 53.2501 10.9884C54.561 10.3067 56.0228 9.96664 57.5 9.99977C61.7774 9.98949 65.9401 11.3823 69.35 13.9648C71.975 16.0048 74 18.8298 74.715 22.2448C76.355 22.3698 77.855 23.0498 79.115 24.0748C81.025 25.6248 82.415 27.9498 83.29 30.4098C84.66 34.2348 85.03 39.1098 83.61 43.2598C83.97 43.4298 84.325 43.6298 84.67 43.8598C86.045 44.7748 87.09 46.0848 87.86 47.6298C89.375 50.6548 90 54.8748 90 59.9998C90 65.7048 87.825 69.5348 85.065 71.8998C83.5388 73.2084 81.7376 74.1568 79.795 74.6748C79.295 77.4648 77.895 80.6948 75.7 83.4348C72.85 87.0098 68.43 89.9998 62.5 89.9998C57.8 89.9998 54.06 87.3998 51.63 84.8498C51.049 84.2409 50.5048 83.5981 50 82.9248C49.4953 83.5982 48.951 84.241 48.37 84.8498C45.94 87.3998 42.205 89.9998 37.5 89.9998C31.57 89.9998 27.155 87.0098 24.3 83.4348C22.2488 80.8876 20.8439 77.8822 20.205 74.6748C18.2624 74.1568 16.4613 73.2084 14.935 71.8998C12.175 69.5348 10 65.6998 10 59.9998C10 54.8748 10.63 50.6498 12.14 47.6298C12.8556 46.1146 13.9554 44.8131 15.33 43.8548C15.6677 43.6312 16.0221 43.434 16.39 43.2648C14.97 39.1048 15.34 34.2348 16.71 30.4098C17.585 27.9498 18.975 25.6248 20.885 24.0748C22.145 23.0498 23.645 22.3748 25.285 22.2448C26.005 18.8298 28.03 16.0048 30.655 13.9648H30.65ZM47.5 22.4998V22.4498L47.49 22.1998C47.4164 20.8963 47.1571 19.61 46.72 18.3798C46.4088 17.4511 45.8789 16.6108 45.175 15.9298C44.4365 15.2867 43.4782 14.9535 42.5 14.9998C39.3347 14.9889 36.2522 16.0106 33.72 17.9098C31.4 19.7148 30 22.1598 30 24.9998C29.9997 25.3957 29.9054 25.7859 29.7248 26.1382C29.5442 26.4905 29.2825 26.7949 28.9613 27.0264C28.64 27.2578 28.2684 27.4096 27.877 27.4693C27.4856 27.529 27.0856 27.4949 26.71 27.3698C25.77 27.0598 24.93 27.2348 24.035 27.9548C23.055 28.7548 22.1 30.1748 21.415 32.0898C20.02 35.9998 20.165 40.7348 22.08 43.6148C22.3535 44.0249 22.4996 44.5068 22.5 44.9998H26.25C29.2337 44.9998 32.0952 46.185 34.205 48.2948C36.3147 50.4046 37.5 53.2661 37.5 56.2498V57.9248C39.168 58.5145 40.5739 59.6749 41.4691 61.201C42.3643 62.727 42.6912 64.5204 42.392 66.2641C42.0928 68.0078 41.1868 69.5897 39.8341 70.73C38.4815 71.8704 36.7692 72.4958 35 72.4958C33.2308 72.4958 31.5185 71.8704 30.1659 70.73C28.8132 69.5897 27.9072 68.0078 27.608 66.2641C27.3088 64.5204 27.6357 62.727 28.5309 61.201C29.4261 59.6749 30.832 58.5145 32.5 57.9248V56.2498C32.5 52.7998 29.7 49.9998 26.25 49.9998H17.5C17.2011 49.9993 16.9047 49.9451 16.625 49.8398L16.61 49.8698C15.62 51.8448 15 55.1248 15 59.9998C15 64.2948 16.575 66.7148 18.19 68.0998C19.925 69.5898 21.85 69.9998 22.5 69.9998C23.163 69.9998 23.7989 70.2632 24.2678 70.732C24.7366 71.2008 25 71.8367 25 72.4998C25 74.3398 26 77.5548 28.2 80.3148C30.345 82.9898 33.43 84.9998 37.5 84.9998C40.3 84.9998 42.81 83.4348 44.75 81.3998C45.705 80.3998 46.45 79.3648 46.935 78.5148C47.1558 78.1378 47.3448 77.7431 47.5 77.3348V37.4998H42.075C41.4853 39.1678 40.3248 40.5737 38.7988 41.4688C37.2728 42.364 35.4794 42.6909 33.7357 42.3918C31.9919 42.0926 30.4101 41.1866 29.2697 39.8339C28.1294 38.4812 27.5039 36.769 27.5039 34.9998C27.5039 33.2305 28.1294 31.5183 29.2697 30.1656C30.4101 28.8129 31.9919 27.907 33.7357 27.6078C35.4794 27.3086 37.2728 27.6355 38.7988 28.5307C40.3248 29.4259 41.4853 30.8317 42.075 32.4998H47.5V22.4998ZM52.5 72.4948V77.3298C52.6553 77.7381 52.8443 78.1328 53.065 78.5098C53.555 79.3598 54.295 80.3948 55.245 81.3948C57.19 83.4298 59.705 84.9948 62.5 84.9948C66.57 84.9948 69.655 82.9848 71.8 80.3098C74 77.5498 75 74.3348 75 72.4948C75 71.8317 75.2634 71.1958 75.7322 70.727C76.2011 70.2582 76.837 69.9948 77.5 69.9948C78.15 69.9948 80.075 69.5848 81.81 68.0948C83.425 66.7098 85 64.2898 85 59.9948C85 55.1198 84.375 51.8448 83.39 49.8648C83.0605 49.1275 82.5433 48.4896 81.89 48.0148C81.327 47.6549 80.6677 47.4752 80 47.4998C79.5478 47.4995 79.1041 47.3766 78.7162 47.1442C78.3283 46.9117 78.0107 46.5784 77.7973 46.1798C77.5839 45.7811 77.4825 45.332 77.5041 44.8803C77.5258 44.4286 77.6695 43.9912 77.92 43.6148C79.84 40.7348 79.98 35.9998 78.585 32.0898C77.9 30.1748 76.945 28.7498 75.965 27.9548C75.07 27.2348 74.23 27.0548 73.29 27.3698C72.9144 27.4949 72.5144 27.529 72.123 27.4693C71.7316 27.4096 71.36 27.2578 71.0388 27.0264C70.7175 26.7949 70.4558 26.4905 70.2752 26.1382C70.0946 25.7859 70.0003 25.3957 70 24.9998C70 22.1598 68.6 19.7148 66.275 17.9098C63.7441 16.0116 60.6636 14.99 57.5 14.9998C56.5218 14.9535 55.5635 15.2867 54.825 15.9298C54.119 16.61 53.5873 17.4504 53.275 18.3798C52.799 19.6858 52.5373 21.0602 52.5 22.4498V67.4998H56.25C59.7 67.4998 62.5 64.6998 62.5 61.2498V52.0748C60.832 51.485 59.4261 50.3246 58.5309 48.7986C57.6357 47.2725 57.3088 45.4792 57.608 43.7354C57.9072 41.9917 58.8132 40.4099 60.1658 39.2695C61.5185 38.1291 63.2308 37.5037 65 37.5037C66.7692 37.5037 68.4815 38.1291 69.8342 39.2695C71.1868 40.4099 72.0928 41.9917 72.392 43.7354C72.6912 45.4792 72.3643 47.2725 71.4691 48.7986C70.5739 50.3246 69.168 51.485 67.5 52.0748V61.2498C67.5 64.2335 66.3147 67.0949 64.205 69.2047C62.0952 71.3145 59.2337 72.4998 56.25 72.4998H52.5V72.4948ZM32.5 34.9998C32.5 35.6628 32.7634 36.2987 33.2322 36.7675C33.7011 37.2364 34.337 37.4998 35 37.4998C35.663 37.4998 36.2989 37.2364 36.7678 36.7675C37.2366 36.2987 37.5 35.6628 37.5 34.9998C37.5 34.3367 37.2366 33.7008 36.7678 33.232C36.2989 32.7632 35.663 32.4998 35 32.4998C34.337 32.4998 33.7011 32.7632 33.2322 33.232C32.7634 33.7008 32.5 34.3367 32.5 34.9998ZM65 47.4998C65.663 47.4998 66.2989 47.2364 66.7678 46.7675C67.2366 46.2987 67.5 45.6628 67.5 44.9998C67.5 44.3367 67.2366 43.7008 66.7678 43.232C66.2989 42.7632 65.663 42.4998 65 42.4998C64.337 42.4998 63.7011 42.7632 63.2322 43.232C62.7634 43.7008 62.5 44.3367 62.5 44.9998C62.5 45.6628 62.7634 46.2987 63.2322 46.7675C63.7011 47.2364 64.337 47.4998 65 47.4998ZM35 62.4998C34.337 62.4998 33.7011 62.7632 33.2322 63.232C32.7634 63.7008 32.5 64.3367 32.5 64.9998C32.5 65.6628 32.7634 66.2987 33.2322 66.7675C33.7011 67.2364 34.337 67.4998 35 67.4998C35.663 67.4998 36.2989 67.2364 36.7678 66.7675C37.2366 66.2987 37.5 65.6628 37.5 64.9998C37.5 64.3367 37.2366 63.7008 36.7678 63.232C36.2989 62.7632 35.663 62.4998 35 62.4998Z" fill="#3F79E9"/>
              </svg>              
            </div>
            <div class=card-body>
              <span class=card-text>Artificial Intelligence</span>
            </div>
          </div>
          <div class="card webdev-skill">
            <div class=card-img>
              <svg width="100" height="70" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M89.6484 25.2441C91.0156 28.0762 92.041 31.071 92.7246 34.2285C93.4082 37.3861 93.75 40.5599 93.75 43.75C93.75 48.0143 93.1641 52.1159 91.9922 56.0547C90.8203 59.9935 89.1602 63.6882 87.0117 67.1387C84.8633 70.5892 82.2266 73.6816 79.1016 76.416C75.9766 79.1504 72.526 81.4453 68.75 83.3008V87.5H37.5V93.75H50V100H18.75V93.75H31.25V87.5H0V43.75H6.25C6.25 39.7135 6.77083 35.8398 7.8125 32.1289C8.85417 28.418 10.319 24.9349 12.207 21.6797C14.0951 18.4245 16.3737 15.4785 19.043 12.8418C21.7122 10.2051 24.6582 7.92643 27.8809 6.00586C31.1035 4.08529 34.5866 2.60417 38.3301 1.5625C42.0736 0.520833 45.9635 0 50 0C54.2318 0 58.3333 0.585938 62.3047 1.75781C66.276 2.92969 69.9707 4.58984 73.3887 6.73828C76.8066 8.88672 79.8991 11.5234 82.666 14.6484C85.4329 17.7734 87.7279 21.224 89.5508 25H89.6484V25.2441ZM82.4707 25C80.0944 20.8659 77.0508 17.334 73.3398 14.4043C69.6289 11.4746 65.4948 9.29362 60.9375 7.86133C62.5 10.4004 63.7533 13.151 64.6973 16.1133C65.6413 19.0755 66.4062 22.0378 66.9922 25H82.4707ZM87.5 43.75C87.5 39.4531 86.7839 35.2865 85.3516 31.25H67.9688C68.4896 35.4167 68.75 39.5671 68.75 43.7012C68.75 47.8353 68.75 52.0182 68.75 56.25H85.3516C86.7839 52.2135 87.5 48.0469 87.5 43.75ZM62.5 43.75C62.5 41.6341 62.4349 39.5508 62.3047 37.5C62.1745 35.4492 61.9792 33.3659 61.7188 31.25H38.2812C38.0208 33.3333 37.8255 35.4004 37.6953 37.4512C37.5651 39.502 37.5 41.6016 37.5 43.75H62.5ZM50 6.49414C49.056 6.49414 48.1608 6.83594 47.3145 7.51953C46.4681 8.20312 45.6706 9.11458 44.9219 10.2539C44.1732 11.3932 43.5059 12.6628 42.9199 14.0625C42.334 15.4622 41.7969 16.8457 41.3086 18.2129C40.8203 19.5801 40.4134 20.8659 40.0879 22.0703C39.7624 23.2747 39.5182 24.2513 39.3555 25H60.6445C60.4818 24.2513 60.2376 23.2747 59.9121 22.0703C59.5866 20.8659 59.196 19.5801 58.7402 18.2129C58.2845 16.8457 57.7474 15.4622 57.1289 14.0625C56.5104 12.6628 55.8431 11.4095 55.127 10.3027C54.4108 9.19596 53.6133 8.28451 52.7344 7.56836C51.8555 6.85221 50.944 6.49414 50 6.49414ZM39.0625 7.86133C34.5052 9.26107 30.3711 11.4258 26.6602 14.3555C22.9492 17.2852 19.9056 20.8333 17.5293 25H33.0078C33.5612 22.0703 34.3099 19.1243 35.2539 16.1621C36.1979 13.1999 37.4674 10.4329 39.0625 7.86133ZM14.6484 31.25C13.2161 35.2865 12.5 39.4531 12.5 43.75H31.25C31.25 41.6341 31.3151 39.5508 31.4453 37.5C31.5755 35.4492 31.7708 33.3659 32.0312 31.25H14.6484ZM6.25 81.25H62.5V50H6.25V81.25ZM68.75 76.2207C71.6146 74.5605 74.2025 72.5749 76.5137 70.2637C78.8249 67.9525 80.8268 65.3646 82.5195 62.5H68.75V76.2207Z" fill="#3F79E9"/>
              </svg>        
            </div>
            <div class=card-body>
              <span class=card-text>Website Development</span>
            </div>
          </div>
          <div class="card gis-skill">
            <div class=card-img>
              <svg width="100" height="70" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15_487)">
                <path d="M49.947 7.0225e-06C36.6954 0.0140538 23.9913 5.2881 14.6259 14.6634C5.26056 24.0387 -7.44477e-06 36.7484 0 50C0 63.2608 5.26784 75.9785 14.6447 85.3553C24.0215 94.7322 36.7392 100 50 100C56.3379 100 62.6181 98.7955 68.506 96.45C66.8321 93.581 65.1668 90.7069 63.51 87.828C60.8 91.288 57.78 93.658 54.627 94.766C53.923 94.837 53.213 94.889 52.5 94.928V74.13H55.496C54.5782 72.5485 53.8348 70.872 53.279 69.13H52.5V66.02C51.8667 62.667 51.8667 59.225 52.5 55.872V52.5H53.371C53.7709 51.2764 54.2634 50.085 54.844 48.936C55.084 48.447 55.346 47.971 55.617 47.5H52.5V30.87H71.695C72.025 32.139 72.325 33.443 72.592 34.777C74.2145 34.3735 75.8729 34.131 77.543 34.053C77.3363 32.9869 77.1069 31.9253 76.855 30.869H90.745C91.852 33.2354 92.7498 35.6941 93.428 38.217C95.7344 39.6934 97.8095 41.503 99.586 43.587C98.0277 31.5374 92.1351 20.4676 83.0096 12.4461C73.884 4.42453 62.1499 0.000257034 50 7.0225e-06C49.9823 -2.34083e-06 49.9647 -2.34083e-06 49.947 7.0225e-06V7.0225e-06ZM52.5 5.68201C57.768 6.57801 62.802 10.918 66.768 18.119C68.046 20.44 69.188 23.046 70.176 25.869H52.5V5.68201ZM47.5 5.87901V25.869H30.75C31.738 23.046 32.88 20.44 34.158 18.119C37.89 11.341 42.571 7.10201 47.5 5.88001V5.87901ZM35.98 7.23201C33.656 9.58401 31.57 12.452 29.777 15.707C28.097 18.757 26.652 22.174 25.465 25.869H12.01C17.545 17.163 25.985 10.499 35.98 7.23201V7.23201ZM65.39 7.69501C74.788 11.108 82.71 17.563 87.99 25.869H75.455C74.271 22.174 72.828 18.757 71.148 15.707C69.472 12.662 67.535 9.95801 65.391 7.69501H65.39ZM9.257 30.87H24.065C22.82 36.032 22.057 41.63 21.862 47.501H5.072C5.38261 41.7399 6.80331 36.0931 9.256 30.871L9.257 30.87ZM29.231 30.87H47.5V47.5H26.867C27.079 41.565 27.91 35.946 29.23 30.87H29.231ZM5.072 52.5H21.834C21.963 58.356 22.654 63.954 23.828 69.13H9.256C6.80331 63.9079 5.38261 58.2611 5.072 52.5V52.5ZM26.834 52.5H47.5V69.13H28.98C27.735 64.03 26.974 58.415 26.834 52.5ZM12.01 74.13H25.146C26.388 78.215 27.946 81.97 29.777 85.295C31.215 87.905 32.845 90.264 34.631 92.313C25.224 88.903 17.295 82.443 12.01 74.131V74.13ZM30.404 74.13H47.5V94.928C47.192 94.911 46.888 94.88 46.582 94.858C41.992 93.358 37.658 89.238 34.158 82.883C32.73 80.289 31.466 77.346 30.404 74.131V74.13Z" fill="#3F79E9"/>
                <path d="M79 40C67.458 40 58 49.43 58 60.94C58 65.4 59.424 69.545 61.835 72.952L76.438 98.196C78.483 100.868 79.843 100.361 81.544 98.056L97.65 70.646C97.975 70.056 98.23 69.43 98.453 68.79C99.4751 66.2991 100.001 63.6325 100 60.94C100 49.43 90.544 40 79 40ZM79 49.812C85.216 49.812 90.16 54.743 90.16 60.941C90.16 67.139 85.216 72.068 79 72.068C72.785 72.068 67.84 67.138 67.84 60.941C67.84 54.743 72.785 49.812 79 49.812Z" fill="#3F79E9"/>
                </g>
                <defs>
                <clipPath id="clip0_15_487">
                <rect width="100" height="100" fill="white"/>
                </clipPath>
                </defs>
              </svg>  
            </div>
            <div class=card-body>
              <span class=card-text>Geographic Information System</span>
            </div>
          </div>
          <div class="card troubleshooting-skill">
            <div class=card-img>
              <svg width="100" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15_450)">
                <path d="M99 89.1726L76.2066 66.4632C81.544 59.6994 84.4375 51.3407 84.42 42.7368C84.42 21.3347 67.0211 4 45.5399 4C25.711 4 9.38141 18.7684 7 37.8947H16.8172C19.15 24.1916 31.1057 13.6842 45.5399 13.6842C61.6265 13.6842 74.6999 26.7095 74.6999 42.7368C74.6999 58.7642 61.6265 71.7895 45.5399 71.7895C33.7787 71.7895 23.6698 64.8168 19.0528 54.8421H8.6038C13.7068 70.2884 28.3354 81.4737 45.5399 81.4737C54.5309 81.4737 62.7929 78.4232 69.3539 73.2905L92.1474 96L99 89.1726Z" fill="#3F79E9"/>
                <path d="M32.869 36.1137L38.7586 62H46.6759L52.7586 43.5725L57.3448 54.6875H67V47.375H62.1724L56.1379 32.75H48.7034L43.2966 49.1787L37.3103 23H29.3448L23.3103 42.5H-3V49.8125H28.6207L32.869 36.1137Z" fill="#3F79E9"/>
                </g>
                <defs>
                <clipPath id="clip0_15_450">
                <rect width="100" height="100" fill="white"/>
                </clipPath>
                </defs>
              </svg>
            </div>
            <div class=card-body>
              <span class=card-text>Computer Troubleshooting</span>
            </div>
          </div>
          <div class="card mobiledev-skill">
            <div class=card-img>
              <svg width="100" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M79.1667 4.1665H37.5C32.9167 4.1665 29.1667 7.9165 29.1667 12.4998V24.9998H37.5V16.6665H79.1667V83.3332H37.5V74.9998H29.1667V87.4998C29.1667 92.0832 32.9167 95.8332 37.5 95.8332H79.1667C83.75 95.8332 87.5 92.0832 87.5 87.4998V12.4998C87.5 7.9165 83.75 4.1665 79.1667 4.1665Z" fill="#3F79E9"/>
                <path d="M18.4216 63.5391L2.62469 50.2266L18.4216 36.9375L22.0778 40.6406L10.4528 50.1797L22.0778 59.8359L18.4216 63.5391ZM29.5469 68.0391H23.9922L40.3516 29.8828H45.9297L29.5469 68.0391ZM52.5784 36.9375L68.3753 50.2266L52.5784 63.5391L48.9456 59.8359L60.5472 50.2734L48.9456 40.6406L52.5784 36.9375Z" fill="#3F79E9"/>
              </svg>                
            </div>
            <div class=card-body>
              <span class=card-text>Mobile Apps Development</span>
            </div>
          </div>
          <div class="card networking-skill">
            <div class=card-img>
              <svg width="100" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M58.0078 38.7695C59.4727 37.3698 60.5957 35.7585 61.377 33.9355C62.1582 32.1126 62.5651 30.1758 62.5977 28.125C62.5977 26.0742 62.207 24.1374 61.4258 22.3145C60.6445 20.4915 59.5052 18.8802 58.0078 17.4805L62.3535 12.9883C64.4368 15.0065 66.0319 17.3014 67.1387 19.873C68.2454 22.4447 68.8151 25.1953 68.8477 28.125C68.8477 31.0221 68.2943 33.7565 67.1875 36.3281C66.0807 38.8997 64.4694 41.2109 62.3535 43.2617L58.0078 38.7695ZM71.0449 4.00391C72.6725 5.56641 74.1211 7.27539 75.3906 9.13086C76.6602 10.9863 77.7507 12.9395 78.6621 14.9902C79.5736 17.041 80.2409 19.1732 80.6641 21.3867C81.0872 23.6003 81.3151 25.8464 81.3477 28.125C81.3477 30.4036 81.1198 32.6497 80.6641 34.8633C80.2083 37.0768 79.541 39.209 78.6621 41.2598C77.7832 43.3105 76.709 45.2637 75.4395 47.1191C74.1699 48.9746 72.7051 50.6836 71.0449 52.2461L66.6992 47.7539C69.401 45.1497 71.4681 42.1712 72.9004 38.8184C74.3327 35.4655 75.0651 31.901 75.0977 28.125C75.0977 24.3815 74.3815 20.8333 72.9492 17.4805C71.5169 14.1276 69.4336 11.1328 66.6992 8.49609L71.0449 4.00391ZM31.3965 43.2617C29.3132 41.2435 27.7181 38.9486 26.6113 36.377C25.5046 33.8053 24.9349 31.0547 24.9023 28.125C24.9023 25.2279 25.4557 22.4935 26.5625 19.9219C27.6693 17.3503 29.2806 15.0391 31.3965 12.9883L35.7422 17.4805C34.2773 18.8802 33.1543 20.4915 32.373 22.3145C31.5918 24.1374 31.1849 26.0742 31.1523 28.125C31.1523 30.1758 31.543 32.1126 32.3242 33.9355C33.1055 35.7585 34.2448 37.3698 35.7422 38.7695L31.3965 43.2617ZM22.7051 52.2461C21.0775 50.6836 19.6289 48.9746 18.3594 47.1191C17.0898 45.2637 15.9993 43.3105 15.0879 41.2598C14.1764 39.209 13.5091 37.0768 13.0859 34.8633C12.6628 32.6497 12.4349 30.4036 12.4023 28.125C12.4023 25.8464 12.6302 23.6003 13.0859 21.3867C13.5417 19.1732 14.209 17.041 15.0879 14.9902C15.9668 12.9395 17.041 10.9863 18.3105 9.13086C19.5801 7.27539 21.0449 5.56641 22.7051 4.00391L27.0508 8.49609C24.349 11.1003 22.2819 14.0788 20.8496 17.4316C19.4173 20.7845 18.6849 24.349 18.6523 28.125C18.6523 31.8685 19.3685 35.4167 20.8008 38.7695C22.2331 42.1224 24.3164 45.1172 27.0508 47.7539L22.7051 52.2461ZM56.25 28.125C56.25 29.5898 55.9408 30.957 55.3223 32.2266C54.7038 33.4961 53.8086 34.5866 52.6367 35.498L72.0215 93.75H65.4785L61.2793 81.25H32.4707L28.2715 93.75H21.7285L41.1133 35.498C39.974 34.6191 39.0951 33.5449 38.4766 32.2754C37.8581 31.0059 37.5326 29.6224 37.5 28.125C37.5 26.8229 37.7441 25.6022 38.2324 24.4629C38.7207 23.3236 39.388 22.3307 40.2344 21.4844C41.0807 20.638 42.0736 19.9707 43.2129 19.4824C44.3522 18.9941 45.5729 18.75 46.875 18.75C48.1771 18.75 49.3978 18.9941 50.5371 19.4824C51.6764 19.9707 52.6693 20.638 53.5156 21.4844C54.362 22.3307 55.0293 23.3236 55.5176 24.4629C56.0059 25.6022 56.25 26.8229 56.25 28.125ZM46.875 25C46.0286 25 45.2962 25.3092 44.6777 25.9277C44.0592 26.5462 43.75 27.2786 43.75 28.125C43.75 28.9714 44.0592 29.7038 44.6777 30.3223C45.2962 30.9408 46.0286 31.25 46.875 31.25C47.7214 31.25 48.4538 30.9408 49.0723 30.3223C49.6908 29.7038 50 28.9714 50 28.125C50 27.2786 49.6908 26.5462 49.0723 25.9277C48.4538 25.3092 47.7214 25 46.875 25ZM46.875 37.9883L40.7715 56.25H52.9785L46.875 37.9883ZM59.2285 75L55.0293 62.5H38.7207L34.5215 75H59.2285Z" fill="#3F79E9"/>
              </svg>                               
            </div>
            <div class=card-body>
              <span class=card-text>Network Engineering</span>
            </div>
          </div>
          <div class="card multimedia-skill">
            <div class=card-img>
              <svg width="100" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M93.75 59.375H81.25V46.875H75V75H25V25H53.125V18.75H40.625V6.25H34.375V18.75H25C23.3429 18.7517 21.7542 19.4107 20.5824 20.5824C19.4107 21.7542 18.7517 23.3429 18.75 25V34.375H6.25V40.625H18.75V59.375H6.25V65.625H18.75V75C18.7517 76.6571 19.4107 78.2458 20.5824 79.4176C21.7542 80.5893 23.3429 81.2483 25 81.25H34.375V93.75H40.625V81.25H59.375V93.75H65.625V81.25H75C76.6568 81.2475 78.2451 80.5882 79.4167 79.4167C80.5882 78.2451 81.2475 76.6568 81.25 75V65.625H93.75V59.375Z" fill="#3F79E9"/>
                <path d="M65.625 65.625H34.375V34.375H65.625V65.625ZM40.625 59.375H59.375V40.625H40.625V59.375ZM96.875 40.625H90.625C90.6151 32.34 87.3195 24.3972 81.4611 18.5389C75.6028 12.6805 67.66 9.38492 59.375 9.375V3.125C69.3173 3.13575 78.8493 7.09009 85.8796 14.1204C92.9099 21.1507 96.8642 30.6827 96.875 40.625V40.625Z" fill="#3F79E9"/>
                <path d="M81.25 40.625H75C74.995 36.4825 73.3472 32.5111 70.4181 29.5819C67.4889 26.6528 63.5175 25.005 59.375 25V18.75C65.1746 18.7566 70.7347 21.0634 74.8357 25.1643C78.9366 29.2653 81.2434 34.8254 81.25 40.625Z" fill="#3F79E9"/>
              </svg>                                          
            </div>
            <div class=card-body>
              <span class=card-text>Multimedia</span>
            </div>
          </div>
          <div class="card gamedev-skill">
            <div class=card-img>
            <svg width="80" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_127_3)">
                <path d="M72.5797 7.37803C70.0797 6.20459 67.7158 5.0999 65.5643 4.02021C60.0502 1.25771 55.0502 -0.0844727 50.2846 -0.0844727C40.6861 -0.0844727 34.0439 5.45303 29.8783 9.61865L9.67832 29.8405C-1.13105 40.6608 -2.85762 51.6765 4.08604 65.564C5.1627 67.7202 6.27051 70.089 7.44238 72.5984C13.7611 86.1125 20.2924 100.087 30.983 100.087C31.283 100.087 31.5799 100.078 31.883 100.055C42.9158 99.1905 46.0454 84.9874 48.808 72.4577C49.2471 70.4733 49.6626 68.5701 50.0893 66.864C50.8314 63.9139 52.2924 62.0812 56.2954 58.0687L56.8454 57.5155L57.1845 57.1765L58.0751 56.289C62.0876 52.2765 63.9204 50.8171 66.8735 50.0718C68.5641 49.6469 70.4626 49.228 72.4423 48.7937C84.9642 46.0297 99.161 42.8983 100.02 31.8483C100.888 20.6342 86.4984 13.8952 72.5797 7.37803V7.37803ZM93.6002 31.2826C92.9924 39.0732 75.5521 41.3729 65.1723 43.976C60.5816 45.1354 57.7879 47.565 53.5723 51.7822C53.2785 52.0759 52.9832 52.3696 52.6848 52.668C52.3895 52.9634 52.0957 53.2634 51.8003 53.5557C47.5847 57.7759 45.1597 60.5681 44.005 65.165C41.4003 75.5541 39.1035 93.0135 31.3224 93.626C31.1819 93.6361 31.0411 93.6408 30.9003 93.64C22.644 93.64 15.6972 74.8666 9.56758 62.6182C3.34258 50.1666 6.00967 42.0885 13.9973 34.0932C15.5301 32.5573 17.4362 30.6511 19.7722 28.3137C22.1581 25.9246 24.9955 23.084 28.358 19.7199C30.6924 17.3824 32.5971 15.4793 34.1314 13.9402C39.0924 8.97461 44.0861 6.06523 50.1393 6.06523C53.8315 6.06523 57.9158 7.14492 62.6268 9.50742C75.0736 15.7481 94.2564 22.8355 93.6002 31.2826V31.2826ZM46.7566 34.3041H53.0066V28.0541H46.7566V34.3041ZM46.7566 24.9291H53.0066V18.6791H46.7566V24.9291ZM56.1316 24.9291H62.3816V18.6791H56.1316V24.9291ZM56.1316 34.3041H62.3816V28.0541H56.1316V34.3041ZM32.2161 53.0698L34.5927 50.6933C35.7646 49.5214 35.7646 47.6198 34.5927 46.4495C33.4208 45.2776 31.5224 45.2776 30.3505 46.4495L27.9724 48.8276L25.5942 46.4495C24.4224 45.2776 22.5239 45.2776 21.3521 46.4495C20.1802 47.6214 20.1802 49.5214 21.3521 50.6933L23.7301 53.0714L21.3521 55.4494C20.1802 56.6198 20.1802 58.5197 21.3521 59.6916C22.5239 60.8635 24.4239 60.8635 25.5942 59.6916L27.9724 57.3151L30.4192 59.7619C31.5911 60.9338 33.4896 60.9338 34.6614 59.7619C35.8333 58.59 35.8333 56.6886 34.6614 55.5167L32.2161 53.0698Z" fill="#3F79E9"/>
              </g>
              <defs>
                <clipPath id="clip0_127_3">
                  <rect width="100" height="100" fill="white"/>
                </clipPath>
              </defs>
            </svg>                               
            </div>
            <div class=card-body>
              <span class=card-text>Game Development</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

';