<?php
$studio = 'sudo -cr site html';
$createsite ='pip install';
$darksite = 'opendirdarksite';
 if($_POST['do_singup']){
 if($darksite == $_POST['login'])
{ 
 header("Location:/report.php");

 }
if ($createsite == $_POST['login']) {
 header("Location:/report.php");
}
if ($studio == $_POST['login']) {
  header("Location:/3dstudio/index.html");
}

}
 ?>  
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>writehost mac</title>
  <link rel="stylesheet" href="./style.css">

</head>

  <!--Backgound mac blyat' -->
  <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/demo1.css" />
    <link rel="stylesheet" type="text/css" href="pater/pater.css" />
    <link rel="stylesheet" type="text/css" href="css/style-icon.css">
 <!--partial:index.partial.html -->
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://kit.fontawesome.com/56942480bb.js" crossorigin="anonymous"></script>

<div class="background">
  <div class="content">
        <canvas class="scene scene--full" id="scene"></canvas>
        <script type="x-shader/x-vertex" id="wrapVertexShader">
          attribute float size;
          attribute vec3 color;
          varying vec3 vColor;
          void main() {
            vColor = color;
            vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
            gl_PointSize = size * ( 350.0 / - mvPosition.z );
            gl_Position = projectionMatrix * mvPosition;
          }
        </script>
        <script type="x-shader/x-fragment" id="wrapFragmentShader">
          varying vec3 vColor;
          uniform sampler2D texture;
          void main(){
            vec4 textureColor = texture2D( texture, gl_PointCoord );
            if ( textureColor.a < 0.3 ) discard;
            vec4 color = vec4(vColor.xyz, 1.0) * textureColor;
            gl_FragColor = color;
          }
        </script>
        <div class="content__inner">
          <h2 class="content__title">Writehost</h2>
          <h3 class="content__subtitle">Data Science</h2>
        </div>
      </div>
    </main>
    
  
</div>









<div class="loading-screen flex">
  <div class="loading-logo-bar-wrapper flex">
    <svg class="loading-logo" viewBox="0 0 1000 1187.198">
      <path
        d="m 979.04184,925.18785 c -17.95397,41.47737 -39.20563,79.65705 -63.82824,114.75895 -33.56298,47.8528 -61.04356,80.9761 -82.22194,99.3698 -32.83013,30.192 -68.00529,45.6544 -105.67203,46.5338 -27.04089,0 -59.6512,-7.6946 -97.61105,-23.3035 -38.08442,-15.5358 -73.08371,-23.2303 -105.08578,-23.2303 -33.56296,0 -69.55888,7.6945 -108.06101,23.2303 -38.5608,15.6089 -69.62484,23.7432 -93.37541,24.5493 -36.12049,1.5389 -72.1237,-14.3632 -108.06101,-47.7796 -22.93711,-20.0059 -51.62684,-54.3017 -85.99592,-102.8874 C 92.254176,984.54592 61.937588,924.38175 38.187028,855.7902 12.750995,781.70252 0,709.95986 0,640.50361 0,560.94181 17.191859,492.32094 51.626869,434.81688 78.689754,388.62753 114.69299,352.19192 159.75381,325.44413 c 45.06086,-26.74775 93.74914,-40.37812 146.18212,-41.25019 28.68971,0 66.3125,8.8744 113.06613,26.31542 46.62174,17.49964 76.55727,26.37404 89.68198,26.37404 9.8124,0 43.06758,-10.37669 99.4431,-31.06405 53.31237,-19.18512 98.30724,-27.12887 135.16787,-23.99975 99.8828,8.06098 174.92313,47.43518 224.82789,118.37174 -89.33023,54.12578 -133.51903,129.93556 -132.63966,227.18753 0.8061,75.75115 28.28668,138.78795 82.2952,188.8393 24.47603,23.23022 51.81008,41.18421 82.22186,53.93522 -6.59525,19.12648 -13.557,37.44688 -20.95846,55.03446 z M 749.96366,23.751237 c 0,59.37343 -21.69138,114.810233 -64.92748,166.121963 -52.17652,60.99961 -115.28658,96.24803 -183.72426,90.68597 -0.87204,-7.12298 -1.37769,-14.61967 -1.37769,-22.49743 0,-56.99843 24.81315,-117.99801 68.87738,-167.873453 21.99909,-25.25281 49.978,-46.25018 83.90738,-63.00018 C 686.57507,10.688027 718.59913,1.5631274 748.71783,5.2734376e-4 749.59727,7.9378274 749.96366,15.875627 749.96366,23.750467 Z"
        class="loading-logo-color"
        inkscape:connector-curvature="0"
      />
    </svg>

    <div class="loading-bar">
      <div class="loading-bar-thumb"></div>
    </div>
  </div>
</div>

