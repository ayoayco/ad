<?php

include "dbconnection.php";

$id = $_GET['id'];
$email = $_POST['email'];


$sql = "UPDATE logochoice SET email = '".$email."' WHERE id = '".$id."'";

//execute query or die
if(!mysql_query($sql,$con))
	die('Query 1 Error: ' . mysql_error());
else
	header ("Location: youre-awesome.php");



?>