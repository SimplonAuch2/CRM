<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Produit directeur</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="contentProductManager">
			<div id="productManager">
				<table class="tableProductManager">

					<thead>

						<th>ID</th>
						<th>Nom</th>
						<th>Prix</th>
						<th>Stock</th>
						<th>Emplacement</th>
						<th>Description</th>
						<th>Taille</th>
						<th>Poids</th>
						<th>Référence</th>
						<th>Status</th>

					</thead>

					<?php

					// CONNEXION TO THE DATABASE
					// CONNEXION WITH THE FILE connect.php
					try
					{

						$bdd = new PDO('mysql:host=localhost;dbname=crmV4;charset=utf8', 'loups', 'Qwant00;');
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
							'<td>' . $donnees['productStatus'] . '</td></tr>';

						}
					?>

				</table>

				<button id="buttonOK" class="button" type="button">OK</button>
			</div>
		</div>
	</body>
</html>