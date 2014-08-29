<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OCARS|News</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/menu/css/simple_menu.css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
.style3 {color: #000000}
.style6 {color: #CCCCCC}
-->
</style>
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
<!--JS FILES STARTS-->
<script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script>
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
<body>
<?php
   include "Header2.php"
   ?>
<h1 class="logo">News - Blog - Articles</h1>
  
           <h2>Latest News</h2>
		   You are here:<a href="home.php">Home</a> >><a href="News.php">News</a> 
           <table width="100%" border="0" bordercolor="#2AA2C7" >
             
             <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("cms", $con);
// Specify the query to execute
$sql = "select * from News_Tbl";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['News_Id'];
$News=$row['News_Title'];
$Date=$row['News_Date'];
?>
           
			<tr><td> 
			 <div id="container">
  <div class="loader_div" id="loader">Laster innhold, vennligst vent!</div>
  <div id="pagination_content">
    <div style="overflow:hidden; position:relative;">
      <div class="article_box2"> <a href="#"><img src="img//thumbs/2H.jpg" alt="" width="106" height="106" style="float:left; margin-right: 10px"></a>
        <h2 style="font-size: 1.6em; margin-bottom: 5px; margin-top: 0; font-family:arial"><a href="#"> Read the News.. </a></h2>
        <span style="font-size: .8em"><?php echo "Date: ".$Date.":".$News;?> </span> </div>
     
    </div>
    <div style="height:10px;">&nbsp;</div>
  </div>
  
  <div style="height: 5px; clear:both"></div>
</div>
</tr></td>

             <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
             <?php
// Close the connection
mysql_close($con);
?>
           </table>
          <p>&nbsp;</p>
          <div class="cleaner"></div>
       
    
      <?php
   include "Footer2.php";
   ?>

<div id="shadow"></div>
</body>
</html>