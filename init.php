<?php

    try {

        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

        $bdd = new PDO('mysql:host=localhost;dbname=X;charset=utf8', 'X','X', $pdo_options);

    }

    catch (PDOException $e) {

        print "Erreur !: " . $e->getMessage() . "<br />";

    }

//Requêtes pour l'objet produit

    //Récupérer tout les produits

        function getProduct(){

            $products = $bdd->query('SELECT * FROM products');

            return $products;

        }

    //Récupérer tout les produits trié par .... décroissant

        function getProductOrderByDesc($orderBy){

            $products = $bdd->query('SELECT * FROM products ORDER BY '.$orderBy.' DESC');

            return $products;

        }

    //Récupérer tout les produits trié par .... croissant

        function getProductOrderByAsc($orderBy){

            $products = $bdd->query('SELECT * FROM products ORDER BY '.$orderBy.' ASC');

            return $products;

        }

    //Ajouter un produit

        function addProduct($product_name,$product_price,$product_stock,$product_place,$product_description,$product_size,$product_weight,$product_reference,$product_state)

        {

            $req = $bdd->prepare('INSERT INTO products(product_name,product_price,product_stock,product_place,product_description,product_size,product_weight,product_reference,product_state)

                    VALUES (:product_name,:product_price,:product_stock,:product_place,:product_description,:product_size,:product_weight,:product_reference,:product_state)');

            $req->execute(array(

                ':product_name' => $product_name,

                ':product_price' => $product_price,

                ':product_stock' => $product_stock,

                ':product_place' => $product_place,

                ':product_description' => $product_description,

                ':product_size' => $product_size,

                ':product_weight' => $product_weight,

                ':product_reference' => $product_reference,

                ':product_state' => $product_state

                ));

            return $req;

        }

    //Modifier un produit

        function updateProduct($product_name,$product_price,$product_stock,$product_place,$product_description,$product_size,$product_weight,$product_reference,$product_state)

        {

            $req = $bdd->query("UPDATE products SET product_name ='$product_name',product_price ='$product_price',product_stock ='$product_stock',product_place ='$product_place',product_description ='$product_description',product_size ='$product_size',product_weight ='$product_weight',product_reference ='$product_reference',product_state ='$product_state'");

            return $req;

        }

    //Récupérer un produit par son id

        function getProduitById($produit_id){

            $response = $bdd->query('SELECT * FROM products WHERE produit_id = '.$produit_id);

            return $response;

        }

    //Retiré un produit

        function cancelProduct($product_id){

            $req = $bdd->query('UPDATE products SET product_state = "Retiré" WHERE product_id ='.$product_id);

            return $req;

        }

//Requête objet commande

    //Récupérer toutes les commandes

        function getOrder(){

            $orders = $bdd->query('SELECT * FROM Orders');

            return $orders;

        }

    //Récupérer les commandes trié par ..... décroissant 

        function getOrderOrderByDesc($orderBy){

            $orders = $bdd->query('SELECT * FROM Orders ORDER BY '.$orderBy.' DESC');

            return $orders;

        }

    //Récupérer les commandes trié par .... croissant

        function getOrderOrderByAsc($orderBy){

            $orders = $bdd->query('SELECT * FROM Orders ORDER BY '.$orderBy.' ASC');

            return $orders;

        }

        

    //Ajouter une commande >>>> table nom Orders

        function addOrder($order_products,$order_quantity,$order_price,$order_reduction,$order_postal_charges,$order_totalprice,$order_taxes,$order_delivery_address,$order_billing_address,$order_date,$order_state,$order_delivery_date,$customer_id){

            $req = $bdd->prepare('INSERT INTO Orders(order_products,order_quantity,order_price,order_reduction,order_postal_charges,order_totalprice,order_taxes,order_delivery_address,order_billing_address,order_date,order_state,order_delivery_date,customer_id)

            VALUES (:order_products,:order_quantity,:order_price,:order_reduction,:order_postal_charges,:order_totalprice,:order_taxes,:order_delivery_address,:order_billing_address,:order_date,:order_state,:order_delivery_date,:customer_id)');

            $req->execute(array(

                ':order_products' => $order_products,

                ':order_quantity' => $order_quantity,

                ':order_price' => $order_price,

                ':order_reduction' => $order_reduction,

                ':order_postal_charges' => $order_postal_charges,

                ':order_totalprice' => $order_totalprice,

                ':order_taxes' => $order_taxes,

                ':order_delivery_address' => $order_delivery_address,

                ':order_billing_address' => $order_billing_address,

                ':order_date' => $order_date,

                ':order_state' => $order_state,

                ':order_delivery_date' => $order_delivery_date,

                ':customer_id' => $customer_id, 

            ));

            return $req;

        }

    //Récupérer une commande par son id

        function getOrderById($order_id){

 /*modif*/  $response = $bdd->query('SELECT * FROM Orders WHERE order_id = '.$order_id);

            return $response;

        }

    //Modifier une commande

        function updateOrder($order_products,$order_quantity,$order_price,$order_reduction,$order_postal_charges,$order_totalprice,$order_taxes,$order_delivery_address,$order_billing_address,$order_date,$order_state,$order_delivery_date,$customer_id){

            $req = $bdd->query("UPDATE Order SET order_products='$order_products',order_quantity='$order_quantity'order_price,='$order_price',order_reduction='$order_reduction',order_postal_charges='$order_postal_charges',order_totalprice='$order_totalprice',order_taxes='$order_taxes',order_delivery_address='$order_delivery_address',order_billing_address='$order_billing_address',order_date='$order_date',order_state='$order_state',order_delivery_date='$order_delivery_date',customer_id='$customer_id'");

            return $req;

        }

    //Annulé une commande

        function cancelOrder($order_id){

            $req = $bdd->query('UPDATE Orders SET order_state = "Annulé" WHERE order_id ='.$order_id);

            return $req;

        }

//Requêtes des customers

    //Récupérer tout les customers

        function getcustomers($customers){

           $customers = $bdd->query('SELECT * FROM customers');

            return $customers;

        };

    //Récupérer les customers trié par ..... décroissant

        function getcustomerOrderByDesc($orderBy){

            $customers = $bdd->query('SELECT * FROM customers ORDER BY '.$orderBy.' DESC');

            return $customers;

        }

    //Récupérer les customer trié par .... croissant

        function getcustomerOrderByAsc($orderBy){

            $customers = $bdd->query('SELECT * FROM customer ORDER BY '.$orderBy.' ASC');

            return $customers;

        }

    //Ajouter un customer

        function addcustomer($customer_name,$customer_firstname,$customer_birthday,$customer_city,$customer_adress,$customer_zipCode,$customer_phoneNumber,$customer_registrationDate,$customer_gender,$customer_email,$customer_country)

        {

            $req = $bdd->prepare('INSERT INTO customers (customer_name,customer_firstname,customer_birthday,customer_city,customer_adress,customer_zipCode,customer_phoneNumber,customer_registrationDate,customer_gender,customer_email,customer_country)

                VALUES (:customer_name,:customer_firstname,:customer_birthday,:customer_city,:customer_adress,:customer_zipCode,:customer_phoneNumber,:customer_registrationDate,:customer_gender,:customer_email,:customer_country)');

            $req->execute(array(

                    ':customer_name' => $customer_name,

                    ':customer_firstname' => $customer_firstname,

                    ':customer_birthday' => $customer_birthday,

                    ':customer_city' => $customer_city,

                    ':customer_adress' => $customer_adress,

                    ':customer_zipCode' => $customer_zipCode,

                    ':customer_phoneNumber' => $customer_phoneNumber,

                    ':customer_registrationDate' => $customer_registrationDate,

                    ':customer_gender' => $customer_gender,

                    ':customer_email' => $customer_email,

                    ':customer_country' => $customer_country

            ));

            return $req;

        }

    //Récupérer un customers par son id

        function getcustomerById($customer_id){

            $response = $bdd->query('SELECT * FROM customers WHERE customer_id = '.$customer_id);

            return $response;

        }

    //Modifier un customer

        function updatecustomer($customer_name,$customer_firstname,$customer_birthday,$customer_city,$customer_adress,$customer_zipCode,$customer_phoneNumber,$customer_registrationDate,$customer_gender,$customer_email,$customer_country)

        {

            $req = $bdd->query("UPDATE Order SET customer_name='$customer_name',customer_firstname='$customer_firstname',customer_birthday,='$customer_birthday',customer_city='$customer_city',customer_adress='$customer_adress',customer_phoneNumber='$customer_phoneNumber',customer_registrationDate='$customer_registrationDate',customer_gender='$customer_gender',customer_email='$customer_email',customer_country='$customer_country'");

            return $req;

        }

//Valid 70

?>