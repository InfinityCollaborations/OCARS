<?php require_once('Connections/CMS.php'); ?>
<?php
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

mysql_select_db($database_CMS, $CMS);
$query_Recordset1 = "SELECT Station_Name FROM policestation_tbl";
$Recordset1 = mysql_query($query_Recordset1, $CMS) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OCARS|Register</title>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;

}
.style2 {color: #FFFFFF}
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-image:url('img/bg4.jpg');background-attachment:fixed">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						  ["minlen=1",
		"Please Enter Name "
						  ] 
					
                     ],
                   [//Address
						   ["minlen=1",
		"Please Enter Address "
						  ] 
						  
                   ],
				   [//City
						  
						  
                   ],
				   [//Mobile
						  
						  ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ]
						 				  
                   ],
				   [//Email
						   ["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]
						  
                   ],
				   [//Gender
						  
						  
                   ],
				   [//Birthdate
						  
						  ["minlen=1",
		"Please Select BirthDate "
						  ]
						  
                   ],
				   [//Police Station
						  
						  
                   ],
				   [//UserName
						  
					 ["minlen=1",
		"Please Enter UserName "
						  ]	
                   ],
				   [//Password
						  
						 ["minlen=1",
		"Please Enter Password "
						  ] 
						  
                   ],
				   
            ];
</SCRIPT>

   <?php
   include "Header2.php"
   ?>
    
           <h2 class="style2">Register Here to Place a Complaint </h2>
		   <table> <tr> <td>
           <form action="CreateUser.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return validateForm(this,arrFormValidation);">
             <table width="100%" height="417" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td><span class="style1">Name:</span></td>
                 <td><span id="sprytextfield1">
                   <label>
                   <input type="text" name="txtName" id="txtName" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
               </tr>
               <tr>
                 <td><span class="style1">Address:</span></td>
                 <td><span id="sprytextarea1">
                   <label>
                   <textarea name="txtAdd" id="txtAdd" cols="35" rows="3"></textarea>
                   </label>
                 <span class="textareaRequiredMsg">A value is required.</span></span></td>
               </tr>
               <tr>
                 <td><span class="style1">City:</span></td>
                 <td><label>
                   <select name="cmbCity" id="cmbCity">
                     <option>Nairobi</option>
					 <option>Mombasa</option>
					 <option>Kisumu</option>
					 <option>Eldoret</option>
                 </select>
                 </label></td>
               </tr>
               <tr>
                 <td><span class="style1">Mobile Number:</span></td>
                 <td><span id="sprytextfield2">
                   <label>
                   <input type="text" name="txtMobile" id="txtMobile" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
               </tr>
               <tr>
                 <td><span class="style1">Email Address:</span></td>
                 <td><span id="sprytextfield3">
                   <label>
                   <input type="email" name="txtEmail" id="txtEmail" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
               </tr>
               <tr>
                 <td><span class="style1">Gender:</span></td>
                 <td><label>
                   <select name="cmbGender" id="cmbGender">
                     <option value="">Select Value</option>
					 <option>Male</option>
                     <option>Female</option>
                 </select>
                 </label></td>
               </tr>
               <tr>
                 <td><span class="style1">Birth Date:</span></td>
                 <td><span id="sprytextfield4">
                   <label>
                   <input type="date" name="txtDate" id="txtDate" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
               </tr>
               <tr>
                 <td><span class="style1">Police Station:</span></td>
                 <td><label>
                   <select name="cmbStation" id="cmbStation">
				   <option value="">Select Value</option>
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
                 <td><span class="style1">User Name:</span></td>
                 <td><span id="sprytextfield5">
                   <label>
                   <input type="text" name="txtUserName" id="txtUserName" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
               </tr>
               <tr>
                 <td><span class="style1">Password:</span></td>
                 <td><span id="sprytextfield6">
                   <label>
                   <input type="password" name="txtPassword" id="txtPassword" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
               </tr>
             
               <tr>
                 <td>&nbsp;</td>
                 <td><label>
                   <input type="submit" class="button" id="button" value="Submit" />
				   <input class="button" type="button" id="button" onclick="window.location.replace('home.php')" value="Cancel" />
                 </label></td>
               </tr>
             </table>
          </form>
		  </td>
		  <td>
		  <a href="Register.php"><img src="img/report.jpg" width="302" height="167" alt=""></a>
		  
		  </td></tr></table>
          <p>&nbsp;</p>
          <div class="cleaner"></div>
        
    
   
   <?php
   include "Footer2.php";
   ?>

<div id="shadow"></div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
//-->
</script>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>