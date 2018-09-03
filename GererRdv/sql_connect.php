
<?php //connexion à la base de donnees
	try {
	        $bdd = new PDO('mysql:host=localhost;dbname=gererRdv;charset=utf8', 'helder','Rastatengo32');
	    }
	    catch (Exception $e) {
	        print "Erreur !: " . $e->getMessage() . "<br />";
	    }
?>


   