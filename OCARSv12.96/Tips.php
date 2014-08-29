<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OCARS|Tips</title>
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
.style3 {color: #000000}
.style6 {color: #CCCCCC}
-->
</style>
</head>
<body>

   <?php
   include "Header2.php"
   ?>
    
    	
           <h2>Safety Tips</h2>
		   You are here:<a href="home.php">Home</a> >><a href="Tips.php">Saftey Tips</a> 
           <table width="100%" height="33" border="0" bordercolor="#2AA2C7" >
             
             <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("cms", $con);
// Specify the query to execute
$sql = "select * from Tips_Tbl";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['Tips_Id'];
$Detail=$row['Tips_Detail'];

?>
            
			 
			 	 <div id="container">
  <div class="loader_div" id="loader"></div>
  <div id="pagination_content">
    <div style="overflow:auto; position:relative;">
      <div class="article_box2"> <a href="#"><img src="img/thumbs/2H.jpg" alt="" width="106" height="106" style="float:left; margin-right: 10px"></a>
        <h2 style="font-size: 1.6em; margin-bottom: 5px; margin-top: 0; font-family:arial"><a href="#"> Safety Tips.. </a></h2>
        <span style="font-size: .8em"><?php echo "DETAILS:".$Detail;?> <a href="#" class="button_small" style="float:right; margin-top:5px">More &raquo;</a></span> </div>
    
    </div>
    <div style="height:10px;">&nbsp;</div>
  </div>
  
  <div style="height: 5px; clear:both"></div>
</div>
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

<div id="shadow"></div
</body>
</html>