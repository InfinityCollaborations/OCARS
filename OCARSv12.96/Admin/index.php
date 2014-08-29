<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 header("Cache-Control: no-cache, must revalidate");
header("Expires: Saturday, 26 Jul 2013 00:00:00 GMT");
header("Pragma: no-cache");
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OCARS|ADMINISTRATOR</title>
 <div id="login">
        
          <h2 align="center">Welcome <img src="images/suppliers.png" width="32" height="32" /></h2>
          <div align="center">
             <p><span class="style1"><?php echo $_SESSION['Name'];?> :ADMINISTRATOR</span></p>
            <p><a href="Logout.php"><img src="images/exit.png" width="32" height="32" /></a><br/>
            </p>
          </div>
          <div class="cleaner"></div>
            
  </div>
   <script type="text/javascript">
    window.history.forward();
  function noBack(){ window.history.forward();}
  </script>
</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="" oncontextmenu="return false;">
   <?php
   include "Header.php"
   ?>
               <h2>Welcome To Control Panel</h2>
           <p>Please choose an option to proceed.</p>
       
        <div class="cleaner"></div>
        
   <?php
   include "Footer.php";
   ?>

<div id="shadow"></div>
</body>
</html>