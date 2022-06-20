<!DOCTYPE HTML>
<html>

<head>
	<title>Gestion de bibliotheque</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/me.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<style>
		.image img {
			box-shadow: 1px 10px 10px black;
		}
	</style>
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
						<h1>projet de gestion de Personnels</h1>
					</header>
					<span class="image main"><img src="images/gp.png" alt="image contient un systeme de gestion de personnels" /></span>
					<p>

					</p>
				</div>
			</section>
			<!-- gestion de projet travailler avec flex -->
			<section class="gpp">
				<div>
					<h3><u> gestion de projet</u></h3>
				</div>
				<div>
					<p>
					<ul>
						<h4> cette application fournit une console qui permet à l'utilisateur de :</h4>
						<li> accéder à l'application.</li>
						<li> ajouter un personnel.</li>
						<li>supprimer un personnel.</li>
						<li>modifier un personnel.</li>
						<li>rechercher un personnel par nom/cin/...</li>
						<li>afficher la liste des personnels.</li>
						<li>consulter les membres d'une profession.</li>

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
					<ul>
						<h4> Ce projet contient plusieurs fonctions, chaque fonction a son rôle principale :</h4>
						<ul>
							<h5>----login()</h5>
							<li> <b> but :</b> Cette fonction permet d'accéder à l'application à l'aide d'un code. </li>
							<li> <b>idée :</b> Cette fonction demande à l'utilisateur d'entrer le code qui permet d'accéder à l'application(3 chances ,l'utilisateur a le droit d'échouer seulement 3 fois) ,si le code est incorrect, 
							l'application donne une autre occasion .sinon il a le droit d'y accéder ..</li>
						</ul>
						<hr>
						<ul>
							<h5>---- ajoutemp()</h5>
							<li> <b> but :</b> Cette fonction permet d'ajouter un nouveau employée. </li>
							<li> <b>idée :</b> La première étape est de placer la curseur à la fin du fichier puis demander à l'utilisateur de saisir les données du personnel (nom,prénom,....),la contrainte qu'on peut rencontrer c'est qu'on sait qu'une établissement a un seul directeur, donc il faut lire la profession au clavier, vérifier si il s'agit de 'directeur', si oui , créer un nouveau variable de type emp, retourner au
							début du fichier et commencer à lire les enregistrements, si la profession est semblable à celle dans l'enregistrement, l'application va afficher le message directeur existe déjà' , puis le traitement va s'arrêter. Sinon, si l'utilisateur saisie une autre profession, elle sera stockée au fichier sans problèmes.</li>
						</ul>
						<hr>
						<ul>
							<h5>----  Afficheemp() :</h5>
							<li> <b> but :</b> Afficher les données des personnels qui sont déjà enregistrés dans le fichier(dat.bin). </li>
							<li> <b>idée :</b>l'application vérifie d'abord si le fichier est non vide, dans ce cas là il affiche les enregistrements existantes.</li>
						</ul>
						<hr>
						<ul>
							<h5>----   modifieremp() :</h5>
							<li> <b> but :</b>  Cette fonction permet à l'administrateur de modifier les différents propriétés des employés déjà enregistrés (par choisir un numéro des champs numérotés de 1 à 8 qu'il veut le modifier). </li>
							<li> <b>idée :</b>Premièrement, il faut supprimer tous ce qui est écrit dans la console avant en utilisant 
							system("cls") pour mieux de visibilité ,après le programme demande à l'administrateur d'entrer CIN d'employé à
							 modifier ,et pour cela, le curseur doit déplacer au début de fichier pour chercher les informations de cet 
							 employé par la comparaison de CIN entré et les CINS existants dans le fichier .Après la comparaison , si le 
							 programme trouve que le CIN entrée existe, alors il donne la possibilité à l'administrateur de choisir un champ
							  parmi les champs numérotés du 1 à 8(pour le cas du dernier champ qui permet de modifier la profession, si 
							  l'administrateur modifie la profession d'un employé à directeur',le programme cherche s'il existe déjà un directeur
							   avant l'affectation de la nouvelle profession, au cas où il existe déjà un directeur ,l'application affiche un
							    message qu'il existe déjà un directeur et ne modifie rien ).Sinon, l'application affiche le message : 
									" n'existe pas". Et en fin, l'application donne la possibilité à l'administrateur soit de faire des 
									autres modifications sur les employés soit de sortir de cette zone de modification.</li>
						</ul>
						<hr>
						<ul>
							<h5>---- Supprimeremp() :</h5>
							<li> <b> but :</b> Supprimer l'employé recherché. </li>
							<li> <b>idée :</b>On commence par system("cls")qui sert à effacer tout ce qu'il y a à l'écran, puis on demande à l'utilisateur d'entrer le CIN de personnel recherché. Après on vérifie si ce CIN existe en Comparant successivement les CIN du fichier avec le CIN donnée. Le nouveau fichier est créé en copiant tous les enregistrements de l'ancien fichier qui précèdent
l'enregistrement à supprimer et tous ceux qui le suivent et en fin on Renommer le fichier temporaire au nom de fichier d'origine.</li>
						</ul>
						<hr>
						<ul>
							<h5>----  Consult_profession() :</h5>
							<li> <b> but :</b>Le but de cette fonction est de savoir tous les informations des personnels qui ont la même profession. </li>
							<li> <b>idée :</b>L'utilisateur entre la profession au clavier, le curseur se déplace au début, lire les éléments du fichier .si la profession saisis par l'utilisateur est semblable à celle qui existe dans l'élément ,il va l'afficher .Sinon il va lire le deuxième élément, et passer par les mêmes étapes précédentes. Un suit de suite jusqu'à l'arrivée à la fin du fichier.</li>
						</ul>
						<hr>
						<ul>
							<h5>----checheremp() :</h5>
							<li> <b> but :</b>Le but de cette fonction est de chercher les personnels selon le nom. </li>
							<li> <b>idée :</b>L'utilisateur saisis le nom du personnel qu'il veut chercher, ils sera stockés sur i variable de type char, le curseur de déplace au début du fichier, commencer à lire les éléments un par un, si le nom saisis par l'utilisateur est semblable à celle de l'élément, premièrement, il va donner au variable a la valeur 1, puis afficher les données correspondantes. Sinon il va afficher le message ‘n'existe pas'.
Remarque : le rôle du variable (a) est d'éviter la répétition du message ‘n’existe pas”.</li>
						</ul>
					

					</ul>
					</p>
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