<?php
include "../config.php";
    include_once '../Model/Even.php';
    include_once '../Controller/EvenC.php';

    $error = "";

    // create evenement
    $even = null;

    // create an instance of the controller
    $evenC = new EvenC();
    if (
        isset($_POST["nom_even"]) && 
        isset($_POST["date_even"]) &&
        isset($_POST["localisation"]) &&
        isset($_POST["Description"]) &&
        isset($_POST["id_catg_even"])

      
    ) {
        if (
            !empty($_POST["nom_even"]) && 
            !empty($_POST["date_even"]) &&
            !empty($_POST["localisation"]) &&
            !empty($_POST["Description"]) &&
            !empty($_POST["id_catg_even"])


           
        ) {
            $even = new Even(
                $_POST['nom_even'],
                $_POST['date_even'],
                $_POST['localisation'],
                $_POST['Description'],
                $_POST['id_catg_even'],
            
            );
            $evenC->ajouter_even($even);
            header('Location: afficherEven.php');
        }
        else
            echo "Missing information";
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion evenement</title>
</head>
    <body>
    <button><a href="afficherEven.php">Retour à la liste</a></button>
        <hr>
        
        <div id_even="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='5' colspan='1'>Ajouter un evenement</td>
                    <td>
                        <label for="nom_even">Nom_even:
                        </label>
                    </td>
                    <td><input type="text" name="nom_even" id_even="nom_even" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date_even">Date_even:
                        </label>
                    </td>
                    <td><input type="date" name="date_even" id_even="date_even" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="localisation">Localisation:
                        </label>
                    </td>
                    <td><input type="text" name="localisation" id_even="localisation" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Description">Description:
                        </label>
                    </td>
                    <td><input type="text" name="Description" id_even="Description" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_catg_even">Id_catg_even:

                        </label>
                    </td>
                    <td><input type="number" name="id_catg_even" id_even="id_catg_even" maxlength="20"></td>
                </tr>

                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>


