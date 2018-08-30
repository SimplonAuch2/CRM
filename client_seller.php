<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>client_seller</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php try  
			{
				$bdd = new PDO('mysql:host=localhost;dbname=CMR;charset=utf8', 'admin', 'azertyuio');
			}
			// en cas d'erreur on affiche un message :
			catch (Exception $e)
			{
			    die('Erreur : ' . $e->getMessage());
			} 
			echo
				$reponses = $bdd->query('SELECT * FROM customers');
				
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
			while($donnees=$reponses->fetch())
			{
				echo
					"
						<tr>
							<td>" . $donnees['customer_name'] . "</td>
							<td>" . $donnees['customer_firstname'] . "</td>
							<td>" . $donnees['customer_birthday'] . "</td>
							<td>" . $donnees['customer_city'] . "</td>
							<td>" . $donnees['customer_adress'] . "</td>
							<td>" . $donnees['customer_zipCode'] . "</td>
							<td>" . $donnees['customer_registrationDate'] . "</td>
							<td>" . $donnees['customer_gender'] . "</td>
							<td>" . $donnees['customer_phoneNumber'] . "</td>
							<td>" . $donnees['customer_email'] . "</td>
							<td>" . $donnees['customer_country'] . "</td>
						</tr>";
			}

			echo '</table>';	
		?>
	</body>
</html>