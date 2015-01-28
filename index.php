<?php
	$page = "home";
	include_once 'inc/menu_function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Need a professional Webhost? Let us do I.T.">
	<title>
		Guru Web Framework - Demo Page
	</title>
	<link href="css/framework.css" rel="stylesheet" media="screen">
	<!--[if lt IE 9]>
		<script src="bootstrap/assets/js/html5shiv.js"></script>
		<script src="bootstrap/assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="content">
		<header>
			<nav>
				<div class="logo">
					<a href="http://www.guruweb.co.uk/framework">
						<img src="img/logo.png" alt="logo">
					</a>
				</div>
				<?php
					$menuArray = array("About", "Server Status", "Free Hosting", "Premium Hosting", "Design Services", "Contact");
					create_menu("menu",true,$menuArray);
				?>
			</nav>
		</header>
		<br /><br />
		<div class="row">
			<h1>Heading 1</h1>
			<h2>Heading 2</h2>
			<h3>Heading 3</h3>
			<h4>Heading 4</h4>
			<h5>Heading 5</h5>
			<h6>Heading 6</h6>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 1</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 2</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 3</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 4</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 5</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 6</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 7</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 8</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 9</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 10</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 11</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
			<div class="four columns">
				<img src="img/logo.png" alt="logo" class="item-pic center">
				<h4 class="lead">Box 12</h4>
				<p class="disc">Lorem ipsum text</p>
			</div>
		</div>
	</div>
	<footer>
		<h1>I'm a footer</h1>
		<br />
	</footer>
</body>