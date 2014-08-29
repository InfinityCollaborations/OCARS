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
<body style="background-image:url('img/bg4.jpg');background-attachment:fixed" oncontextmenu="return false;">

   <?php
   include "Header2.php"
   ?>
 
           <h2 align="center" class="style2">Crime in your Area</h2>
		   You are here:<a href="home.php">Home</a> >><a href="viewCrime.php">Crime By Area</a> 
 <form name="form" action="viewCrime.php" method="post" align="center">
Search by Location <input type="text" name="q" id="view" placeholder="Search" />
<input type="submit" name="Submit"  />
</form>

<?php 

	  if(isset($_POST['q']))
	  $loc=$_POST['q'];
	  
	if (!isset($loc)){
	echo "<p>Please enter your search!</p>";
	exit;
	}	  
	  //connect  to the database 
	  $db= mysql_connect  ("localhost", "root") or die ('Cannot connect to the database  because: ' . mysql_error()); 
	  //-select  the database to use 
	  $mydb=mysql_select_db("cms"); 
	  //-query  the database table 
	  $sql="SELECT DISTINCT c.Complaint_Type, c.Complaint_Date, c.Status, t.tipType, t.tipDate, t.Status
	  FROM complaint_tbl c,tipoff_tbl t
	  WHERE c.Location LIKE '%" . $loc .  "%' or t.Location LIKE '%" . $loc .  "%' GROUP BY c.Location or t.Location"; 
	  if($loc ==""){ 
	  echo  "<p>Please enter a search query</p>"; 
	  exit;
	  } 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql); 
	  if(!$result){
	  die('Invalid Query:'.mysql_error());
	  	  }
	  
	    //-create  while loop and loop through result set
 echo "<table border='0'><th><strong>Crimes reported from $loc include:</strong></th>";
 echo "<tr><strong><th><u> CRIME REPORTED<u/></th> <th><u>DATE POSTED</u></th> <th><u>STATUS</u></th></strong></tr>"; 
	  while($row=mysql_fetch_array($result)){ 
	          $cDate=$row['Complaint_Date']; 
	          $cType=$row['Complaint_Type']; 
			  $cStat=$row['Status']; 
			   $tType=$row['tipType']; 
			   $tDate=$row['tipDate']; 
			   $tStat=$row['Status']; 
		//-display the result of the array 
	  echo "<tr> <td>".$cType."</td> <td>".$cDate."</td><td>".$cStat."</td> </tr>\n"; 
	  echo "<tr> <td>".$tType."</td> <td>".$tDate."</td><td>".$tStat."</td> </tr>\n";  
	  		  	  } echo "</table>";  
  
	?>  

           <p>&nbsp;</p>
        <div class="cleaner"></div>
     
    <?php
				  

// Retrieve Number of records returned
$records = mysql_num_rows($result);
if ($records == 0)
{
echo "<p>Sorry, your search area has no crimes reported yet</p>";
}

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