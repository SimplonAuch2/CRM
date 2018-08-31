<!DOCTYPE html>
<html lang="en">
	<head>
		<title>client_manager</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="crm.css">
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

			displayClientManager($db);
		?>
	</body>
</html>