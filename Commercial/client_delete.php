<?php
    require '../BDD/connect.php';

    $id = $_GET['id'];
    $req = $db->query("UPDATE customer SET customerStatus=0 WHERE customerId = ". $id);

    header('Location: client_seller.php');

?>