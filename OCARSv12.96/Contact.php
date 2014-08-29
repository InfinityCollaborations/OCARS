<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>OCARS|Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/menu/css/simple_menu.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {color: #000000; font-weight: bold; }
.style3 {color: #FFFFFF}
.textarea{
 display:block;
width:200px;
 height:100px;   
}
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
                   
				   [//Email
						   ["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]
						  
                   ],
				    [//Mobile
						  
						  ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ]
						 				  
                   ],
				   [//Feedback
						  
						 ["minlen=1",
		"Please Enter Feedback "
						  ]  
                   ]
            ];
</SCRIPT>
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
    
           <h2 class="style3">Contact Us</h2>
		   You are here:<a href="home.php">Home</a> >><a href="Contact.php">Contacts</a> 
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
               <td width="5%"><img src="images/booknow.png" width="26" height="20" /></td>
               <td><p class="style1"><strong>Kenya Police Station</strong></p>
               <p class="style1"><strong>University Way</strong></p>
               <p class="style1"><strong>Nairobi</strong></p></td>
			    <td><img src="images/call.png" width="30" height="32" /></td>
              <td width="50%"><span class="style1"><strong><p>+254 7896 5647 OR</p><p> +254 7568 4566</p></strong>
              </span> </td>
			   <td width="10%"><img src="images/mail.png" width="30" height="32" /></td>
               <td width="50%"><span class="style1"><strong>info@kenya-police.com</strong></span></td>
			  <td width="50%"><p class="style1"><strong> <a href="../OCARS/Documents/contacts.pdf" target="_blank"> Other Police Station Contacts</a></strong></p></td>
			  
             </tr>
                    
           </table>
           <h2 class="style3"> Please Give Us Some Feedback</h2>
           <form id="form1" name="form1" method="post" action="InsertFeedback.php" onSubmit="return validateForm(this,arrFormValidation);">
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tr>
                 <td width="25%" height="30"><span class="style2">Name:</span></td>
               <td width="75%"><span id="sprytextfield1">
                   <label>
                   <input type="text" name="txtName" id="txtName" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
			  <tr>
             
                 <td height="41"><span class="style2">Email:</span></td>
               <td><span id="sprytextfield2">
                   <label>
                   <input type="email" name="txtEmail" id="txtEmail" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
             </tr>
               <tr>
                 <td height="42"><span class="style2">Mobile:</span></td>
               <td><span id="sprytextfield3">
                   <label>
                   <input type="text" name="txtMobile" id="txtMobile" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
               </tr>
		
               <tr>
                 <td height="116"><span class="text">Feedback:</span></td>
               <td><span id="sprytextarea1">
                   <label>Char Left:
				   <input onblur="textCounter(this.form.recipients,this,10);" disabled  onfocus="this.blur();" tabindex="999" maxlength="3" size="3" value="10" name="counter">
				     <textarea name="txtFeedback" id="txtFeedback"  onblur="textCounter(this,this.form.counter,10);" onkeyup="textCounter(this,this.form.counter,10);" style="WIDTH: 608px; HEIGHT: 94px"  rows="1" cols="15" >
				</textarea>
				   
				  </label>
				
                 <span class="textareaRequiredMsg">A value is required.</span></span></td>
               </tr>
               <tr align="center" >
                                 <td >
                   <input type="submit" name="button" id="button" value="Submit" align="center"/> </td>
				     <td align="center"> <input type="reset" name="button" id="button1" value="Reset" align="center"/>
                 </td>
               </tr>
             </table>
          </form>
                    <div class="cleaner"></div>
       
    
   
   <?php
   include "Footer2.php";
   ?>

<div id="shadow"></div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>