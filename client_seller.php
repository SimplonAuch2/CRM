<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>client_seller</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<?php
			require("function.php"); 
			// connection to the database
			try  
			{
				$db = new PDO('mysql:host=localhost;dbname=CRM;charset=utf8', 'admin', 'azertyuio');
			}
			// in case of error we display a message
			catch (Exception $e)
			{
			    die('Erreur : ' . $e->getMessage());
			}

			displayClientSeller($db);
			// $responses get all the informations contained in the table "customers"
			
		?>
	</body>
</html>