<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>King Star</title>
	<!--This section is reserved fo style sheets-->
	<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div>
		<?php include("nav_bar.php");?>
	</div>
	
	<div class="mx-5 text-light sologan">
		<p>we Make Quality Products</p>
	</div>


	<!--This is The slider-->
	<div>
		<?php include("slider.php");?>
	</div>

	<!--This is The Page Heading-->
	<div class="text-center my-4">
		<h1>Showcasing Our Products</h1>
	</div>


	<!--This is The slider-->
	<div class="container">
		<?php include("home_cards.php");?>
	</div>

	<div class="footer bg-light text-center mt-5">
		<h2 class="p-o m-0">This site is Developed by Talha Tahir</h2>
		<p>copy right issue @ 2020</p>
	</div>

	<script src="jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>