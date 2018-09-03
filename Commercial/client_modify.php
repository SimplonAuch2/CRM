<?php
    ini_set('display_errors', 1);
    session_start();
    if ($_SESSION['userStatus'] != false) {
        header('Location: client_manager.php');
    }
    if($_SESSION['userStatus'] == null){
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modifier un client</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Feuilles de style/style.css">
    <link rel="stylesheet" type="text/css" href="../Feuilles de style/crm.css">
</head>

<body>
    <?php
        require("NavCommercial.php");
        // connection to the database
        require '../BDD/connect.php';
		require("../function.php"); 
        
        $id = $_GET['id'];
		// $responses get all the informations contained in the table "customers"
        displayClientModif($id, $db);

        if (isset($_POST['valider'])) {
            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
            $city = $_POST['city'];
            $address = $_POST['address'];
            $zipCode = $_POST['zipCode'];
            $phoneNumber = $_POST['phoneNumber'];
            $email = $_POST['email'];
            $country = $_POST['country'];
            $fkUser = $_POST['fkUser'];


            modifyClient($db, $id, $lastName, $firstName, $city, $address, $zipCode, $phoneNumber, $email, $country, $fkUser);
            header('Location: client_seller.php');
        }
        if (isset($_POST['retour'])) {
            header('Location: client_seller.php');
        }
			
		?>
</body>

</html>