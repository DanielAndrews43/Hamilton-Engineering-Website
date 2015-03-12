<!DOCTYPE html>
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>Team 5510</title>

	<link rel='stylesheet' type='text/css' href='css/stylesheet.css'>

	<!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>

	<script src="js/jquery.bxslider.min.js"></script>
	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	<script>
	$(document).ready(function(){
		$('.banner').bxSlider({
			auto:true,
			pause:6000
		});
	});
	</script>

</head>

<body>
	<div id="page-wrap">
	<?php include('static/header.php'); ?>

	<section id="main-content">
	<div id="guts">

		<ul class="banner">
			<li><img src="png/1.jpg" /></li>
			<li><img src="png/2.jpg" /></li>
			<li><img src="png/3.jpg" /></li>
			<li><img src="png/4.jpg" /></li>
		</ul>
	
	</div>
	</section>

	<?php include('static/footer.php'); ?>
	</div>

</body>

</html>