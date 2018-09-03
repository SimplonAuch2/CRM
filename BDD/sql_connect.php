    <?php
            // mysql_connect("localhost", "helder", "Rastatengo32");
            // mysql_select_db("calendrierTest");
    ?>
     
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=calendrierTest;charset=utf8', 'helder', 'Rastatengo32');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>