<?php
    include_once '../Model/Client.php';
    include_once '../Controller/ClientC.php';

    $error = "";

    // create user
    $client = null;

    // create an instance of the controller
    $clientC = new ClientC();
    if (
        isset($_POST["nom_client"]) && 
        isset($_POST["prenom_client"]) &&
        isset($_POST["num_client"]) && 
        isset($_POST["adresse_client"]) && 
        isset($_POST["carte_fidelite"]) &&
        isset($_POST["id_admin"]) 
    ) {
        if (
            !empty($_POST["nom_client"]) && 
            !empty($_POST["prenom_client"]) && 
            !empty($_POST["num_client"]) && 
            !empty($_POST["adresse_client"]) && 
            !empty($_POST["carte_fidelite"]) && 
            !empty($_POST["id_admin"])
        ) {
            $client = new Client(
                $_POST['nom_client'],
                $_POST['prenom_client'], 
                $_POST['num_client'],
                $_POST['adresse_client'],
                $_POST['carte_fidelite'],
                $_POST['id_admin']
            );
            $clientC->ajouterClient($client);
           
        }
        else
            $error = "Missing information";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateur</title>
</head>
    <body>
       
        <hr>
        
        <div id_client="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='6' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom_client">Nom_client:
                        </label>
                    </td>
                    <td><input type="text" name="nom_client" id_client="nom_client" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom_client">Prenom_client:
                        </label>
                    </td>
                    <td><input type="text" name="prenom_client" id_client="prenom_client" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="num_client">Num_client:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="num_client" id_client="num_client" maxlength="20">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="adresse_client">Adresse_client:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse_client" id_client="adresse_client" maxlength="20">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="carte_fidelite">Carte_fidelite:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="carte_fidelite" id_client="carte_fidelite" maxlength="20">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="id_admin">Id_admin:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="id_admin" id_client="id_admin" maxlength="20">
                    </td>
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