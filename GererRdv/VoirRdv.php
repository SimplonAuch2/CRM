<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rdv</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div style="overflow-x:auto;">
			<table id="tableRdv">
				<thead>
					<tr>
						<th><h3> Nom du client </h3></th>
						<th><h3> Date du Rdv </h3></th>
						<th><h3> Heure du Rdv </h3></th>
						<th><h3> Lieu du Rdv </h3></th>
						<th><h3> Commentaire </h3></th>
					</tr>
				</thead> 
<?php 
	
	if (isset($_POST['voir'])) { //au clic 
    
		// fonction pour voir les rdv par ordre decroissant :
			require('sql_connect.php');
		 	$reponse = $bdd->query('SELECT * FROM Rdv ORDER BY idRdv DESC');

			while ($donnees=$reponse->fetch()) {
						echo   '
						<tr>
							<td>' . $donnees['nomClient'] . '</td>
							<td>' . $donnees['dateRdv'] . '</td>
							<td>' . $donnees['heureRdv'] . '</td>
							<td>' . $donnees['lieuRdv'] . '</td>
							<td>' . $donnees['commentaire'] . '</td>
						</tr>';        
					};
		}
		
    ?>
			</table>
		</div>
		
<!-- <form action="VoirRdv.php" method="POST">
	
	<tr>
	    <td colspan="2"><input type="submit" name="Voir" donnees="Voir tous mes Rdv" value="voir" /></td>
	</tr>

</form> -->

<p class="centre"><br/><a href="index.php">Revenir à l'accueil</a></p>
<p class="centre"><br/><a href="gererRdv.php">Aller à la page "Gerer un Rdv"</a></p>
	

	
</body>
</html>
