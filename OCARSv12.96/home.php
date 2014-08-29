<?php
header("Cache-Control: no-cache, must revalidate");
header("Expires: Saturday, 26 Jul 2013 00:00:00 GMT");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>OCARS PORTAL</title>
<meta charset="utf-8">
<style type="text/css">
<!--
.button-container form,
button-container form div{
display: inline;
}
-->
</style>

<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/menu/css/simple_menu.css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/boxes/css/style5.css">

<!--JS FILES STARTS-->

<script src="js/jquery.min.js"></script>
<script src="js/jquery.eislideshow.js"></script>
<script src="js/custom.js"></script>
<script>
jQuery.noConflict()(function ($) {
    $('#ei-slider').eislideshow({
        animation: 'center',
        autoplay: true,
        slideshow_interval: 3000,
        titlesFactor: 0
    });
});
</script>
<script src="js/slides/slides.min.jquery.js"></script>
<script src="js/cycle-slider/cycle.js"></script>
<script src="js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="js/tabify/jquery.tabify.js"></script>
<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/scrolltop/scrolltopcontrol.js"></script>
<script src="js/portfolio/filterable.js"></script>
<script src="js/modernizr/modernizr-2.0.3.js"></script>
<script src="js/easing/jquery.easing.1.3.js"></script>
<script src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="js/swfobject/swfobject.js"></script>

<!-- get fancybox -->
<link rel="stylesheet" type="text/css" itemprop="javascript" href="js/fancybox/jquery.fancybox.css" media="all">
<script src="js/fancybox/jquery.easing.1.3.js"></script>
<script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>

</head>
<body oncontextmenu="return false;">

<div class="header">
  <div id="site_title"><a href="home.php"><img src="img/Logo.jpg" width="50" height="40" alt=""></a></div>
  <!-- Dynamic Menu -->
  <ol id="menu" class="simple_menu simple_menu_css horizontal black_menu">
    <li><a href="home.php">Home</a></li>
    <li><a href="#">Information</a>
      <!-- sub menu -->
      <ol>
        <li><a href="Tips.php">Saftey Tips</a></li>
        <li><a href="Missing.php">Missing Persons</a></li>
        <li><a href="Wanted.php">Most Wanted</a></li>
        <li><a href="TipOffs.php">Send Tip Offs</a></li>
      </ol></li>
      <!-- end sub menu -->
     <li><a href="#">Gallery</a>
	 <ol>
		 <li><a href="fullscreen.php">Fullscreen Gallery</a></li>
        		</ol></li>
		<!-- end sub menu -->
	<li><a href="News.php">News</a></li>
 <li class="last"><a href="Contact.php">Contact Us</a></li>
  </ol>
  <div class="clr"></div>
  <!-- menu 2 -->
  <ol id="menu2" class="simple_menu simple_menu_css horizontal black_menu" >
    <li><a href="Register.php">Register</a></li>
        <li class="last"><a href="viewCrime.php" target="_blank">View Crime in your Area</a></li>
  </ol>
  
  <div class="clr"></div>
   
</div>
<!-- end header -->
<div id="login">
      
            <h2>Login</h2>
            <div class="button-container">
            <form action="login.php" method="post">
                <label><span class="style1">Username</span></label>
                <input type="text" value="" name="username" size="10" class="input_field" title="username" />
                <label><span class="style1">Password</span></label>
                <input type="password" value="" name="password" class="input_field" title="password" />
                <label><span class="style1">Pick Type</span></label>
                
                <label>
                <select name="cmbUser" id="cmbUser">
				 <option value="">Pick Type</option>
                  <option>User</option>
                  <option>Police</option>
                  <option>Admin</option>
                </select>
				
                </label>
                <input type="submit" name="login" value="Login" alt="login" id="submit_btn" title="Login" />
				
                
          </form>
		   <form action="forgot.php" method="post">
				<label>
				<label><span class="style1">Forgot Password</span></label>
                <input type="checkbox" value="" name="username" size="10" class="input_field" title="check" />
				</label></form>
				
				</div>
            <div class="cleaner"></div>
           
  </div>

