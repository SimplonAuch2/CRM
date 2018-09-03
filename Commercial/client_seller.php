<?php
ini_set('display_errors', 1);
	session_start();
	if ($_SESSION['userStatus'] != false) {
		header('Location: ../Directeur/client_manager.php');
	}
	if($_SESSION['userStatus'] == null){
		header('Location: ../index.php');
	}
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>client seller</title>
		<link rel="stylesheet" type="text/css" href="../Feuilles de style/style.css">
		<link rel="stylesheet" type="text/css" href="../Feuilles de style/crm.css">
	</head>
	<body>
		<?php
			require("NavCommercial.php");
			// connection to the database
			require '../BDD/connect.php';
			require("../function.php"); 

			// $responses get all the informations contained in the table "customers"
			displayClientSeller($db);
			
		?>
	</body>
</html>