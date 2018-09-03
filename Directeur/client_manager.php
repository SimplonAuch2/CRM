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

			if(isset($POST_['sortName']))
			{
				$sortLastName++;
				if($sortLastName == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortLastName == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortLastName = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortFirstName++;
				if($sortFirstName == 1)
				{
					$orderBy = "customerFirstName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortFirstName == 2)
				{
					$orderBy = "customerFirstName";
					getcustomerOrderByDesc($orderBy);
					$sortFirstName = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortBirthday++;
				if($sortBirthday == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortBirthday == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortBirthday = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortCity++;
				if($sortCity == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortCity == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortCity = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortAdress++;
				if($sortAdress == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortAdress == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortAdress = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortZipCode++;
				if($sortZipCode == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortZipCode == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortZipCode = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortPhoneNumber++;
				if($sortPhoneNumber == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortPhoneNumber == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortPhoneNumber = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortRegistrationDate++;
				if($sortRegistrationDate == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortRegistrationDate == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortRegistrationDate = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortGender++;
				if($sortGender == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortGender == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortGender = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortEmail++;
				if($sortEmail == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortEmail == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortEmail = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortCountry++;
				if($sortCountry == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortCountry == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
					$sortCountry = 0;
				}
			}

			if(isset($POST_['sortName']))
			{
				$sortStatus++;
				if($sortStatus == 1)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByAsc($orderBy);	
				}

				if($sortStatus == 2)
				{
					$orderBy = "customerLastName";
					getcustomerOrderByDesc($orderBy);
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