<div class="wrapper">
  <div id="ei-slider" class="ei-slider">
    <ul class="ei-slider-large">
      <li> <img src="img/large/2B.jpg" alt="">
        <div class="ei-title">
          <h2>Professional</h2>
          <h3>Service Delivery</h3>
        </div>
      </li>
      <li> <img src="img/large/2D.jpg" alt="">
        <div class="ei-title">
          <h2>Passionate</h2>
          <h3>Effort</h3>
        </div>
      </li>
      <li> <img src="img/large/2G.jpg" alt="">
        <div class="ei-title">
          <h2>Utumishi kwa</h2>
          <h3>Wote</h3>
        </div>
      </li>
      <li> <img src="img/large/2E.jpg" alt="">
        <div class="ei-title">
          <h2>Preservation of</h2>
          <h3> peace</h3>
        </div>
      </li>
      <li> <img src="img/large/5.jpg" alt="">
        <div class="ei-title">
          <h2>Serve & </h2>
          <h3>Protect</h3>
        </div>
      </li>
      <li> <img src="img/large/6.jpg" alt="">
        <div class="ei-title">
          <h2>Discipline & </h2>
          <h3>iNTEGRITY</h3>
        </div>
      </li>
      <li> <img src="img/large/2I.jpg" alt="">
        <div class="ei-title">
          <h2> Reduce</h2>
          <h3>Crime</h3>
        </div>
      </li>
    </ul>
    <!-- ei-slider-large -->
    <ul class="ei-slider-thumbs">
      <li class="ei-slider-element">Current</li>
      <li><a href="#">Slide 1</a><img src="img/thumbs/2B.jpg" alt=""></li>
      <li><a href="#">Slide 2</a><img src="img/thumbs/2D.jpg" alt=""></li>
      <li><a href="#">Slide 3</a><img src="img/thumbs/2G.jpg" alt=""></li>
      <li><a href="#">Slide 4</a><img src="img/thumbs/4.jpg" alt=""></li>
      <li><a href="#">Slide 5</a><img src="img/thumbs/5.jpg" alt=""></li>
      <li><a href="#">Slide 6</a><img src="img/thumbs/6.jpg" alt=""></li>
      <li><a href="#">Slide 7</a><img src="img/thumbs/2I.jpg" alt=""></li>
    </ul>
    <!-- ei-slider-thumbs -->
  </div>
  <!-- ei-slider -->
</div>
<!-- wrapper -->
<div id="container">
  <ul class="ca-menu" style="margin: 40px 0">
    <li> <a href="forms.php" target="_blank"> <span class="ca-icon">A</span>
      <div class="ca-content">
        <h2 class="ca-main">Downloads</h2>
        <h3 class="ca-sub">Abstracts and P3 Forms</h3>
      </div>
      </a> </li>
     <li> <a href="../OCARS/Documents/good conduct.pdf" target= "_blank"> <span class="ca-icon">I</span>
      <div class="ca-content">
        <h2 class="ca-main">Certificate of Good Conduct</h2>
        <h3 class="ca-sub">Application Requirements</h3>
      </div>
      </a> </li>
    <li> <a href="http://www.raidsonline.com" target="_blank"> <span class="ca-icon">C</span>
      <div class="ca-content">
        <h2 class="ca-main">Map Crime</h2>
        <h3 class="ca-sub">Understanding visually</h3>
      </div>
      </a> </li>
    <li> <a href="../OCARS/piwik/piwik/index.php" target="_blank"> <span class="ca-icon">S</span>
      <div class="ca-content">
        <h2 class="ca-main">Dashboard</h2>
        <h3 class="ca-sub">Professionals in action</h3>
      </div>
      </a> </li>
  </ul>
  <div style="clear:both; height: 40px"></div>
  
  
  <h4>Sponsored Sites</h4>
<p><img src="img/vic4.jpeg" alt="">
</p>
          
  
</div>
<!-- close container -->
<div style="clear:both; height: 40px"></div>
<div id="footer">
  <div style="width:960px; margin: auto; padding-bottom: 30px">
    <div class="one-fourth">
      <h3>Useful Downloads</h3>
      <ul style="font-family: Georgia, 'Times New Roman'; margin: 0 15px 0 0">
        <li style="border-bottom: 1px dotted #737a84; border-top: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">
		<a href="../OCARS/Documents/Kenya_Public_Officer_Ethics_Act.pdf" target="_blank">Police Ethics Act</a></li>
        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">
		<a href="../OCARS/Documents/CRIME REPORT 2011.pdf" target= "blank">Crime Report 2011</a></li>
        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">
		<a href="../OCARS/Documents/PoliceAct.pdf" target= "_blank">Police Act</a></li></li>
        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">
		<a href="../OCARS/Documents/Vision.pdf" target= "_blank">Vision & Mission</a></li></li></li>
      </ul>
    </div>
    <div class="one-fourth">
      <h3>Terms and Conditions</h3>
      <ul style="font-family: Georgia, 'Times New Roman'; margin: 0 15px 0 0">
        <li style="border-bottom: 1px dotted #737a84; border-top: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Kenya Police</li>
        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">AP Police</li>
        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Currivitas</li>
        <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Others</li>
      </ul>
    </div>
    <div class="one-fourth">
      <h3>Information</h3>
     Any Information sent or otherwise given on this website is and should be confidential in nature and may not be used for malicious intent.
      <div id="social_icons"> Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a><br>
        Photos © <a href="http://dieterschneider.net">Dieter Schneider</a> </div>
    </div>
    <div class="one-fourth last">
      <h3>Socialize</h3>
      <img src="img/icon_fb.png" alt=""> <img src="img/icon_twitter.png" alt=""> <img src="img/icon_in.png" alt=""> </div>
    <div style="clear:both"></div>
  </div>
</div>
<div id="shadow"></div>
</body>
</html>