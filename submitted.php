<!DOCTYPE html>
<html>

<head>
  <title>Newsletter</title>
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body class="grid-container">
<!-- Site navigation menu -->
<nav>
<div class= "logo center-text">
	<h1><a href ="index.html">Petite Treats</a></h1>
</div>

<ul>
	<li><a href ="about.html">About Us</a></li>
	<li><a href ="menu.html">Menu</a></li>
	<li><a href ="specials.html">Specials</a></li>
	<li><a href ="newsletter.html">Newsletter</a></li>
</ul>
</nav>
<!-- ===================== -->

<div class="index-content">
	<div class="banner newsletter-bg" title="https://www.thesignaturepatisserie.com/images/style/style1.jpg">
		<div class="single-title white center-text">
			<h2>NEWSLETTER SIGNUP</h2>
		</div>
	</div>
	
	<div class="content flex">
		<div class="center-text vert-center">
			<h2> Thank you for signing up for the Petite Treats Weekly newsletter</h2>
			<h3>We have added the following information to our files regarding your interests:</h3>
			<br>
			<p>Name: <?php echo trim($_POST["name"]); ?></p> <br>
			<p>Email: <?php echo trim($_POST["email"]); ?></p> <br>
			<p>Product interests: <?php
			$output = array();
			foreach($_POST["interests"] as $interest){
				array_push($output,$interest);
			} 
			echo implode(', ', $output);
			?></p> <br>
			<p>Birthday: <?php echo date("d", strtotime($_POST["birthday"])) . " " . date("M", strtotime($_POST["birthday"])); ?>
			</p> <br>
					
		</div>
		<div>
			<img src="images/newsletter_image.png" alt="https://www.vecteezy.com/vector-art/168727-french-bakery-brioche-hand-drawn-vector-illustration">
		</div>
	</div>
</div>

<footer class="center-text">
	<div class="vert-center">
	<a href="index.html"><h1 class="red">Petite Treats</h1></a>
	<p>&copy Darrell Ng. <a href= "plan.html" target=_blank>Click here for site plan</a></p>
	</div>
	<div>
		<h2 class="white">Links</h2>
		<p><a href ="about.html">About Us</a></p>
		<p><a href ="menu.html">Menu</a></p>
		<p><a href ="specials.html">Specials</a></p>
		<p><a href ="newsletter.html">Newsletter</a></p>
	</div>
	<div>
		<h2 class="white">Contact Us</h2>
		<p>Phone: 0455 5555 555</p>
		<p>Catering: 0433 3333 333</p>
		
	</div>
	<div>
		<h2 class="white">Address</h2>
		<p>123 Prize Lane<br>
		Kirkwan, QLD</p>
	</div>
</footer>

</body>
</html>