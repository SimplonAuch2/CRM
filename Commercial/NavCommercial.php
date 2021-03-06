<!DOCTYPE html>
<html>

<head>
	<title>NavBar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Feuilles de style/navbar.css">
	<link rel="stylesheet" type="text/css" href="../Feuilles de style/style_client_manager.css">
</head>


<body>
	<!-- search Bar -->
	<form method="post">
		<input type="text" id="search" name="search" placeholder="Rechercher...">
	</form>

	<!-- Dropdown -->
	<ul id="menuDeroulant">
		<li>
			<a href="#">Clients<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				<li><a href="form_client.php">Ajouter un Client</a></li>
				<li><a href="client_seller.php">Liste des clients</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Produits<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				<li><a href="product_seller.php">Liste des Produits</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Commandes<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				<li><a href="#">Ajouter une commande</a></li>
				<li><a href="purchase_seller.php">Voir les commandes</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Agenda</a>
			<ul class="sousMenu"></ul>
		</li>
		<li>
			<a href="../index.php" name="destroy">Déconnexion</a>
		</li>
	</ul>
</body>
</html>