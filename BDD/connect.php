	<?php
	
		try  
		{
			$db = new PDO('mysql:host=localhost;dbname=CRM;charset=utf8', 'annie', '12345678');
		}
		// en cas d'erreur on affiche un message :
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		} 
	
	?>
