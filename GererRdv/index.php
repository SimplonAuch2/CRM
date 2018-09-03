<?php 
	require_once ('sql_connect.php');
	require_once ('function.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Gerer ses rdv</title>
		<link rel="stylesheet" href="style.css">
	</head>
		<body>
			<form action="gererRdv.php">
				<input type="submit" name="gererRdv" value="Gerer mes Rdv">
			</form>

			<form action="VoirRdv.php" method="POST">
				<input type="submit" name="voir" value="Voir tous mes Rdv">	
            </form>
			
		</body>
</html>