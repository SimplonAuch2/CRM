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
<html lang="fr">
	<head>
		<title>client manager</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="crm.css">
	</head>

	<body>
		<?php
		require 'navDirecteur.php';
				// connection to the database
		require 'connect.php';

		require("function.php"); 

		displayClientManager($db);
		?>
	</body>
</html>