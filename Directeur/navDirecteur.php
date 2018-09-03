

<!DOCTYPE html>
<html>
<head>
	<title>NavBar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="navbar.css"> 
	<link rel="stylesheet" type="text/css" href="style_client_manager.css">
</head>


<body>


	<!-- search Bar -->

	<form method="post">
		<input id="search" type="text" name="search" placeholder="Rechercher...">
	</form>

	<!-- Dropdown -->
<form method="post">
	<ul id="menuDeroulant">


		<li>

			<a>Clients<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				<li><a href="client_manager.php">Liste des clients</a></li>
			</ul>
		</li>




		<li>
			<a>Produits <div class="triangle-down"></div></a>
			<ul class="sousMenu">
				<li><a name="productList" href="product_manager.php">Liste des Produits</a></li>

			
		
		
			</ul>
		</li>

		<li>
			<a>Commandes / Devis<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				
				
				<li><a href="purchase_manager.php">Liste des commandes</a></li>
				<li><a href="purchase_manager.php">Liste des devis</a></li>
			</ul>
		</li>

		<li>
			<a href="#">Agenda<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				<li><a href="Calendar/">Agenda commerciaux</a></li>
				<li><a href="Calandar/">Agenda Directeur</a></li>
			</ul>
		</li>			



		<li>
			<a href="index.php">Déconnexion</a>
			<ul class="sousMenu">
			</ul>
		</li>


	</ul>
	</form>
</body>
</html>
