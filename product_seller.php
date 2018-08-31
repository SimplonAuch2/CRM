<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>product_seller</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="contentProductSeller">
			<div id="product">
				<table class="tableProduct">

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
						$bdd = new PDO('mysql:host=localhost;dbname=crm;charset=utf8', 'user_bdd', 'password_bdd');
					}
					catch(Exception $e)
					{
						die('Erreur : '.$e->getMessage());
					}

					// on récupère et on affiche le contenu de la base de données
					$req = $bdd->query('SELECT * FROM purchase');
					while ($donnees = $req->fetch())
						{ echo
							'<tr><td>' . $donnees['customer_id'] . '</td>' .
							'<td>' . $donnees['purchase_products'] . '</td>' .
							'<td>' . $donnees['purchase_quantity'] . '</td>' .
							'<td>' . $donnees['purchase_price'] . '</td>' .
							'<td>' . $donnees['purchase_reduction'] . '</td>' .
							'<td>' . $donnees['purchase_postal_charges'] . '</td>' .
							'<td>' . $donnees['purchase_totalprice'] . '</td>' .
							'<td>' . $donnees['purchase_taxes'] . '</td>' .
							'<td>' . $donnees['purchase_delivery_address'] . '</td>' .
							'<td>' . $donnees['purchase_billing_address'] . '</td>' .
							'<td>' . $donnees['purchase_date'] . '</td></tr>';
						}
					?>

				</table>

				<button id="buttonOK" class="button" type="button">OK</button>

			</div>
	</body>
</html>