<!DOCTYPE HTML>
<head>
<title>OCARS | Fullscreen Gallery</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/menu/css/simple_menu.css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen">
<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen">
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
<!--JS FILES STARTS-->
<script src="js/jquery.min.js"></script>
<script src="js/easing/jquery.easing.1.3.js"></script>
<script src="js/supersized.3.2.6.min.js"></script>
<script src="theme/supersized.shutter.min.js"></script>
<script>
/***************************************************
		SUPER SIZED
***************************************************/
jQuery.noConflict()(function ($) {
    $.supersized({
        // Functionality
        slide_interval: 3000, // Length between transitions
        transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed: 700, // Speed of transition
        // Components							
        slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
        slides:
        // Slideshow Images
        [{
            image: 'slideshow/full1.jpg',
            title: 'Copyright: Dieter Schneider',
            thumb: 'slideshow/slide_1.jpg',
            url: '#'
        }, {
            image: 'slideshow/full2.jpg',
            title: 'Copyright: Dieter Schneider',
            thumb: 'slideshow/slide_2.jpg',
            url: '#'
        }, {
            image: 'slideshow/full3.jpg',
            title: 'Copyright: Dieter Schneider',
            thumb: 'slideshow/slide_3.jpg',
            url: '#'
        }]
    });
});
</script>
</head>
<body>
 <?php
   include "Header2.php"
   ?>
<!-- end header -->
<!--Thumbnail Navigation-->
<div id="prevthumb"></div>
<div id="nextthumb"></div>
<!--Arrow Navigation-->
<a id="prevslide" class="load-item"></a> <a id="nextslide" class="load-item"></a>
<div id="thumb-tray" class="load-item">
  <div id="thumb-back"></div>
  <div id="thumb-forward"></div>
</div>
<!--Time Bar-->
<div id="progress-back" class="load-item">
  <div id="progress-bar"></div>
</div>
<!--Control Bar-->
<div id="controls-wrapper" class="load-item">
  <div id="controls"> <a id="play-button"><img src="img/pause.png" alt="" id="pauseplay"></a>
    <!--Slide counter-->
    <div id="slidecounter"> <span class="slidenumber"></span> / <span class="totalslides"></span> </div>
    <!--Slide captions displayed here-->
    <div id="slidecaption"></div>
    <!--Thumb Tray button-->
    <a id="tray-button"><img src="img/button-tray-up.png" alt="" id="tray-arrow"></a>
    <!--Navigation-->
    <ul id="slide-list">
    </ul>
  </div>
</div>
</body>
</html>