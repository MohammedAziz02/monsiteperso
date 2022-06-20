<!DOCTYPE HTML>
<html>

<head>
	<title>Gestion de bibliotheque</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/me.css" />
	<!-- <link rel="stylesheet" href="bootstrap/css//bootstrap.min.css"> -->
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<?php
		include_once("htmlpages/header.html");
		?>

		<!-- Main -->
		<div id="main" class="alt">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h1>projet de gestion de bibliotheque</h1>
					</header>
					<span class="image main"><img src="images/gb.png" alt="" /></span>
					<p>C’est une application web de la gestion de bibliothèque.
						Codé purement avec les langages html,css,PHP et javascript. Elle a des fonctionnalités simple à manipuler
						(ajouter, supprimer, rechercher) des livres. Aussi une interface classique et très facile à s’habituer avec.</p>
				</div>
			</section>
			<!-- gestion de projet travailler avec flex -->
			<section class="try">
				<div>
					<h3><u> gestion de projet</u></h3>
				</div>
				<div>
					<p>
					<ul> <h4> Cette web-application fournit à l’utilisateur les propriétés suivantes :</h4>
						<li> Créer un compte pour un étudiant.</li>
						<li> Créer un compte pour un administrateur.</li>
						<li>Si t’as déjà un compte l’application vous fournit la page de la connexion(Login).</li>
						<li>Après la connexion l’application vous redirige soit vers
							la page de l’étudiant (si vous saisissez les cordonnées d’un étudiant) qui peut
							juste chercher les livres, soit vers la page de l’administrateur (si vous saisissez les
							cordonnées d’un administrateur) qui peut chercher, ajouter, supprimer un livre.</li>
					</ul>
					</p>
				</div>
			</section>
			<!-- guide de programmeur -->
			<section class="try">
				<div>
					<h3><u> guide de programmeur</u></h3>
				</div>
				<div>
					<p>
					<ul> <h4> Ce projet contient plusieurs fichiers, chaque fichier a son rôle principale :</h4>
						<li> <b> accueil.php :</b> Contient le code de la page d’accueil que du (HTML5+CSS3), son but est d’afficher une
							interface qui contient l’ensemble des fonctionnalités essentiels + quelques phrases qui décrivent
							la bibliothèque en général. Cette page était réalisée par le principe de Flexbox (division de différents blocs de la page). </li>
						<li> <b>styleaccueil.css :</b> contient seulement les codes de style de la page d’accueil.. </li>
						<li> <b>myparam.inc.php :</b> contient les différentes paramètres qui nous permet de faire la connexion à la base de données.il sont déclarés comme des constantes pour
							raisons de sécurité et aussi pour éviter de réécrire les mêmes données à chaque fois. </li>
						<li> <b>inscriptionadmin.php :</b>contient une formulaire dont l’administrateur doit obligatoirement saisir ses cordonnées (nom,prenom,login,mot de passe, confirmation de mot de passe) si un champ est vide l’utilisateur ne peut pas envoyer la formulaire. (Vérification par javascript). </li>
						<li> <b>inscriptionetudiant.php :</b>contient une formulaire dont l’étudiant doit obligatoirement saisir ses cordonnées (nom,prenom,login,mot de passe, confirmation de mot de passe) si un champ est vide l’utilisateur ne peut pas envoyer la formulaire.(vérification par javascript). </li>
						<li> <b>login.php : </b>contient une simple formulaire qui a pour but redirigé l’utilisateur soit vers la page d’admin : si il a bien saisi les données qui sont déjà dans la base de données (tableau des admins) soit vers la page d’étudiant : si il a bien saisi les données qui sont déjà dans la base de données (tableau des étudiants). J’ai utilisé les sessions pour garder le compte de celui qui a fait la connexion.
							Le nom de session est ‘login’ est utilisé à la fin pour faire la distinction entre le login d’un étudiant ou d’un administrateur pour bien détecter le chemin où on va rediriger l’utilsateur. </li>
						<li> <b>styleinscription.css :</b>contient seulement les codes de style de la page inscription admin, inscription étudiant et login à la fois. </li>
						<li> <b>pageetudiant.php :</b>contient tous les livres existent dans la bibliothèque et l’étudiant n’a le droit que de chercher. </li>
						<li> <b>pageadmin.php :</b>contient tous les livres existent dans la bibliothèque et l’admin a le droit de chercher, ajouter ou de supprimer un livre. </li>
						<li> <b>footer.html : </b>contient le code html de la partie (footer) de chaque page, le but de ce fichier est d’éviter la répétition de cette code dans les fichiers existants. </li>
						<li> <b>script.js : </b>contient les fonctions permettant de vérifier les champs de tous les formulaires dans ce projet. On ne peut pas envoyer une formulaire sans la remplir entièrement. </li>

					</ul>
					</p>
				</div>
			</section>
			<section class="try kk">
				<h4> vous pouvez avoir le code complet via ce lien</h4>
				<a href="https://github.com/MohammedAziz02/projet_web_gestion_de_bibliotheque"> <button class="button-20" role="button">vers le projet</button> </a>

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