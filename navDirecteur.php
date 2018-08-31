<!DOCTYPE html>
<html>
<head>
	<title>NavBar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>


<body>


<!-- search Bar -->

<p>Entrez votre recherche </p>

<form>
  <input type="text" name="search" placeholder="Search..">
</form>

<!-- Dropdown -->

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
				<li><a href="#">Liste des Produits</a></li>
			</ul>
		</li>

		<li>
			<a href="#">Commandes<div class="triangle-down"></div></a>
			<ul class="sousMenu">
				
				
				<li><a href="#">Liste des commandes</a></li>
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
</body>
</html>
