<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>client_seller</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<?php 
			// connection to the database
			try  
			{
				$bdd = new PDO('mysql:host=localhost;dbname=CRM;charset=utf8', 'admin', 'azertyuio');
			}
			// in case of error we display a message
			catch (Exception $e)
			{
			    die('Erreur : ' . $e->getMessage());
			}
			// $responses get all the informations contained in the table "customers"
			$responses = $bdd->query('SELECT * FROM customers');
			echo
				"<table id='displayCustomers'>
					<tr>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Date de naissance</th>
						<th>Ville</th>
						<th>Adresse</th>
						<th>Code postal</th>
						<th>Tél</th>
						<th>Date d'enregistrement</th>
						<th>Genre</th>
						<th>Email</th>
						<th>Pays</th>
					</tr>";
			// we display every rows from the table in the table, 1 by 1
			while($datas=$responses->fetch())
			{
				echo
					"
						<tr>
							<td>" . $datas['customer_name'] . "</td>
							<td>" . $datas['customer_firstname'] . "</td>
							<td>" . $datas['customer_birthday'] . "</td>
							<td>" . $datas['customer_city'] . "</td>
							<td>" . $datas['customer_adress'] . "</td>
							<td>" . $datas['customer_zipCode'] . "</td>
							<td>" . $datas['customer_phoneNumber'] . "</td>
							<td>" . $datas['customer_registrationDate'] . "</td>
							<td>" . $datas['customer_gender'] . "</td>
							<td>" . $datas['customer_email'] . "</td>
							<td>" . $datas['customer_country'] . "</td>
						</tr>";
			}

			echo '</table>';	
		?>
	</body>
</html>