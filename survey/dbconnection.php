<?php

		$con = mysql_connect("sql211.0fees.net","fees0_14480068", "Ayoforfre3") or die("cannot connect");//create connection to the database
		if (!$con) die('Could not connect: ' . mysql_error());
			
		mysql_select_db("fees0_14480068_survey", $con) or die("cannot connect to DB T_T");//select database from user
?>
