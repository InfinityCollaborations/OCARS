<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['username'];
$Password=$_POST['password'];
$UserType=$_POST['cmbUser'];
if ($UserType=="Admin")
{
$PasswordHash= sha1($Password);
$con = mysql_connect("localhost","root");
mysql_select_db("cms", $con);
$sql = "select * from Admin_Tbl where Admin_Name='$UserName' AND Admin_Password='$PasswordHash' LIMIT 1";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'home.php\';</script>';
} 
else 
{
$_SESSION['ID']=$row['Admin_Id'];
$_SESSION['Name']=$row['Admin_Name'];
header("location:Admin\index.php");

}
mysql_close($con);
}
else if($UserType=="Police")
{
$PasswordHash= sha1($Password);
$con = mysql_connect("localhost","root");
mysql_select_db("cms", $con);
$sql = "select * from policestation_tbl
where UserName='$UserName' AND Password='$PasswordHash' LIMIT 1";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'home.php\';</script>';
} 
else 
{
$_SESSION['ID']=$row['Station_Id'];
$_SESSION['Name']=$row['Station_Name'];
header("location:PoliceStation\index.php");

}
mysql_close($con);
}
else
{
$PasswordHash= sha1($Password);
$con = mysql_connect("localhost","root");
mysql_select_db("cms", $con);
$sql = "select * from user_tbl where UserName='$UserName' AND Password='$PasswordHash' LIMIT 1";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);

if ($records==0) 
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'home.php\';</script>';
} 
else 
{
$_SESSION['ID']=$row['User_Id'];
$_SESSION['Name']=$row['Name'];
header("location:RegUser\index.php");

}
mysql_close($con);
}

?>
</body>
</html>