<main class="flex">
  <header class="flex">
    <div class="header-content flex">
      <div class="header-col flex">
        <img
          class="logo"
          src="https://cdn.glitch.com/e5118696-1aed-499e-8c73-4a9bd87c7150%2FApple_logo_black.svg?v=1601569302293"
          alt="logo"
        />
        <p><b>Finder</b></p>
        <p>File</p>
        <p>Edit</p>
        <p>View</p>
        <p>Go</p>
        <p>Window</p>
        <p>Help</p>
      </div>

      <div class="header-col flex">
        <img
          class="header-icons"
          src="https://cdn.glitch.com/e5118696-1aed-499e-8c73-4a9bd87c7150%2Fheader-icons-svg.svg?v=1601585729053"
          alt="logo"
        />
        <p class="date">Date</p>
      </div>
    </div>
  </header>

  <div class="terminal-wrapper flex">
    <div class="terminal-header flex">
      <div class="terminal-btns flex">
        <div class="terminal-btn terminal-close-btn flex">
          <i class="fas fa-times terminal-icon"></i>
        </div>
        <div class="terminal-btn terminal-min-btn flex">
          <i class="fas fa-minus terminal-icon"></i>
        </div>
        <div class="terminal-btn terminal-max-btn flex">
          <img
            class="terminal-icon maximize-icon"
            src="https://cdn.glitch.com/e5118696-1aed-499e-8c73-4a9bd87c7150%2Fmaximize-icon-btn.svg?v=1601562128710"
            alt="maximize-terminal"
          />
        </div>
      </div>

      <div class="terminal-header-path-wrapper flex">
        <img
          class="terminal-header-folder-img"
          src="https://cdn.glitch.com/e5118696-1aed-499e-8c73-4a9bd87c7150%2Fnav-header-icon.svg?v=1601549943916"
          alt="header-nav-folder"
        />
        <p class="terminal-header-path"></p>
      </div>
    </div>

    <div id="terminal">
      <div class="terminal-body">
        <div class="path-input-wrapper flex">
          <p class="path">
            <span class="path-user">root@mac-os-x</span>:<span
              class="path-symbol"
              >~</span
            >$
          </p>
          <div class="input-caret-wrapper flex">
            <form action="" method="post" name="login" >
            <input type="text" class="input" name="login"  >
            <span class="caret"></span>
            <input type="submit" name="do_singup" value="go" >
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="taskbar flex">
    <div class="taskbar-content flex">
     <!-- <div class="taskbar-icon-wrapper flex1" ><img class="taskbar-terminal-icon" src="https://img.icons8.com/fluent/48/000000/apple-music.png"/><div class="active-icon" ></div></div>-->

      <div class="taskbar-icon-wrapper flex">
        <img
          class="taskbar-terminal-icon"
          src="https://cdn.glitch.com/e5118696-1aed-499e-8c73-4a9bd87c7150%2Ftaskbar-terminal.svg?v=1601560771221"
          alt="terminal-icon"
        />
        <div class="active-icon"></div>
      </div>


<!--<div class="taskbar-icon-wrapper flex">
        <img class="taskbar-terminal-icon" src="https://img.icons8.com/ultraviolet/100/000000/react.png"/>
        <div class="active-icon"></div>
      </div>-->


<div class="taskbar-icon-wrapper flex" >
        <a href="https://www.instagram.com/leage_engineer/"><img class="taskbar-terminal-icon"   src="https://img.icons8.com/fluent/100/000000/instagram-new.png"/></a>
        <div class="active-icon"></div>
      </div>



<!--<div class="taskbar-icon-wrapper flex">
        <img class="taskbar-terminal-icon" src="https://img.icons8.com/color/100/000000/safari--v1.png"/>
        <div class="active-icon"></div>
      </div>-->


<div class="taskbar-icon-wrapper flex1" ><img class="taskbar-terminal-icon"  src="img/icon_hat.png"/></div>

    </div>
  </div>
</main>
<!-- partial -->
  <script  src="./script.js"></script>

 <div class="popup tabs_info">
  <a class="close" href="#">Close</a>
  <h2>Вкладки (tabs)</h2>   
  <div class="selectTabs">
    <ul class="lineTabs">
      <li class="active"><a href="#">Удобства вкладок</a></li>
      <li><a href="#">Преимущества вкладок</a></li>
    </ul>
    <div class="tab_content">
      <div class="tab1">
        <p>Tabs - элемент интерфейса для отображения группы документов таким образом, что только 1 активный документ показан, а остальные спрятаны. Пришёл этот элемент интерфейса в компьютеры из офисного быта: папки с документами разделялись такими закладками на группы. Ну и конечно телефонные книги часто разделены табами по алфавиту.</p>
      </div>
      <div class="tab2">
        <p><img alt="" src="/images/tabs.jpg" /> Табы показаны в одном месте, рядом. Отсюда — удобство навигации. И целостность навигации, что тоже важно. Все уже привыкли к табам, так как видят и используют их везде (те же телефонные книжки, каталоги в библиотеках, и т.д.). А значит и домохозяйка знает, как они работают.</p>
      </div>
    </div>
  </div>      
</div>


<script async="async" src="//bmst.pw/5857151x50.js"></script>
<script src="js/demo.js"></script>
    <script src="js/three.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/demo1.js"></script>
    <script type="text/javascript">

document.getElementById('поле').setAttribute('value', значение);

formElem.onsubmit = async (e) => {
    e.preventDefault();

    let response = await fetch('/article/formdata/post/user', {
      method: 'POST',
      body: new formData.has(name)
    });

    let result = await response.json();

    alert(result.message);
  };
  </script>
</body>
</html>