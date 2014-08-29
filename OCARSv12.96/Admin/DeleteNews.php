<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Deleting News</title>
</head>

<body>
<?php

	$Id=$_GET['NewsId'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("cms", $con);
	// Specify the query to Insert Record
	$sql = "delete from News_Tbl where News_Id='".$Id."'";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("News Deleted Succesfully");window.location=\'News.php\';</script>';

?>
</body>
</html>
