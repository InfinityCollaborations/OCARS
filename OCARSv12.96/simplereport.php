<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OCARS|View Crime</title>
<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {color: #CCCCCC}
.style7 {font-size: large}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style9 {color: #2AA2C7}
.style2 {color: #FFFFFF}
-->
</style>
</head>
<body style="background-image:url('img/bg4.jpg');background-attachment:fixed">

   <?php
   include "Header2.php"
   ?>
 
           <h2 align="center" class="style2">Search Report</h2>
		   You are here:<a href="home.php">Home</a> >><a href="simplereport.php">Crime By Area</a> 
 <form name="form" action="simplereport.php" method="post" align="center">
Search by Case Number <input type="text" name="q" id="view" placeholder="Search" />
<input type="submit" name="Submit"  />
</form>

<?php 

	  if(isset($_POST['q']))
	  $case=$_POST['q'];
	  
	if (!isset($case)){
	echo "<p>We don't seem to have a search parameter!</p>";
	exit;
	}	  
	  //connect  to the database 
	  $db= mysql_connect  ("localhost", "root") or die ('Cannot connect to the database  because: ' . mysql_error()); 
	  //-select  the database to use 
	  $mydb=mysql_select_db("cms"); 
	  //-query  the database table 
	  $sql=("select * from case_tbl INNER JOIN suspect.tbl ON case_tbl.suspectID=suspect_tbl.suspectID
		INNER JOIN victim.tbl ON case_tbl.victimID=victim_tbl.victimID where caseNo LIKE '%" . $case .  "%' ");
	  if($case ==""){ 
	  echo  "<p>Please enter a search query</p>"; 
	  exit;
	  } 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql); 
	  //-create  while loop and loop through result set
 echo "<u><strong>Crimes reported from  include:</strong></u>";
echo " <p>&nbsp;</p>"; 
	  while($row=mysql_fetch_array($result)){ 
$Id=$row['caseNo'];
$sId=$row['suspectID'];
$sName=$row['firstName']." ".$row['surName']." ".$row['alias'];
$vId=$row['victimID'];
$vName=$row['firstName']." ".$row['surName']." ".$row['alias'];
$IncLoc=$row['incidentLocation'];
$CDesc =$row['crimeDesc'];
$VIC=$row['victimID'];
$SID=$row['suspectID'];
$status=$row['status'];
			   
	      //-display the result of the array 
	   
	  
	   echo "<ol>\n"; 
	  echo "<li><strong>"   .$Id . "---Posted On--- " .$sId.  "</strong></li>\n"; 
	   echo "<li><strong>"   .$sName . "---Posted On--- " .$vId.  "</strong></li>\n"; 
	    echo "<li><strong>"   .$vName . "---Posted On--- " .$IncLoc.  "</strong></li>\n"; 
		 echo "<li><strong>"   .$CDesc . "---Posted On--- " .$VIC.  "</strong></li>\n"; 
		  echo "<li><strong>"   .$SID . "---Posted On--- " .$status.  "</strong></li>\n"; 
	  echo "</ol>"; 
	  } 
	 
	  
	
	  
	?>  

           <p>&nbsp;</p>
        <div class="cleaner"></div>
     
    <?php
				  

// Retrieve Number of records returned
$records = mysql_num_rows($result);
if ($records == 0)
{
echo "<p>Sorry, your search yielded no results</p>";
echo "Number of records retrieved: $records";}
?>
	                   <?php
// Close the connection
mysql_close($db);
?>	
           
   <?php
   include "Footer2.php";
  
   ?>

<div id="shadow"></div>
</body>
</html>