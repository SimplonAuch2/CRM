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

			function displayTableHeader()
			{
				echo
				"<table id='displayCustomers'>
					<tr>
						<form method='POST'>
							<th><button name='sortLastName' type='submit'>Nom</button></th>
							<th><button name='sortFirstName' type='submit'>Prénom</button></th>
							<th><button name='sortBirthday' type='submit'>Date de naissance</button></th>
							<th><button name='sortCity' type='submit'>Ville</button></th>
							<th><button name='sortAdress' type='submit'>Adresse</button></th>
							<th><button name='sortZipCode' type='submit'>Code postal</button></th>
							<th><button name='sortTel' type='submit'>Tél</button></th>
							<th><button name='sortRegistrationDate' type='submit'>Date 
							d'enregistrement</button></th>
							<th><button name='sortGender' type='submit'>Genre</button></th>
							<th><button name='sortEmail' type='submit'>Email</button></th>
							<th><button name='sortCountry' type='submit'>Pays</button></th>
						</form>
					</tr>";
			}

			function loop($responses)
			{
				$responses = $db->query('SELECT * FROM customer');
				while($datas=$responses->fetch())
				{
					echo
						"<tr>
							<td>" . $datas['customerLastName'] . "</td>
							<td>" . $datas['customerFirstName'] . "</td>
							<td>" . $datas['customerBirthday'] . "</td>
							<td>" . $datas['customerCity'] . "</td>
							<td>" . $datas['customerAdress'] . "</td>
							<td>" . $datas['customerZipCode'] . "</td>
							<td>" . $datas['customerPhoneNumber'] . "</td>
							<td>" . $datas['customerRegistrationDate'] . "</td>
							<td>" . $datas['customerGender'] . "</td>
							<td>" . $datas['customerEmail'] . "</td>
							<td>" . $datas['customerCountry'] . "</td>
						</tr>";
				}
			}

			if(isset($POST_['sortLastName']))
			{
				$sortLastName++;
				if($sortLastName == 1)
				{
					$orderBy = "customerLastName";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);
				}

				if($sortLastName == 2)
				{
					$orderBy = "customerLastName";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortLastName = 0;
				}
			}

			if(isset($POST_['sortFirstName']))
			{
				$sortFirstName++;
				if($sortFirstName == 1)
				{
					$orderBy = "customerFirstName";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);	
				}

				if($sortFirstName == 2)
				{
					$orderBy = "customerFirstName";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortFirstName = 0;
				}
			}

			if(isset($POST_['sortBirthday']))
			{
				$sortBirthday++;
				if($sortBirthday == 1)
				{
					$orderBy = "customerBirthday";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);	
				}

				if($sortBirthday == 2)
				{
					$orderBy = "customerBirthday";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortBirthday = 0;
				}
			}

			if(isset($POST_['sortCity']))
			{
				$sortCity++;
				if($sortCity == 1)
				{
					$orderBy = "customerCity";
					$responses = sortByASC($orderBy);	
					displayTableHeader();
					loop($responses);
				}

				if($sortCity == 2)
				{
					$orderBy = "customerCity";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortCity = 0;
				}
			}

			if(isset($POST_['sortAdress']))
			{
				$sortAdress++;
				if($sortAdress == 1)
				{
					$orderBy = "customerAdress";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);	
				}

				if($sortAdress == 2)
				{
					$orderBy = "customerAdress";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortAdress = 0;
				}
			}

			if(isset($POST_['sortZipCode']))
			{
				$sortZipCode++;
				if($sortZipCode == 1)
				{
					$orderBy = "customerZipCode";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);	
				}

				if($sortZipCode == 2)
				{
					$orderBy = "customerZipCode";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortZipCode = 0;
				}
			}

			if(isset($POST_['sortPhoneNumber']))
			{
				$sortPhoneNumber++;
				if($sortPhoneNumber == 1)
				{
					$orderBy = "customerPhoneNumber";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);	
				}

				if($sortPhoneNumber == 2)
				{
					$orderBy = "customerPhoneNumber";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortPhoneNumber = 0;
				}
			}

			if(isset($POST_['sortRegistrationDate']))
			{
				$sortRegistrationDate++;
				if($sortRegistrationDate == 1)
				{
					$orderBy = "customerRegistrationDate";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);	
				}

				if($sortRegistrationDate == 2)
				{
					$orderBy = "customerRegistrationDate";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortRegistrationDate = 0;
				}
			}

			if(isset($POST_['sortGender']))
			{
				$sortGender++;
				if($sortGender == 1)
				{
					$orderBy = "customerGender";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);	
				}

				if($sortGender == 2)
				{
					$orderBy = "customerGender";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortGender = 0;
				}
			}

			if(isset($POST_['sortEmail']))
			{
				$sortEmail++;
				if($sortEmail == 1)
				{
					$orderBy = "customerEmail";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);	
				}

				if($sortEmail == 2)
				{
					$orderBy = "customerEmail";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortEmail = 0;
				}
			}

			if(isset($POST_['sortCountry']))
			{
				$sortCountry++;
				if($sortCountry == 1)
				{
					$orderBy = "customerCountry";
					$responses = sortByASC($orderBy);
					displayTableHeader();
					loop($responses);	
				}

				if($sortCountry == 2)
				{
					$orderBy = "customerCountry";
					$responses = sortByDESC($orderBy);
					displayTableHeader();
					loop($responses);
					$sortCountry = 0;
				}
			}

			else
			{
				displayClientManager($db);
			}
		?>
	</body>
</html>