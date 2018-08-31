<?php 
	//generate the interface of the table containing every customer (for the manager)
	//this table is readable and sortable 
	//the parameter gets the informations for the connections to the database
	function displayClientManager($db)
	{
			echo
				"<table id='displayCustomers'>
					<tr>
						<form method='POST'>
							<th><input class='hidden' value='sortName'><button name='sort' type='submit'>Nom</button></th>
							<th><input class='hidden' value='sortFirstame'><button name='sort' type='submit'>Prénom</button></th>
							<th><input class='hidden' value='sortBirthday'><button name='sort' type='submit'>Date de 
							naissance</button></th>
							<th><input class='hidden' value='sortCity'><button name='sort' type='submit'>Ville</button></th>
							<th><input class='hidden' value='sortAdress'><button name='sort' type='submit'>Adresse</button></th>
							<th><input class='hidden' value='sortZipCode'><button name='sort' type='submit'>Code postal</button></th>
							<th><input class='hidden' value='sortPhoneNubmer'><button name='sort' type='submit'>Tél</button></th>
							<th><input class='hidden' value='sortRegistrationDate'><button name='sort' type='submit'>Date 
							d'enregistrement</button></th>
							<th><input class='hidden' value='sortGender'><button name='sort' type='submit'>Genre</button></th>
							<th><input class='hidden' value='sortEmail'><button name='sort' type='submit'>Email</button></th>
							<th><input class='hidden' value='sortCountry'><button name='sort' type='submit'>Pays</button></th>
						</form>
					</tr>";
			// we display every rows from the table in the table, 1 by 1
			$responses = $db->query('SELECT * FROM customers');
			while($datas=$responses->fetch())
			{
				echo
						"<tr>
							<td>" . $datas['customer_name'] . "</td>
							<td>" . $datas['customer_firstname'] . "</td>
							<td>" . $datas['customer_birthday'] . "</td>
							<td>" . $datas['customer_city'] . "</td>
							<td>" . $datas['customer_adress'] . "</td>
							<td>" . $datas['customer_zipCode'] . "</td>
							<td>" . $datas['customer_phoneNumber'] . "</td>
							<td>" . $datas['customer_registrationDate'] . "</td>
							<td>" . $datas['customer_gender'] . "</td>
							<td>" . $datas['customer_email'] . "</td>
							<td>" . $datas['customer_country'] . "</td>
						</tr>";
			}

			echo '</table>';	
	}

	//gets the customers of the current trader
	//not working yet
	function idTrader()
	{
		session_start();
		try 
		{
			$bdd = new PDO('mysql:host=localhost;dbname=CRM;charset=utf8', 'annie', '12345678');
		} 
		catch (Exception $e) 
		{
			die('Erreur : ' . $e->getMessage());
		}
		$req = $db->prepare('SELECT * FROM customer WHERE fk_user = userId');
		$req->execute(array(
		    'userId' => $_SESSION['userId']
		)); 
	}

	//display the customers of the trader
	function displayClientSeller($db)
	{
		echo
				"<table id='displayCustomers'>
					<tr>
						<form method='POST'>
							<th><input class='hidden' value='sortName'><button name='sort' type='submit'>Nom</button></th>
							<th><input class='hidden' value='sortFirstame'><button name='sort' type='submit'>Prénom</button></th>
							<th><input class='hidden' value='sortBirthday'><button name='sort' type='submit'>Date de naissance</button></th>
							<th><input class='hidden' value='sortCity'><button name='sort' type='submit'>Ville</button></th>
							<th><input class='hidden' value='sortAdress'><button name='sort' type='submit'>Adresse</button></th>
							<th><input class='hidden' value='sortZipCode'><button name='sort' type='submit'>Code postal</button></th>
							<th><input class='hidden' value='sortPhoneNubmer'><button name='sort' type='submit'>Tél</button></th>
							<th><input class='hidden' value='sortRegistrationDate'><button name='sort' type='submit'>Date 
							d'enregistrement</button></th>
							<th><input class='hidden' value='sortGender'><button name='sort' type='submit'>Genre</button></th>
							<th><input class='hidden' value='sortEmail'><button name='sort' type='submit'>Email</button></th>
							<th><input class='hidden' value='sortCountry'><button name='sort' type='submit'>Pays</button></th>
						</form>
					</tr>";
			// we display every rows from the table in the table, 1 by 1
			$responses = $db->query('SELECT * FROM customers WHERE fk_trader = ' . 1 );
			while($datas=$responses->fetch())
			{
				echo
						"<tr>
							<td>" . $datas['customer_name'] . "</td>
							<td>" . $datas['customer_firstname'] . "</td>
							<td>" . $datas['customer_birthday'] . "</td>
							<td>" . $datas['customer_city'] . "</td>
							<td>" . $datas['customer_adress'] . "</td>
							<td>" . $datas['customer_zipCode'] . "</td>
							<td>" . $datas['customer_phoneNumber'] . "</td>
							<td>" . $datas['customer_registrationDate'] . "</td>
							<td>" . $datas['customer_gender'] . "</td>
							<td>" . $datas['customer_email'] . "</td>
							<td>" . $datas['customer_country'] . "</td>
							<form method='POST'>
								<td><button name='modify' type='submit'>Modifier</button></td>
								<td><button name='delete' type='submit'>Delete</button></td>
							</form>
						</tr>";
			}

			echo '</table>';

	}


 ?>