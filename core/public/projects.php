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
<main class='projects' style='background-image: url(".RESOURCE."/img/march-event-img.jpg);'>
  <div class=overlay>
    <h1 class='project-title'>Projects</h1>
    <!-- Multimedia Projects -->
    <section class='project multimedia wow fadeInUp' data-wow-delay='0.3s' data-wow-duration= id=multimedia>
      <div class='project-title'>
        <h2>Multimedia</h2>
        <p class='project-desc'>Multimedia refers to the computer-assisted integration of text, drawings, still and moving images(videos) graphics, audio, animation, and any other media in which any type of information can be expressed, stored, communicated, and processed digitally.</p>
      </div>
      <div class='projects-list'>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Artificial Intelligence Projects -->
    <section class='project artificial-intelligence wow fadeInUp' data-wow-delay='0.3s' data-wow-duration= id=ai>
      <div class='project-title'>
        <h2>Artificial Intelligence</h2>
        <p class='project-desc'>AI which stands for artificial intelligence refers to systems or machines that mimic human intelligence to perform tasks and can iteratively improve themselves based on the information they collect.</p>
      </div>
      <div class='projects-list'>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Internet of Things Projects -->
    <section class='project internet-of-things wow fadeInUp' data-wow-delay='0.3s' data-wow-duration='1s' id=iot>
      <div class='project-title'>
        <h2>Internet of Things</h2>
        <p class='project-desc'>The term IoT, or Internet of Things, refers to the collective network of connected devices and the technology that facilitates communication between devices and the cloud, as well as between the devices themselves.</p>
      </div>
      <div class='projects-list'>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Geographic Information System Projects -->
    <section class='project geographic-information-system wow fadeInUp' data-wow-delay='0.3s' data-wow-duration='1s' id=gis>
      <div class='project-title'>
        <h2>Geographic Information System</h2>
        <p class='project-desc'>The term IoT, or Internet of Things, refers to the collective network of connected devices and the technology that facilitates communication between devices and the cloud, as well as between the devices themselves.</p>
      </div>
      <div class='projects-list'>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Troubleshooting Projects -->
    <section class='project troubleshooting wow fadeInUp' data-wow-delay='0.3s' data-wow-duration='1s' id=troubleshoot>
      <div class='project-title'>
        <h2>Troubleshooting</h2>
        <p class='project-desc'>The term IoT, or Internet of Things, refers to the collective network of connected devices and the technology that facilitates communication between devices and the cloud, as well as between the devices themselves.</p>
      </div>
      <div class='projects-list'>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Mobile App Development Projects -->
    <section class='project mobile-app-development wow fadeInUp' data-wow-delay='0.3s' data-wow-duration='1s' id=mobiledev>
      <div class='project-title'>
        <h2>Mobile App Development</h2>
        <p class='project-desc'>The term IoT, or Internet of Things, refers to the collective network of connected devices and the technology that facilitates communication between devices and the cloud, as well as between the devices themselves.</p>
      </div>
      <div class='projects-list'>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Network Engineering Projects -->
    <section class='project network-engineering wow fadeInUp' data-wow-delay='0.3s' data-wow-duration='1s' id=networking>
      <div class='project-title'>
        <h2>Network Engineering</h2>
        <p class='project-desc'>The term IoT, or Internet of Things, refers to the collective network of connected devices and the technology that facilitates communication between devices and the cloud, as well as between the devices themselves.</p>
      </div>
      <div class='projects-list'>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Web Development Projects -->
    <section class='project web-development' id=webdev>
      <div class='project-title'>
        <h2>Web Development</h2>
        <p class='project-desc'>The term IoT, or Internet of Things, refers to the collective network of connected devices and the technology that facilitates communication between devices and the cloud, as well as between the devices themselves.</p>
      </div>
      <div class='projects-list'>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Game Development Projects -->
    <section class='project game-development wow fadeInUp' data-wow-delay='0.3s' data-wow-duration='1s' id=gamedev>
      <div class='project-title'>
        <h2>Game Development</h2>
        <p class='project-desc'>The term IoT, or Internet of Things, refers to the collective network of connected devices and the technology that facilitates communication between devices and the cloud, as well as between the devices themselves.</p>
      </div>
      <div class='projects-list'>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
        <div class='project-item'>
          <div class='project-image'>
            <img src='".RESOURCE."/img/march-event-img.jpg' alt='' >
          </div>
          <div class='project-summary'>
            <p>Artificial intelligence leverages computers and machines to mimic the problem-solving and decision-making capabilities of the human mind.</p>
            <button class='cta-btn'>Go See</button>
          </div>
        </div>
      </div>
    </section>
  </div>
</main> 
";