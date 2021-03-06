<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Logo Survey | The Absorbing Brand</title>
<!-- CSS Code -->
<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Gafata' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rouge+Script' rel='stylesheet' type='text/css'/>
<!-- JS Code -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script>
			$(document).ready(function(){
			    $('section[data-type="parallax_section"]').each(function(){
			        var $bgobj = $(this); // Variable para asignacion de objeto
			        $(window).scroll(function() {
			        	$window = $(window);
			            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			            // cordinadas del background
			            var coords = '50% '+ yPos + 'px';
			            // moviendo el background
			            $bgobj.css({ backgroundPosition: coords });
			        });
			    });
			});

			
</script>

</head>
<body>
	<section id="home" data-type="parallax_section" data-speed="10">
		<article>
		<div id="header" class="spacesuit"><h1>Hello!</h1><h2>Nice to meet you!</h2></div>
		<p><span class="first-letter">W</span>e are a meticulous team of artists with a growing passion for spreading good, compelling designs 
across the World Wide Web and into the real world. This year, we are heading out  for 
an adventure to find the kind of brands that will give small businesses, 
personalities, and organizations the advantage to 
dominate their market.</p>
		</article>
	</section>
	
	<section id="seccion2" data-type="parallax_section" data-speed="10">
		<article>
			<h2>That said, we would like to ask for your help. </h2>
		</article>
	</section>
	
	<section id="section3" data-type="parallax_section" data-speed="10">
		<article>
			<div id="logo-1" class="float-left">
					<img alt="logo1" src="images/logo1.png" /><br />
					<img alt="logo2" src="images/logo2.png" /><br />
					<img alt="logo3" src="images/logo3.png" /><br />
			</div>
			<div id="logo-form" class="float-left">
				<form method="post" action="thank-you.php?<?php if(isset($_GET['class'])) echo 'class='.$_GET['class']?>">
					<label>Which of the following logos do you think is the most effective one and why?</label><br />
					<select name="logo-field" id="logo-field">
						<option>Choose One</option>
						<option>Logo #1</option>
						<option>Logo #2</option>
						<option>Logo #3</option>
					</select>
					<br />
					<input type="text" name="why-field" id="why-field" /><br />
					<input type="submit" value="Submit" />
				</form>
			</div>
		</article>
	</section>
</body>
</html>