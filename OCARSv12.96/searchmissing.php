<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Results...</title>
<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {color: #CCCCCC}
.style7 {font-size: small}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style9 {color: #2AA2C7}
-->
</style>
</head>
<body>
<?php
include "Header2.php"
?>
<form name="form" action="searchmissing.php" method="get" align="right">
Search by  Name or Location<input type="text" name="q" placeholder="Search Missing" />
<input type="submit" name="Submit" value="SearchMissing"  />
</form>
You are here:<a href="index.php">Home</a> >><a href="Missing.php">Missing Persons</a>>><a href="searchmissing.php">Search Results</a></strong><br/>
<?php  // Get the search variable from URL
if (!isset($_GET['q'])) 
die("Search Query not found");
$var = $_GET['q'];
$trimmed = trim($var); //trim whitespace from the stored variable

// rows to return
$limit=10;

// check for an empty string and display a message.
if ($trimmed == ""){
echo "<p>Search by Names or Location…</p>";
exit;
}

// check for a search parameter
if (!isset($var)){
echo "<p>We don't seem to have a search parameter!</p>";
exit;
}

//connect to your database ** EDIT REQUIRED HERE **
$con=mysql_connect("localhost","root");

//specify database ** EDIT REQUIRED HERE **
mysql_select_db("cms",$con) or die("Unable to select database");
// Build SQL Query
$query = "select * from missingperson_tbl where First_Name like \"%$trimmed%\" or Middle_Name like \"%$trimmed%\" or Last_Name like \"%$trimmed%\" or Contact_City like \"%$trimmed%\" order by Last_Name DESC";



$numresults=mysql_query($query);
$numrows=mysql_num_rows($numresults);

// If we have no results, offer a google search as an alternative — this is optional

if ($numrows == 0)
{
echo "<h4><strong>RESULTS</strong></h4>";
echo "<p>Sorry, your search: $trimmed returned zero results</p>";

// google
echo "<p><a href=\"http://www.google.com/search?q=&#8221;
". $trimmed . "\" target=\"_blank\" title=\"Look up
" . $trimmed . " on Google\">Click Here</a> to try the
search on google</p>";
}

// next determine if s has been passed to script, if not use ZERO (0) to Limit the output
if (empty($s)) {
$s=0;
}

// get results
$query .= " limit $s,$limit";
$result = mysql_query($query) or die("Couldn’t execute query");

// display what the person searched for
echo "<p>You searched for: $var </p>";

// begin to show results set
echo "Results: <br/>";
$count = 1 + $s ;

// now you can display the results returned
while ($row= mysql_fetch_array($result)) {
$Id=$row['Person_Id'];
$Name=$row['First_Name']." ".$row['Middle_Name']." ".$row['Last_Name'];
$Gender =$row['Gender'];
$Height =$row['Height'];
$Weight=$row['Weight'];
$Contact_Person =$row['Contact_Person'];
$Contact_Address  =$row['Contact_Address'];
$Contact_City  =$row['Contact_City'];
$Contact_Mobile=$row['Contact_Mobile'];
$Photo =$row['Photo'];

echo "$count.> ";
$count++ ;


$currPage = (($s/$limit) + 1);

//break before paging
echo "<br />";

// next we need to do the links to other results
if ($s>=1) {

// bypass PREV link if s is 0
$prevs=($s-$limit);
$PHP_SELF;
print " <a href=\" $PHP_SELF?s=$prevs&q=$var\"><<
Prev 10</a>  ";
}

// calculate number of pages needing links
$pages=intval($numrows/$limit);

// $pages now contains int of pages needed unless there is a remainder from division

if ($numrows%$limit) {
// has remainder so add one page
$pages++;
}

// check to see if last page
if (!((($s+$limit)/$limit)==$pages) && $pages!=1) {

// not last page so give NEXT link
$news=$s+$limit;

echo " <a href=\"$PHP_SELF?s=$news&q=$var\">Next 10 >></a>";
}
$a = $s + ($limit) ;
if ($a > $numrows) { $a = $numrows ; }
$b = $s + 1 ;
echo "<p>Showing results $b to $a of $numrows</p>";

?>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
               <td colspan="5" bgcolor="#E3B71A">&nbsp;</td>
             </tr>
             <tr>
               <td width="19%" rowspan="4" align="center" valign="top"><strong><img src="Documents/<?php echo $Photo;?>" alt="" width="150" height="171" border="5" /></strong></td>
               <td width="8%" height="38"><span class="style3"><strong>Name:</strong></span></td>
               <td width="23%"><span class="style4"><strong><?php echo $Name;?></strong></span></td>
               <td width="14%"><span class="style3"><strong>Contact Person:</strong></span></td>
               <td width="36%"><span class="style4"><strong><?php echo $Contact_Person;?></strong></span></td>
             </tr>
             <tr>
               <td height="41"><span class="style3"><strong>Gender:</strong></span></td>
               <td><span class="style4"><strong><?php echo $Gender;?></strong></span></td>
               <td><span class="style3"><strong>Contact Address:</strong></span></td>
               <td><span class="style4"><strong><?php echo $Contact_Address;?></strong></span></td>
             </tr>
             <tr>
               <td height="40"><span class="style3"><strong>Height:</strong></span></td>
               <td><span class="style4"><strong><?php echo $Height;?></strong></span></td>
               <td><span class="style3"><strong>City:</strong></span></td>
               <td><span class="style4"><strong><?php echo $Contact_City;?></strong></span></td>
             </tr>
             <tr>
               <td height="52"><span class="style3"><strong>Weight:</strong></span></td>
               <td><span class="style4"><strong><?php echo $Weight;?></strong></span></td>
               <td><span class="style3"><strong>Contact Mobile:</strong></span></td>
               <td><span class="style4"><strong><?php echo $Contact_Mobile;?></strong></span></td>
             </tr>
             
             <tr>
               <td colspan="5" bgcolor="#E3B71A"></td>
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
				    <?php
   include "Footer2.php";
   ?>
    <div id="shadow"></div>
</body>
</html>