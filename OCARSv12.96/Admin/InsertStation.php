<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserting Station</title>
</head>

<body>
<?php

	$txtName=$_POST['txtName'];
	$txtAdd=$_POST['txtAdd'];
	$cmbCIty=$_POST['cmbCIty'];
	$txtEmail=$_POST['txtEmail'];
	$txtMobile=$_POST['txtMobile'];
	$txtUser=$_POST['txtUser'];
	$txtPassword=$_POST['txtPassword'];
	$HashPass=sha1($_POST['txtPassword']);
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("cms", $con);
	// Specify the query to Insert Record
	$sql = "insert into policestation_tbl(Station_Name,Address,City,Email,Mobile,UserName,Password) values('".$txtName."','".$txtAdd."','".$cmbCIty."','".$txtEmail."','".$txtMobile."','".$txtUser."','".$HashPass."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Police Station Inserted Succesfully");window.location=\'Station.php\';</script>';

?>
</body>
</html>
