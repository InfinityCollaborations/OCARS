
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OCARS|Register</title>
</head>

<body>
<?php
//require_once('CMS');
	$Name=$_POST['txtName'];
	$Address=$_POST['txtAdd'];
	$City=$_POST['cmbCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Gender=$_POST['cmbGender'];
	$Station=$_POST['cmbStation'];	
	$BirthDate=$_POST['txtDate'];
	
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("cms", $con);
	//create sha1 hash of password
$PasswordHash=sha1($_POST['txtPassword']);
	// Specify the query to Insert Record
 $sql = "insert into user_tbl(Name,Address,City,Mobile,Email,Gender,BirthDate,UserName,Password,Station_Name) values('".$Name."','".$Address."','".$City."','".$Mobile."','".$Email."','".$Gender."','".$BirthDate."','".$UserName."','".$PasswordHash."','".$Station."')";

	// execute query
	mysql_query ($sql,$con);
	if($sql)
	{
	echo 'Successfully Entered data';
	echo '<script type="text/javascript">alert("Registration Completed Succesfully <br/> Please Login Continue");window.location=\'home.php\';</script>';
	}
	else{
	echo 'Mysql Error:'.mysql_error();
	echo '<script type="text/javascript">alert("Registration Completed Succesfully <br/> Please Login Continue");window.location=\'home.php\';</script>';
	}
	// Close The Connection
	mysql_close ($con);
	
	//echo '<script type="text/javascript">alert("Registration Completed Succesfully <br/> Please Login Continue");window.location=\'home.php\';</script>';

?>
</body>
</html>
