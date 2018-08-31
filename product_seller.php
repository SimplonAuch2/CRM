<!DOCTYPE html>
<html lang="fr">
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

						$bdd = new PDO('mysql:host=localhost;dbname=crmV2;charset=utf8', 'loups', 'Qwant00;');
					}
					catch(Exception $e)
					{
						die('Erreur : '.$e->getMessage());
					}

					// on récupère et on affiche le contenu de la base de données

					$req = $bdd->query('SELECT * FROM product');
					while ($donnees = $req->fetch())
						{ echo
							'<tr><td>' . $donnees['productId'] . '</td>' .
							'<td>' . $donnees['productName'] . '</td>' .
							'<td>' . $donnees['productPrice'] . '</td>' .
							'<td>' . $donnees['productStock'] . '</td>' .
							'<td>' . $donnees['productPlace'] . '</td>' .
							'<td>' . $donnees['productDescription'] . '</td>' .
							'<td>' . $donnees['productSize'] . '</td>' .
							'<td>' . $donnees['productWeight'] . '</td>' .
							'<td>' . $donnees['productReference'] . '</td>' .
							'<td>' . $donnees['productState'] . '</td></tr>';

						}
					?>

				</table>

				<button id="buttonOK" class="button" type="button">OK</button>

			</div>
	</body>
</html>