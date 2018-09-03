<?php
//nettoie les sessions
  session_start();
  $_SESSION = array();

// When activating the "Send" button on the login form, we retrieve the input data

if (isset($_POST['userSubmit'])==true)
{
    $userLogin = $_POST['userName'];
    $userPassword = $_POST['userPassword'];


    // connection to the database

    require 'BDD/connect.php';


    // Compare the filled user name with the user names stored in the database

    $req = $db->prepare('SELECT * FROM user WHERE userLogin = :userLogin');

    $req->execute(array(
       'userLogin' => $userLogin));

    $result = $req->fetch();


   // Compare the completed user password with the corresponding user passwords in the database

    if ($userLogin != $result['userLogin'])
    {
      echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
      if ($userPassword == $result['userPassword']) 
      {
        // If the password is correct, check the status of the user and redirect to appropriate pages

        if ($result['userStatus'] == true) 
        {
          session_start();
          $_SESSION['userName'] = $userLogin;
          $_SESSION['userPassword'] = $userPassword;              /* true = Directeur  */
          $_SESSION['userStatus'] = $result['userStatus'];       /*   false = Commerciaux */
          $_SESSION['userId'] = $result['userId'];
          header('Location: Directeur/client_manager.php');
        }
        else
        {
          session_start();
          $_SESSION['userName'] = $userLogin;
          $_SESSION['userPassword'] = $userPassword;
          $_SESSION['userStatus'] = $result['userStatus'];
          $_SESSION['userId'] = $result['userId'];
          header('Location: Commercial/client_seller.php');
        }
      }
      else 
      {
        echo 'Mauvais identifiant ou mot de passe !';
      }
    }
}
?>
