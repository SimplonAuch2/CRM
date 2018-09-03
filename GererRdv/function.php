<?php 
	//Fonction qui permet de voir les erreurs
    function voirErreur($var) {
        echo "<pre>";// permet une indentation plus agréable à lire (type colonne)
        var_dump($var);
        echo "</pre>";
    } // ensuite, il faut l'appeler : ex=> voirErreur($_POST);
?>