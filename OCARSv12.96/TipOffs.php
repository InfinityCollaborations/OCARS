<?php require_once('../OCARS/Connections/CMS.php');
if (!isset($_SESSION)) 
{
  session_start(); }
mysql_select_db($database_CMS, $CMS);
$query_Recordset1 = "SELECT Station_Name FROM policestation_tbl";
$Recordset1 = mysql_query($query_Recordset1, $CMS) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tip Offs</title>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2 {color: #FFFFFF}

-->
</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #000000}
-->
</style>
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style6 {color: #CCCCCC}
-->
</style>
</head>
<body style="background-image:url('img/bg4.jpg');background-attachment:fixed">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<script language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Police
						  ["minlen=1",
		"Please Enter Police Station Name "
						  ] 
					
                     ],
					 
                   [//Type
						   ["minlen=1",
		"Please Enter Tip Off Type "
						  ] 
						  
                   ],
				    [//Location
						   ["minlen=1",
		"Please Enter Location "
						  ] 
						  
                   ],
			 
				   [//Description
						  
					 ["minlen=1",
		"Please Enter Tip Description "
						  ]	
                   ],
				  
				  
            ];
</script>
  <script type="text/javascript">
   function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<script type="text/javascript">  
function textCounter( field, countfield, maxlimit ) {
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  field.blur();
  field.focus();
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
 </script> 
   <?php
   include "Header2.php"
   ?>
  <p align="right"><img src="img/print.jpg" onclick="printDiv('printableArea')"></p>
  You are here:<a href="home.php">Home</a> >><a href="TipOffs.php">Tip Offs</a> 
           <div id="printableArea">
		   <h2 align="center" class="style2"> Submit your Tip Offs </h2>
		   
           <div id="TabbedPanels1" class="TabbedPanels">
             <ul class="TabbedPanelsTabGroup">
               <li class="TabbedPanelsTab style1 style2" tabindex="0" align="center">Please Try and give us as much Information as you can including Names and Locations. DO NOT include your personal details</li>
                           </ul>
             <div class="TabbedPanelsContentGroup">
               <div class="TabbedPanelsContent">
                 <form action="InsertTipOffs.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return validateForm(this,arrFormValidation);">
                   <table width="150%" height="512" border="0" cellpadding="0" cellspacing="0">
                     <tr> <td><span class="style3">Select Police Station:</span></td>
                     <td><label>
                         <select name="cmbStation" id="cmbStation">
						  <option value="">Select Station </option>
                           <?php
							do {  
						?>
                           <option value="<?php echo $row_Recordset1['Station_Name']?>"><?php echo $row_Recordset1['Station_Name']?></option>
                           <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
                         </select>
                       </label></td>
						
                     </tr>
                  
					  <tr>
                       <td><span class="style3">Select Tip Off Type::</span></td>
                       <td><span id="sprytextfield2"><label>
                         <select name="cmbType" id="cmbType">
                            <option value="">Select Crime Category</option>
                           <option>Robbery</option>
                           <option>Murder</option>
                           <option>Hate Crime victimization</option>
						    <option>Aggravated Assault</option>
							 <option>Domestic Violence</option>
							  <option>Corruption</option>
							   <option>Drug Possesion</option>
							    <option>Identity Theft</option>
								 <option>Larceny</option>
								  <option>Riot</option>
								   <option>Kidnapping</option>
								  <option>Sexual Assault</option>
								  <option>Other</option>
                         </select>
                       </label> <span class="textfieldRequiredMsg">A value is required.</span>
					   </td>
                     </tr>
					  <tr>
                       <td><span class="style3">Incident Location:</span></td>
						<td><span id="sprytextfield3">
                         <label>
                         <input type="text" name="txtLoc" id="txtLoc" />
                         </label>
                       <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                     </tr>
                     <tr>
                       <td><span class="style3">Tip Off Description:</span></td>
                       <td><span id="sprytextarea1">
   						  <label>Char Left:
				   <input onblur="textCounter(this.form.recipients,this,50);" disabled  onfocus="this.blur();" tabindex="999" maxlength="3" size="3" value="50" name="counter">
                         <textarea type="text" name="txtDesc" id="txtDesc" onblur="textCounter(this,this.form.counter,50);" onkeyup="textCounter(this,this.form.counter,50);" style="WIDTH: 608px; HEIGHT: 94px"  rows="1" cols="15">
						 </textarea>
                         </label>
                       <span class="textareaRequiredMsg">A value is required.</span></span></td>
                     </tr>
                    
                     <tr>
                       <td>&nbsp;</td>
                       <td><label>
                         <input type="submit" class="button" id="button" value="Submit" />
						 <input class="button" type="button" id="button1" onclick="window.location.replace('home.php')" value="Cancel" />
                       </label></td>
                     </tr>
					 
                   </table>
                 </form>
               </div></div></div>
       <p>&nbsp;</p>
          <div class="cleaner"></div>
        </div>
   <?php
   include "Footer2.php";
   ?>

<div id="shadow"></div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
