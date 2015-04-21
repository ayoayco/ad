<!DOCTYPE html>

<?php
if (!isset($_GET['id'])) header("Location: /");
?>

<html>
<head>
<meta charset="utf-8">
<title>Logo Survey | The Absorbing Brand</title>
<!-- CSS Code -->
<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Gafata' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rouge+Script' rel='stylesheet' type='text/css'/>
</head>
<body>
	<h1>Thank you!</h1>
	<p>Would you like to subscribe to our monthly news letters for free? :)</p>
	<form method="post" action="join-mailinglist.php<?php if(isset($_GET['id'])) echo '?id='.$_GET['id']?>">

		<label for="email">Email: </label><input name="email" id="email" type="text" /><br />
		<input type="submit" value="Submit!" />
	</form>
</body>
</html>