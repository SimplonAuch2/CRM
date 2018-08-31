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

						<th>ID</th>
						<th>Nom</th>
						<th>Prix</th>
						<th>Stock</th>
						<th>Lieu</th>
						<th>Description</th>
						<th>Taille</th>
						<th>Poids</th>
						<th>Référence</th>
						<th>État</th> <!-- WARNING -->

					</thead>

					<?php

					// CONNEXION TO THE DATABASE
					// CONNEXION WITH THE FILE connect.php
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=crm;charset=utf8', 'loups', 'Qwant00;');
					}
					catch(Exception $e)
					{
						die('Erreur : '.$e->getMessage());
					}

					// on récupère et on affiche le contenu de la base de données
					$req = $bdd->query('SELECT * FROM products');
					while ($donnees = $req->fetch())
						{ echo
							'<tr><td>' . $donnees['product_id'] . '</td>' .
							'<td>' . $donnees['product_name'] . '</td>' .
							'<td>' . $donnees['product_price'] . '</td>' .
							'<td>' . $donnees['product_stock'] . '</td>' .
							'<td>' . $donnees['product_place'] . '</td>' .
							'<td>' . $donnees['product_description'] . '</td>' .
							'<td>' . $donnees['product_size'] . '</td>' .
							'<td>' . $donnees['product_weight'] . '</td>' .
							'<td>' . $donnees['product_reference'] . '</td>' .
							'<td>' . $donnees['product_state'] . '</td></tr>';
						}
					?>

				</table>

				<button id="buttonOK" class="button" type="button">OK</button>

			</div>
	</body>
</html>