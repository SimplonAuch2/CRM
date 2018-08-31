<?php

// When activating the "Send" button on the login form, we retrieve the input data

if (isset($_POST['userSubmit'])==true)
{
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];


    // connection to the database

    try 
    {
      $bdd = new PDO('mysql:host=localhost;dbname=CRM;charset=utf8', 'annie', '12345678');
    } 
    catch (Exception $e) 
    {
      die('Erreur : ' . $e->getMessage());
    }


    // Compare the filled user name with the user names stored in the database

    $req = $bdd->prepare('SELECT * FROM user WHERE userLogin = :userLogin');

    $req->execute(array(
       'userLogin' => $userName));

    $resultat = $req->fetch();


   // Compare the completed user password with the corresponding user passwords in the database

    if ($userName != $resultat['userLogin'])
    {
      echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
      if ($userPassword == $resultat['userPassword']) 
      {
        // If the password is correct, check the status of the user and redirect to appropriate pages

        if ($resultat['userStatus'] == true) 
        {
          session_start();
          $_SESSION['userName'] = $userName;
          $_SESSION['userPassword'] = $userPassword;              /* true = Directeur  */
          $_SESSION['userStatus'] = $resultat['userStatus'];       /*   false = Commerciaux */
          $_SESSION['userId'] = $resultat['userId'];
          header('Location: client_manager.php');
        }
        else
        {
          session_start();
          $_SESSION['userName'] = $userName;
          $_SESSION['userPassword'] = $userPassword;
          $_SESSION['userStatus'] = $resultat['userStatus'];
          $_SESSION['userId'] = $resultat['userId'];
          header('Location: client_seller.php');
        }
      }
      else 
      {
        echo 'Mauvais identifiant ou mot de passe !';
      }
    }
}
?>
