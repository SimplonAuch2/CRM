<?php
    ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test recherche</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <form method="post">
        <input type="text" name="search">
        <button type="submit" name="go">Rechercher</button>
    </form>
    <?php
    
    ?>
</body>

</html>
<?php
        ini_set('display_errors', 1);

//At click button 'Rechercher' execute this code
        if(isset($_POST['go'])){
//connect to database
            try {
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                $bdd = new PDO('mysql:host=localhost;dbname=CRMTEST;charset=utf8', 'x','x', $pdo_options);
            }
                catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br />";
            }
//Get input value
            $go = $_POST['search'];
//search input value in customers table
            $resultClient = $bdd->query('SELECT * FROM customers WHERE (customer_id = "'.$go.'") OR (customer_name = "'.$go.'")');
//search input value in orders table
            $resultOrder = $bdd->query('SELECT * FROM orders WHERE (order_id = "'.$go.'")');
//search input value in products table
            $resultProduct = $bdd->query('SELECT * FROM products WHERE (product_name = "'.$go.'") OR (product_reference = "'.$go.'")');
//display result to research
            while($donne = $resultClient->fetch()){
                echo $donne['customer_name'];
            }
            while($donne = $resultOrder->fetch()){
                echo $donne['order_id'];
            }
            while($donne = $resultProduct->fetch()){
                echo $donne['product_name'];
            }

        }
    ?>
