<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>My projects</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/me.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<!-- Note: The "styleN" class below should match that of the banner element. -->
		<?php
		include_once("htmlpages/header.html");
		?>

		<!-- Banner -->
		<!-- Note: The "styleN" class below should match that of the header element. -->
		<section id="banner" class="style2">
			<div class="inner">
				<span class="image">
					<img src="images/pic07.jpg" alt="" />
				</span>
				<header class="major">
					<h1>My projects</h1>
				</header>
				<div class="content">
					<p> you can find in this page all my projects with a simple description to each one, also a link to the code source in GITHUB.<br />
						enJOOOOOOOOOOOOOOOOOOOOOOOOOOOIIIIIIIIIIIIIIIOOOOOOOOOOOOOOOOOOOOY </p>
				</div>
			</div>
		</section>

		<!-- Main -->
		<div id="main">

			<!-- Two -->
			<section id="two" class="spotlights">
				<section>
					<a href="gestion_de_bibliotheque.php" class="image">
						<img src="images/img2.png" alt="" data-position="center center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3>gestion de bibliotheque</h3>
							</header>
							<p>c'est une application web de la gestion de la bibliotheque, codée purement avec les langages html,css,PHP et javascript. Elle a des
								fonctionnalités simple à manipuler (ajouter, supprimer,
								rechercher) des livres. Aussi une interface classique et très facile à s'habituer avec.
							</p>
							<ul class="actions">
								<li><a href="gestion_de_bibliotheque.php" class="button">Learn more</a></li>
							</ul>
						</div>
					</div>
				</section>
				<section>
					<a href="gestion_de_personnel.php" class="image">
						<img src="images/img1.png" alt="" data-position="top center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3>gestion de personnels</h3>
							</header>
							<p>c'est une application codée en langage C, son but est de gérer les personnels d'une école. ajouter, modifier et supprimer les personnels.</p>
							<ul class="actions">
								<li><a href="gestion_de_personnel.php" class="button">Learn more</a></li>
							</ul>
						</div>
					</div>
				</section>
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