<?php
	if($_SESSION['userStatus'] == null){
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>form_client</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="page">
			<div class="formCustomer">
				<form method="POST">
					<h2 class="titreForm">Formulaire d'ajout d'un client</h2>

					<div class="addCustomer">
						<label for="customer_name">Nom</label><br>
						<input id="customer_name" type="text" name="customer_name"><br>
					</div>

					<div class="addCustomer">
						<label for="customer_firstname">Prénom</label><br>
						<input id="customer_firstname" type="text" name="customer_firstname"><br>
					</div>
					
					<div class="addCustomer">
						<label for="customer_birthday">Date de naissance</label><br>
						<input id="customer_birthday" type="date" name="customer_birthday"><br>
					</div>
					
					<div class="addCustomer">
						<label for="customer_country">Pays</label><br>
						<input id="customer_country" type="text" name="customer_country"><br>
					</div>
					
					<div class="addCustomer">
						<label for="customer_city">Ville</label><br>
						<input id="customer_city" type="text" name="customer_city"><br>
					</div>			
					
					<div class="addCustomer">
						<label for="customer_adress">Adresse</label><br>
						<input id="customer_adress" type="text" name="customer_adress"><br>
					</div>
					
					<div class="addCustomer">
						<label for="customer_zipCode">Code postal</label><br>
						<input id="customer_zipCode" type="text" name="customer_zipCode"><br>
					</div>
					
					<div class="addCustomer">
						<label for="customer_registrationDate">Date d'inscription</label><br>
						<input id="customer_registrationDate" type="date" name="customer_registrationDate"><br>
					</div>
					
					<div class="addCustomer">
						<label for="customer_gender">Genre</label><br>
						<input id="customer_gender" type="text" name="customer_gender"><br>
					</div>			
					
					<div class="addCustomer">
						<label for="customer_phoneNumber">Téléphone</label><br>
						<input id="customer_phoneNumber" type="number" name="customer_phoneNumber"><br>
					</div>			
					
					<div class="addCustomer">
						<label for="customer_email">Email</label><br>
						<input id="customer_email" type="text" name="customer_email"><br>	
					</div>

					<div>
						<button type="submit" id="validateCustomer">Envoyer</button>
					</div>
				</form>

			</div>
			
		</div>
						





	</body>
</html>