<?php
session_start();
	//If not director redirect to client_seller.php
if($_SESSION['userStatus'] != true){
	header('Location: client_seller.php');
}
if($_SESSION['userStatus'] == null){
	header('Location: index.php');
}

?>

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

			<a href="#">Clients<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				<li><a href="#">Liste des clients</a></li>
			</ul>
		</li>




		<li>
			<a href="#">Produits <div class="triangle-down"></div></a>
			<ul class="sousMenu">
				<li><a name="productList" href="#">Liste des Produits</a></li>

				<?php require 'init.php';
					if(isset($_POST['productList']))
					{
						getProduct(); 
					}
		?>
		
			</ul>
		</li>

		<li>
			<a href="#">Commandes / Devis<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				
				
				<li><a href="#">Liste des commandes</a></li>
				<li><a href="#">Liste des devis</a></li>
			</ul>
		</li>

		<li>
			<a href="#">Agenda<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				<li><a href="#">Agenda commerciaux</a></li>
				<li><a href="#">Agenda Directeur</a></li>
			</ul>
		</li>			



		<li>
			<a href="#">Déconnexion</a>
			<ul class="sousMenu">
			</ul>
		</li>


	</ul>
	</form>
</body>
</html>
