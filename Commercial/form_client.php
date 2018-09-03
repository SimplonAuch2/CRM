<?php
	if($_SESSION['userStatus'] == null){
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Formulaire ajout de client</title>
	<link rel="stylesheet" type="text/css" href="../Feuilles de style/style.css">
</head>

<body>
		<?php require("NavCommercial.php"); ?>
	<div class="page">
		<div class="formCustomer">
			<form method="POST">
				<h2 class="titreForm">Formulaire d'ajout d'un client</h2>

				<div class="addCustomer">
					<label for="customerLastName">Nom</label>
					<input id="customerLastName" type="text" name="customerLastName">
				</div>

				<div class="addCustomer">
					<label for="customerFirstName">Prénom</label>
					<input id="customerFirstName" type="text" name="customerFirstName">
				</div>

				<div class="addCustomer">
					<label for="customerBirthday">Date de naissance</label>
					<input id="customerBirthday" type="date" name="customerBirthday">
				</div>

				<div class="addCustomer">
					<label for="customerCountry">Pays</label>
					<input id="customerCountry" type="text" name="customerCountry">
				</div>

				<div class="addCustomer">
					<label for="customerCity">Ville</label>
					<input id="customerCity" type="text" name="customerCity">
				</div>

				<div class="addCustomer">
					<label for="customerAdress">Adresse</label>
					<input id="customerAdress" type="text" name="customerAdress">
				</div>

				<div class="addCustomer">
					<label for="customerZipCode">Code postal</label>
					<input id="customerZipCode" type="text" name="customerZipCode">
				</div>

				<div class="addCustomer">
					<label for="customerGender">Genre</label>
					<input id="customerGender" type="text" name="customerGender">
				</div>

				<div class="addCustomer">
					<label for="customerPhoneNumber">Téléphone</label>
					<input id="customerPhoneNumber" type="number" name="customerPhoneNumber">
				</div>

				<div class="addCustomer">
					<label for="customerEmail">Email</label>
					<input id="customerEmail" type="text" name="customerEmail">
				</div>

				<div>
					<button type="submit" name="validateCustomer">Envoyer</button>
				</div>
			</form>

		</div>

	</div>
</body>

</html>