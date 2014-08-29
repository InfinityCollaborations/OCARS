<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OCARS|Wanted</title>
<link rel="stylesheet" type="text/css" media="print" href="print.css" />
<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {color: #CCCCCC}
.style7 {color: #289EC2}
.style9 {font-weight: bold}
.style8{color: #2AA2C7}
.style2 {color: #FFFFFF}
.style10 {color: #000000; font-weight: bold; }

-->
</style>
</head>
<body style="background-image:url('img/bg4.jpg');background-attachment:fixed">

  <?php
   include "Header2.php"
   ?>
   <script type="text/javascript">
   function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
	  	  	   
}
</script>

   <h2 class="style2"><center>Most Wanted Criminals</center></h2>
  <p align="right"><img src="../OCARS/Documents/print.jpg" onclick="printDiv('printableArea')"></p>
 You are here:<a href="home.php">Home</a> >><a href="Wanted.php">Wanted Persons</a> 
 <form name="form" action="searchwanted.php" method="get" align="right">
Search by Name, Location or Crime<input type="text" name="q" placeholder="Search Wanted" />
<input type="submit" name="Submit" value="Search"/>
</form>
 
 <div id="printableArea">
 
             <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("cms", $con);
// Specify the query to execute
$sql = "select * from mostwanted_tbl order by Station_Name";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['Wanted_Id'];
$Name=$row['Wanted_Name'];
$Loc=$row['Wanted_Location'];
$Crime=$row['Wanted_Crime'];
$Desc=$row['Wanted_Desc'];
$Photo=$row['Wanted_Image'];
?>
           <table width="100%" border="0" cellspacing="1" cellpadding="1">
             
             <tr>
			 
               <td width="16%" rowspan="3"><strong><img src="Documents/<?php echo $Photo;?>" alt="" width="125" height="135" /></strong></td>
               <td height="21" bgcolor="#FFFFFF"><span class="style8"><strong>Name:<p>&nbsp;</p></strong></span><span ><strong><?php echo $Name;?></strong></span></td>
               <td width="46%" bgcolor="#FFFFFF"><span class="style8"><strong>Location:<p>&nbsp;</p></strong></span><span ><strong><?php echo $Loc;?></strong></span></td>
             </tr>
             <tr>
               <td width="46%" bgcolor="#FFFFFF"><span class="style8"><strong>Crime Done </strong></span></td>
               <td width="46%" bgcolor="#FFFFFF"><span class="style8"><strong>Description </strong></span></td>
             </tr>
             <tr>
               <td><strong><?php echo $Crime;?></strong></td>
               <td><strong><?php echo $Desc;?></strong></td>
             </tr>
            
           </table>
           <?php
}

// Close the connection
mysql_close($con);
?>
          
          <div class="cleaner"></div>
<div class="for-print" >		  
Printed By:   <?php echo "Visitor"?> <p>&nbsp;</p>
Authorized By: <?php echo "Kenya Police"?> <p>&nbsp;</p>
Printed Date: <?php echo date('M d Y H:i:s', time());?>
</div>
       </div>
    
   
   <?php
   include "Footer2.php";
   ?>

<div id="shadow"></div>
</body>
</html>