<?php 
    require_once('function.php');

    // Fonction pour ajouter les evenements à la BDD
        function addRdv($nomClient, $dateRdv, $heureRdv, $lieuRdv, $commentaire) {
            require_once('sql_connect.php');
            $bdd->query("INSERT INTO Rdv (nomClient, dateRdv, heureRdv, lieuRdv, commentaire) VALUES ('$nomClient', '$dateRdv', '$heureRdv', '$lieuRdv', '$commentaire')");
        }  
           if (isset($_POST['envoi'])) { //au clic de "envoi"
            $nom = $_POST['nom'];
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            $lieu = $_POST['lieu'];
            $commentaire = $_POST['commentaire'];
            addRdv($nom, $date, $heure, $lieu, $commentaire);

        // On vide les variables et on empêche le chargement d'une nouvelle page
            unset($commentaire);
            unset($date);
            unset($heure);
            unset($lieu);
            unset($nom);
            header("location: gererRdv.php");
        }
?>

<div id="tittre">
    <h1>Mes RDV</h1>
</div>

<form method="post" action="gererRdv.php">
    <table id="tabAjoutRdv">
        <tr>
            <td colspan="2"><br/>
                <label for="nom">Nom du client:</label><br/>
                <input type="text" name="nom" id="nom" size="30"><br/>
            </td>
        </tr>
        <tr>
            <td colspan="2"><br/>
                <label for="date">Date du RDV: </label><br/>        
                <input type="date" name="date" size="30"><br/>
            </td>
        </tr>
        <tr>        
            <td colspan="2"><br/>
                <label for="heure">Heure du RDV: </label><br/>
                <input type="time" name="heure" size="30"><br/>
            </td>
        </tr>
        <tr>
            <td colspan="2"><br/>
                <label for="lieu">Lieu du RDV: </label><br/>
                <input type="text" name="lieu" size="30"><br/>
            </td>
        </tr>
        <tr>
            <td colspan="2"><br/>
                <label for="commentaire">Commentaire :</label><br/>
                <textarea rows="10" cols="50" id="commentaire" name="commentaire"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="envoi" value="Envoyer"/></td>
        </tr>
    </table>
</form>

<p class="centre"><br/><a href="index.php">Revenir à l'accueil</a></p>




