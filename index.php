<!DOCTYPE html>
<html lang="fr">
<head>
	<title>index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="Feuilles de style/style_index.css">
</head>
<body>

	<div class="page">

		<div id="divConnexion">

			<form method="POST" id="formConnexion">

				<div>
					<h3>Connexion</h3>
				</div>

				<div id="inputUser">
					<input id="userName" type="text" name="userName" placeholder="Login...">
				</div>

				<div id="inputPassword">
					<input id="userPassword" type="password" name="userPassword" placeholder="Password...">
				</div>

				<div id="inputSubmit">
					<input id="userSubmit" type="submit" name="userSubmit" value="Se connecter">
				</div>

			</form>

			<?php 
			require("authentification.php");
			?>

		</div>

	</div>

</body>
</html>