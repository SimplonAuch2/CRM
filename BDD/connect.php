	<?php
	
		try  
		{
			$db = new PDO('mysql:host=localhost;dbname=CRMTEST;charset=utf8', 'simoccauch19', 'azerty');
		}
		// en cas d'erreur on affiche un message :
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		} 
	
	?>
