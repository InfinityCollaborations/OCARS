<?php
 header("Cache-Control: no-cache, must revalidate");
header("Expires: Saturday, 26 Jul 2013 00:00:00 GMT");
header("Pragma: no-cache");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin|Users</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 12px
}
.style2 {color: #FFFFFF}
-->
</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {color: #CCCCCC}
-->
</style>
 <script type="text/javascript">
    window.history.forward();
  function noBack(){ window.history.forward();}
  </script>
</head>
<body onload="noBack();"  onpageshow="if (event.persisted) noBack();"  onunload="" oncontextmenu="return false;">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>

   <?php
   include "Header.php"
   ?>
   <p>&nbsp;</p>
     You are here:<a href="index.php">Home</a> >><a href="Member.php">Registered Members</a> 
    <div id="templatemo_content">
    	<div class="section_w800">
           <h2>User Management</h2>
           <div id="TabbedPanels1" class="TabbedPanels">
             <ul class="TabbedPanelsTabGroup">
               
               <li class="TabbedPanelsTab style1 style2" tabindex="0">Display User Information</li>
             </ul>
             <div class="TabbedPanelsContentGroup">
              
               <div class="TabbedPanelsContent">
              
                   <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("cms", $con);
// Specify the query to execute
$sql = "select * from user_tbl  ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['User_Id'];
$Name=$row['Name'];
$Address=$row['Address'];
$City=$row['City'];
$Email=$row['Email'];
$Mobile=$row['Mobile'];

?>
               <table width="100%" height="246" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="35" bgcolor="#91D5E8"><span class="style1 style5"><strong>ID:</strong></span></td>
                    <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $Id;?></strong></span></td>
                  </tr>
                  <tr>
                    <td height="37" bgcolor="#DAF1F8"><span class="style1 style5"><strong>Name:</strong></span></td>
                    <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $Name;?></strong></span></td>
                  </tr>
                  <tr>
                    <td height="38" bgcolor="#91D5E8"><span class="style1 style5"><strong>Address:</strong></span></td>
                    <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $Address;?></strong></span></td>
                  </tr>
                  <tr>
                    <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>City:</strong></span></td>
                    <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $City;?></strong></span></td>
                  </tr>
                  <tr>
                    <td height="32" bgcolor="#91D5E8"><span class="style1 style5"><strong>Mobile:</strong></span></td>
                    <td bgcolor="#91D5E8"><span class="style1 style5"><strong><?php echo $Mobile;?></strong></span></td>
                  </tr>
                  <tr>
                    <td height="34" bgcolor="#DAF1F8"><span class="style1 style5"><strong>Email:</strong></span></td>
                    <td bgcolor="#DAF1F8"><span class="style1 style5"><strong><?php echo $Email;?></strong></span></td>
                  </tr>
                                                           
                                                 </table>
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
               </div>
             </div>
           </div>
           <p>&nbsp;</p>
          <div class="cleaner"></div>
           <?php
   include "Footer.php";
   ?>

<div id="shadow"></div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>