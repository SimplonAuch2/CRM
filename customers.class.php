<?php 

	// creation de la class client
	class Customers
	{
		public $gender;
		public $firstName;
		public $name;
		public $birthDate;
		public $city;
		public $address;
		public $zipCode;
		public $phoneNumber;
		public $registrationDate;

		// function pour creer un nouveau client
		public function __construct($gender, $firstName, $name, $birthDate, $city, $address, $zipCode, $phoneNumber, $registrationDate)
		{
			$this -> gender = $gender;
			$this -> firstName = $firstName;
			$this -> name = $name;
			$this -> birthDate = $birthDate;
			$this -> city = $city;
			$this -> address = $address;
			$this -> zipCode = $zipCode;
			$this -> phoneNumber = $phoneNumber;
			$this -> registrationDate = $registrationDate;
		}

		// trie par ordre croissant
		function getcustomerOrderByAsc($orderBy)
		{

           	$customers = $bdd->query('SELECT * FROM customer ORDER BY '.$orderBy.' ASC');

        	return $customers;

       	}

		// trie par ordre decroissant
		function getcustomerOrderByDesc($orderBy)
		{

            $customers = $bdd->query('SELECT * FROM customers ORDER BY '.$orderBy.' DESC');

            return $customers;
			
		}

        // ajouter un client
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

        // modifier un client
         function updatecustomer($customer_name,$customer_firstname,$customer_birthday,$customer_city,$customer_adress,$customer_zipCode,$customer_phoneNumber,$customer_registrationDate,$customer_gender,$customer_email,$customer_country)
        {
            
            $req = $bdd->query("UPDATE Order SET customer_name='$customer_name',customer_firstname='$customer_firstname',customer_birthday,='$customer_birthday',customer_city='$customer_city',customer_adress='$customer_adress',customer_phoneNumber='$customer_phoneNumber',customer_registrationDate='$customer_registrationDate',customer_gender='$customer_gender',customer_email='$customer_email',customer_country='$customer_country'");

            return $req;

        }

        // function retirer en cour de traitement
        // function cancelProduct($product_id)
        // {

        //     $req = $bdd->query('UPDATE products SET product_state = "Retiré" WHERE product_id ='.$product_id);

        //     return $req;

        // }

	}

 ?>