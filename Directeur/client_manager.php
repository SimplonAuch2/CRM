<?php
session_start();
	//If not director redirect to client_seller.php
if($_SESSION['userStatus'] != true){
	header('Location: client_seller.php');
}
if($_SESSION['userStatus'] == null){
	header('Location: index.php');
}


?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>client manager</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="crm.css">
	</head>

	<body>
		<?php

			require 'navDirecteur.php';
					// connection to the database
			require 'connect.php';

			require("function.php");

			require "customers.class.php"; 

			$sortLastName = 0;
			$sortFirstName = 0;
			$sortBirthday = 0;
			$sortCity = 0;
			$sortAdress = 0;
			$sortZipCode = 0;
			$sortPhoneNumber = 0;
			$sortRegistrationDate = 0;
			$sortGender = 0;
			$sortEmail = 0;
			$sortCountry = 0;
			$sortStatus = 0;

			function sortByASC($orderBy)
			{
				$customers = $db->query('SELECT * FROM customer ORDER BY '.$orderBy.' ASC');
        		return $customers;
			}

			function sortByDESC($orderBy)
			{
				$customers = $db->query('SELECT * FROM customer ORDER BY '.$orderBy.' DESC');
        		return $customers;
			}

			if(isset($POST_['sortName']))
			{
				$sortLastName++;
				if($sortLastName == 1)
				{
					$orderBy = "customerLastName";
					sortByASC($orderBy);	
				}

				if($sortLastName == 2)
				{
					$orderBy = "customerLastName";
					sortByDESC($orderBy);
					$sortLastName = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortFirstName++;
				if($sortFirstName == 1)
				{
					$orderBy = "customerFirstName";
					sortByASC($orderBy);	
				}

				if($sortFirstName == 2)
				{
					$orderBy = "customerFirstName";
					sortByDESC($orderBy);
					$sortFirstName = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortBirthday++;
				if($sortBirthday == 1)
				{
					$orderBy = "customerBirthday";
					sortByASC($orderBy);	
				}

				if($sortBirthday == 2)
				{
					$orderBy = "customerBirthday";
					sortByDESC($orderBy);
					$sortBirthday = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortCity++;
				if($sortCity == 1)
				{
					$orderBy = "customerCity";
					sortByASC($orderBy);	
				}

				if($sortCity == 2)
				{
					$orderBy = "customerCity";
					sortByDESC($orderBy);
					$sortCity = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortAdress++;
				if($sortAdress == 1)
				{
					$orderBy = "customerAdress";
					sortByASC($orderBy);	
				}

				if($sortAdress == 2)
				{
					$orderBy = "customerAdress";
					sortByDESC($orderBy);
					$sortAdress = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortZipCode++;
				if($sortZipCode == 1)
				{
					$orderBy = "customerZipCode";
					sortByASC($orderBy);	
				}

				if($sortZipCode == 2)
				{
					$orderBy = "customerZipCode";
					sortByDESC($orderBy);
					$sortZipCode = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortPhoneNumber++;
				if($sortPhoneNumber == 1)
				{
					$orderBy = "customerPhoneNumber";
					sortByASC($orderBy);	
				}

				if($sortPhoneNumber == 2)
				{
					$orderBy = "customerPhoneNumber";
					sortByDESC($orderBy);
					$sortPhoneNumber = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortRegistrationDate++;
				if($sortRegistrationDate == 1)
				{
					$orderBy = "customerRegistrationDate";
					sortByASC($orderBy);	
				}

				if($sortRegistrationDate == 2)
				{
					$orderBy = "customerRegistrationDate";
					sortByDESC($orderBy);
					$sortRegistrationDate = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortGender++;
				if($sortGender == 1)
				{
					$orderBy = "customerGender";
					sortByASC($orderBy);	
				}

				if($sortGender == 2)
				{
					$orderBy = "customerGender";
					sortByDESC($orderBy);
					$sortGender = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortEmail++;
				if($sortEmail == 1)
				{
					$orderBy = "customerEmail";
					sortByASC($orderBy);	
				}

				if($sortEmail == 2)
				{
					$orderBy = "customerEmail";
					sortByDESC($orderBy);
					$sortEmail = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortCountry++;
				if($sortCountry == 1)
				{
					$orderBy = "customerCountry";
					sortByASC($orderBy);	
				}

				if($sortCountry == 2)
				{
					$orderBy = "customerCountry";
					sortByDESC($orderBy);
					$sortCountry = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortStatus++;
				if($sortStatus == 1)
				{
					$orderBy = "customerStatus";
					sortByASC($orderBy);	
				}

				if($sortStatus == 2)
				{
					$orderBy = "customerStatus";
					sortByDESC($orderBy);
					$sortStatus = 0;
				}
			}

			else
			{
				displayClientManager($db);
			}
		?>
	</body>
</html>