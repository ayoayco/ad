<?php

if(isset($_GET['type'])){
  $type = $_GET['type'];
}else{
  $type = 'otders';
}
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html id="id" class="no-js" lang="en"><!--<![endif]-->
    <head>
		<title>Survey</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body id="id">
		<div id="section1">
			<h1>Hello! Nice to meet you!</h1>
			<p>We are a meticulous team of artists with a growing passion for spreading good, compelling designs across the World Wide Web and into the real world. This year, we are heading out for an adventure to find the kind of brands that would give small businesses, personalities, and organizations the advantage to dominate their market.</p>
			<p>That said, we would like to ask for your help. Which of the following logo do you think is the most effective one and why?</p>
		</div>
		<div id="section2">
			<table>
			<tr>
			<td><img alt="Logo #1" src="../images/Logos/Logo_1.jpg"></td>
			<td><img alt="Logo #2" src="../images/Logos/Logo_2.jpg"></td>
			<td><img alt="Logo #3" src="../images/Logos/Logo_3.jpg"></td>
			</tr>
			<tr>
			<td>Logo #1</td>
			<td>Logo #2</td>
			<td>Logo #3</td>
			</tr>
			</table>
			<p><select name="logo">
				<option>Choose one: </option>
				<option>Logo #1</option>
				<option>Logo #2</option>
				<option>Logo #3</option>
			</select><br /><br />
			<input type="text" value="Why?" /> <input type="submit" value="Submit" />
			</p>
		</div>
		<div id="section3">
			<h1>Thank you so much! :)</h1>
		</div>
		<div id="section4">
			<h1>Oh, just one more thing!</h1>
			<p>Would you like to subscribe to our monthly news letters for FREE?! :)</p>
			<p><input type="text" value="Email..." />&nbsp;<input type="submit" value="Subscribe" /></p>
			<p>We promise it will be fun. :)</p>
		</div>
	</body>
</html>