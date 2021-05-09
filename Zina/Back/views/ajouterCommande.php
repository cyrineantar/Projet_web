<?php
    include_once '../Model/Commande.php';
    include_once '../Controller/CommandeC.php';
    include "../config.php";

    $error = "";

    // create commande7
    // create commande
    $commande = null;

    // create an instance of the controller
    $commandeC = new CommandeC();
    if (
        isset($_POST["prix_total"]) && 
        isset($_POST["id_client"]) &&
        isset($_POST["id_livraison"]) 
      
    ) {
        if (
            !empty($_POST["prix_total"]) && 
            !empty($_POST["id_client"]) && 
            !empty($_POST["id_livraison"]) 
          
        ) {
            $commande = new Commande(
                $_POST['prix_total'],
                $_POST['id_client'], 
                $_POST['id_livraison'],
               
            );
            $commandeC->ajouterCommande($commande);
            header('Location:afficherCommandes.php');
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
    <title>Gestion Commande</title>
</head>
    <body>
    <button><a href="afficherCommandes.php">Retour à la liste</a></button>
        <hr>
        
        <div id_commande="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Ajouter une Commande</td>
                    <td>
                        <label for="prix_total">Prix_total:
                        </label>
                    </td>
                    <td><input type="number" name="prix_total" id_commande="prix_total" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_client">Id_client:
                        </label>
                    </td>
                    <td><input type="number" name="id_client" id_commande="id_client" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="id_livraison">Id_livraison:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="id_livraison" id_commande="id_livraison" maxlength="20">
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