<?php
if (isset($_POST["submit"])) {
	if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
		include_once("phpcodes/connexion.php");
		$rqst = $pdo->prepare("insert into send_message(nom,email,message) values(?,?,?)");
		$rqst->execute([$_POST["name"], $_POST["email"], $_POST["message"]]);
	}
}
?>