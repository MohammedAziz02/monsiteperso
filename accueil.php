<!DOCTYPE HTML>
<html>

<head>
	<title>Welcome to AZM page</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/me.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Fredoka:wght@300;400&family=Lobster&display=swap" rel="stylesheet">
	<script src="script/script.js"></script>
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<style>
		legend {
			font-size: x-large;
			font-weight: 1000;
		}
		/* hadi dyal dik hi my name is mohammed Aziz*/
		.major h1 {
			box-shadow: 5px 5px 100px;
			text-shadow: 5px 5px 10px rgba(0, 0, 51);
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			font-family: 'Lobster', cursive;
}
	</style>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<?php
		include_once("htmlpages/header.html");
		?>


		<!-- Banner -->
		<section id="banner" class="major">
			<div class="inner">
				<header class="major">
					<h1>Hi, my name is Mohammed AZIZ</h1>
				</header>
				<div class="content">
					<p>I'm a engenneir student at ENSAH.</p>
					<ul class="actions">
						<li><a href="projects.php" class="button next scrolly">Get Started</a></li>
					</ul>
				</div>
			</div>
		</section>

		<!-- Main -->
		<div id="main">
			<!-- Two -->
			<section id="two">
				<div class="inner" id="testi">
					<header class="major">
						<h2>ABOUT ME</h2>
					</header>
					<p>My name is Mohammed Aziz, i'm originally from berkane, actually I live in AL-hoceima.
						I'm a software engenneir student at ENSA Al-Hoceima first year.
						i wish you like my website.
					</p>
					<ul class="actions">
						<li><a href="projects.php" class="button next">Get Started</a></li>
					</ul>
				</div>
			</section>

		</div>

		<!-- Contact -->
		<?php
		include_once("htmlpages/contact.html");
		?>

		<!-- Footer -->
		<?php
		include_once("htmlpages/footer.html");
		?>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>


</body>

</html>
<?php
include_once("phpcodes/sendmessage.php");
?>