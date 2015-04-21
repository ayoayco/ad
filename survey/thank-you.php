<?php


include "dbconnection.php";

if(isset($_GET['class'])){
  $class = $_GET['class'];
}
else $class = "undefined";


$logo = $_POST['logo-field'];
$why = $_POST['why-field'];
 
//echo "Class: ".$_GET['class']."<br />";
//echo "Logo choice: ".$logo."<br />Why: ".$why."<br />";

//insert new data from respondent into the database
$sql = "INSERT INTO logochoice (class, logofield, whyfield) VALUES ('".$class."', '".$logo."', '".$why."')";

//execute query or die
mysql_query($sql,$con) or die('Query 1 Error: ' . mysql_error());

//
$sql2 = "SELECT * FROM logochoice WHERE id = LAST_INSERT_ID()";

//execute query or die
$result = mysql_query($sql2,$con) or die('Query 2 Error: ' . mysql_error());
$rows = mysql_fetch_array($result);

//echo "This is your ID Number: ".$rows['id'];

header("Location: join-us.php?id=".$rows['id']);


?>