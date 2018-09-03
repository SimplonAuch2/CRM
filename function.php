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
			$responses = $db->query('SELECT * FROM customer WHERE fkUser = ' . $_SESSION['userId'] . ' AND customerStatus = 1');/*put the id of the user instead
of "1"*/
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
							<td>" . $datas['customerCountry'] . "</td>"
?>
							<td>
									<a href="client_modify.php?id=<?php echo $datas['customerId'];?>" name='modify'>Modifier</a>
									<a href="client_delete.php?id=<?php echo $datas['customerId'];?>" name='delete'>Supprimer</a>
							</td>
						</tr>
						<?php
			}

			echo '</table>';

	}

	function displayClientModif($id, $db){
		$responses = $db->query('SELECT * FROM customer WHERE customerId = ' . $id);/*put the id of the
user
		instead
		of "1"*/
		while($datas=$responses->fetch())
		{

		echo
		"<form method='post'>
			<label>Nom</label>
			<input name='lastName' value=" . $datas['customerLastName'] . ">
			<label>Prénom</label>
			<input name='firstName' value=". $datas['customerFirstName'] . ">
			<label>Ville</label>
			<input name='city' value=" . $datas['customerCity'] . ">
			<label>Adresse</label>
			<input name='address' value=" . $datas['customerAdress'] . ">
			<label>Code postal</label>
			<input name='zipCode' value=" . $datas['customerZipCode'] . ">
			<label>Tel</label>
			<input name='phoneNumber' value=" . $datas['customerPhoneNumber'] . ">
			<label>Email</label>
			<input name='email' value=" . $datas['customerEmail'] . ">
			<label>Pays</label>
			<input name='country' value=" . $datas['customerCountry'] . ">
			<label>Numéro commercial</label>
			<input name='fkUser' value=" . $datas['fkUser'] . ">
			<button name='retour'>Retour</button>
			<button type='submit' name='valider'>Valider</button>
		</form>";
		}
	}

	function modifyClient($db, $id, $lastName, $firstName, $city, $address, $zipCode, $phoneNumber, $email, $country, $fkUser){

		$req = $db->query("UPDATE customer SET customerLastName='" . $lastName . "',customerFirstName='" .
			$firstName . "',customerCity='" . $city . "',customerAdress='" . $address . 
			"',customerZipCode='" . $zipCode . "',customerPhoneNumber='" . $phoneNumber . "', customerEmail='" .
			$email . "',customerCountry='" . $country . "',fkUser=" . $fkUser . " WHERE customerId = ". $id);

		return $req;

	}

	function addClient($db, $lastName, $firstName, $city, $address, $zipCode, $phoneNumber, $email, $country,$birthday, $gender, $fkUser){

		$req = $db->prepare('INSERT INTO customer (customerLastName, customerFirstName, customerBirthday, customerCity, customerAdress, customerZipCode, customerPhoneNumber, customerGender, customerEmail, customerCountry, customerStatus, fkUser)

		VALUES (:customer_name, :customer_firstname, :customer_birthday, :customer_city, :customer_adress, :customer_zipCode, :customer_phoneNumber, :customer_gender, :customer_email, :customer_country, :customer_status, :customer_seller)');

		$req->execute(array(

		':customer_name' => $lastName,
		':customer_firstname' => $firstName,
		':customer_birthday' => $birthday,
		':customer_city' => $city,
		':customer_adress' => $address,
		':customer_zipCode' => $zipCode,
		':customer_phoneNumber' => $phoneNumber,
		':customer_gender' => $gender,
		':customer_email' => $email,
		':customer_country' => $country,
		'customer_status' => 1,
		':customer_seller' => $fkUser

		));

		return $req;
	}
?>