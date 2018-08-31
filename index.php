<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>index</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php 
			require("authentification.php");
		?>

		<div class="page">

			<div id="divConnexion">

				<form method="POST" id="formConnexion">

					<div>
						<h3>CONNEXION</h3>
					</div>

					<div id="inputUser">
						<label for="userName">Utilisateur</label><br>
						<input type="text" name="userName"><br><br>
					</div>

					<div id="inputPassword">
						<label for="userassword">Mot de passe</label><br>
						<input type="password" name="userPassword"><br><br>
					</div>

					<div id="inputSubmit">
						<label for="userSubmit"></label><br>
						<input type="submit" name="userSubmit"><br><br>
					</div>

				</form>

			</div>

		</div>

	</body>
</html>