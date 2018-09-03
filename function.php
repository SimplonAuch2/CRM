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

			echo '</table>';	
	}

	//gets the customers of the current trader
	//not working yet
	function idTrader()
	{
		session_start();
		require 'connect.php';
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
							<th><input class='hidden' value='sortName'><button class='transparent' name='sort' type='submit'>Nom</button></th>
							<th><input class='hidden' value='sortFirstame'><button class='transparent' name='sort' type='submit'>Prénom</button></th>
							<th><input class='hidden' value='sortBirthday'><button class='transparent' name='sort' type='submit'>Date de naissance</button></th>
							<th><input class='hidden' value='sortCity'><button class='transparent' name='sort' type='submit'>Ville</button></th>
							<th><input class='hidden' value='sortAdress'><button class='transparent' name='sort' type='submit'>Adresse</button></th>
							<th><input class='hidden' value='sortZipCode'><button class='transparent' name='sort' type='submit'>Code postal</button></th>
							<th><input class='hidden' value='sortPhoneNubmer'><button class='transparent' name='sort' type='submit'>Tél</button></th>
							<th><input class='hidden' value='sortRegistrationDate'><button class='transparent' name='sort' type='submit'>Date 
							d'enregistrement</button></th>
							<th><input class='hidden' value='sortGender'><button class='transparent' name='sort' type='submit'>Genre</button></th>
							<th><input class='hidden' value='sortEmail'><button class='transparent' name='sort' type='submit'>Email</button></th>
							<th><input class='hidden' value='sortCountry'><button class='transparent' name='sort' type='submit'>Pays</button></th>
							<th>Action</th>
						</form>
					</tr>";
			// we display every rows from the table in the table, 1 by 1
			$responses = $db->query('SELECT * FROM customer WHERE fkUser = userId');/*put the id of the user instead of "1"*/ 
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
							<form method='POST'>
								<td>
									<button name='modify' type='submit'>Modifier</button>
									<button name='delete' type='submit'>Delete</button>
									<input class='hidden' name='customerId' value='" . $datas['customerId'] . "'>
								</td>
							</form>
						</tr>";
			}

			echo '</table>';

	}


 ?>