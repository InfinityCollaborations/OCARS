<?php
 header("Cache-Control: no-cache, must revalidate");
header("Expires: Saturday, 26 Jul 2013 00:00:00 GMT");
header("Pragma: no-cache");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin| Tips</title>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
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
<div id="templatemo_wrapper">
   <?php
   include "Header.php"
   ?>
              <h2>Safety Tips Management</h2>
           <div id="TabbedPanels1" class="TabbedPanels">
             <ul class="TabbedPanelsTabGroup">
               <li class="TabbedPanelsTab style1 style2" tabindex="0">Create Safety Tips</li>
               <li class="TabbedPanelsTab style1 style2" tabindex="0">Display Safety Tips</li>
             </ul>
             <div class="TabbedPanelsContentGroup">
               <div class="TabbedPanelsContent">
                 <form id="form1" name="form1" method="post" action="InsertTips.php">
                   <table width="100%" height="115" border="0" cellpadding="0" cellspacing="0">
                     <tr>
                       <td><span class="style3">Safety Tips:</span></td>
  <td><span id="sprytextarea1">
                         <label>
                         <textarea name="txtTips" id="txtTips" cols="45" rows="3" maxlength="150"></textarea>
                         </label>
                       <span class="textareaRequiredMsg">A value is required.</span></span></td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td><label>
                         <input type="submit" name="button" id="button" value="Submit" />
                       </label></td>
                     </tr>
                   </table>
                 </form>
               </div>
               <div class="TabbedPanelsContent">
                 <table width="100%" border="1" bordercolor="#2AA2C7" >
                   <tr>
                     <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Id</strong></div></th>
                     <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Safety Tip</strong></div></th>
                     <th bgcolor="#E3B71A" class="style6"><div align="left" class="style12 style2 style4">Delete</div></th>
                   </tr>
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
                   <tr>
                     <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Id;?></strong></div></td>
                     <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Detail;?></strong></div></td>
                     <td class="style6"><div align="left" class="style9 style5 style4"><strong><a href="DeleteTips.php?TipId=<?php echo $Id;?>">Delete</a></strong></div></td>
                   </tr>
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
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>