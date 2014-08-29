<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Results...</title>
</head>
<body>
<?php
include "Header2.php"
?>
 <form name="form" action="SearchWanted.php" method="get" align="right">
Search by Name, Location or Crime<input type="text" name="q" placeholder="Search Wanted" />
<input type="submit" name="Submit" value="Search" />

</form> 
 You are here:<a href="home.php">Home</a> >><a href="Wanted.php">Wanted Persons</a>>><a href="searchwanted.php"> Search Wanted Persons</a> 
<?php  // Get the search variable from URL
if (!isset($_GET['q'])) 
die("Search Query not found");
$var = $_GET['q'];
$trimmed = trim($var); //trim whitespace from the stored variable

// rows to return
$limit=10;

// check for an empty string and display a message.
if ($trimmed == ""){
echo "<p>Search by Names or Contact Person…</p>";
exit;
}

// check for a search parameter
if (!isset($var)){
echo "<p>We dont seem to have a search parameter!</p>";
exit;
}

//connect to your database ** EDIT REQUIRED HERE **
$con=mysql_connect("localhost","root");

//specify database ** EDIT REQUIRED HERE **
mysql_select_db("cms",$con) or die("Unable to select database");
// Build SQL Query
$query = "select * from mostwanted_tbl where Wanted_Name like \"%$trimmed%\" or Wanted_Location like \"%$trimmed%\" or Wanted_Crime like \"%$trimmed%\" order by Wanted_Crime DESC";



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
$Id=$row['Wanted_Id'];
$Name=$row['Wanted_Name'];
$Loc=$row['Wanted_Location'];
$Crime=$row['Wanted_Crime'];
$Desc=$row['Wanted_Desc'];
$Photo=$row['Wanted_Image'];

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
//echo "<p>Showing results $b to $a of $numrows</p>";

?>
<table width="100%" border="0" cellspacing="1" cellpadding="1" >
                 
               <td width="16%" rowspan="3"><strong><img src="Documents/<?php echo $Photo;?>" alt="" width="125" height="150" /></strong></td>
               <td height="21" bgcolor="#FFFFFF"><span class="style3"><strong>Name:</strong></span><span class="style3"><strong><?php echo $Name;?></strong></span></td>
               <td width="46%" bgcolor="#FFFFFF"><span class="style3"><strong>Location:</strong></span><span class="style3"><strong><?php echo $Loc;?></strong></span></td>
             </tr>
             <tr>
               <td width="38%" height="21" bgcolor="#FFFFFF"><span class="style3">Crime Done </span></td>
               <td bgcolor="#FFFFFF"><span class="style3">Description </span></td>
             </tr>
             <tr>
               <td><strong><?php echo $Crime;?></strong></td>
               <td><strong><?php echo $Desc;?></strong></td>
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