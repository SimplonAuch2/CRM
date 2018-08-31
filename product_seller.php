<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>product_seller</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="contentPurchaseSeller">
			<div id="purchase">
				<table class="tablePurchase">

					<thead>

						<th>Client</th>
						<th>Produits</th>
						<th>Quantités</th>
						<th>Prix</th>
						<th>Réductions</th>
						<th>Frais de port</th>
						<th>Prix total</th>
						<th>TVA</th>
						<th>Adresse de livraison</th>
						<th>Adresse de facturation</th>
						<th>Date</th>

					</thead>

					<?php

					// CONNEXION TO THE DATABASE
					// CONNEXION WITH THE FILE connect.php
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=crmV2;charset=utf8', 'user_bdd', 'password_bdd');
					}
					catch(Exception $e)
					{
						die('Erreur : '.$e->getMessage());
					}

					// on récupère et on affiche le contenu de la base de données
					$req = $bdd->query('SELECT * FROM purchase');
					while ($donnees = $req->fetch())
						{ echo
							'<tr><td>' . $donnees['customerId'] . '</td>' .
							'<td>' . $donnees['purchaseProducts'] . '</td>' .
							'<td>' . $donnees['purchaseQuantity'] . '</td>' .
							'<td>' . $donnees['purchasePrice'] . '</td>' .
							'<td>' . $donnees['purchaseReduction'] . '</td>' .
							'<td>' . $donnees['purchasePostalCharges'] . '</td>' .
							'<td>' . $donnees['purchaseTotalprice'] . '</td>' .
							'<td>' . $donnees['purchaseTaxes'] . '</td>' .
							'<td>' . $donnees['purchaseDeliveryAddress'] . '</td>' .
							'<td>' . $donnees['purchaseBillingAddress'] . '</td>' .
							'<td>' . $donnees['purchaseDate'] . '</td></tr>';
						}
					?>

				</table>

				<button id="buttonOK" class="button" type="button">OK</button>

			</div>
	</body>
</html>