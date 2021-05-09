<?php
    include_once '../model/Panier.php';
    include_once '../controller/PanierC.php';
    include "../config.php";

    $error = "";

    // create panier
    $panier = null;

    // create an instance of the controller
    $panierC = new PanierC();
    if (
        isset($_POST["ref_article"]) && 
        isset($_POST["id_commande"]) 
        
      
    ) {
        if (
            !empty($_POST["ref_article"]) && 
            !empty($_POST["id_commande"])  
            
          
        ) {
            $panier = new Panier(
                $_POST['ref_article'],
                $_POST['id_commande'], 
             
               
            );
            $panierC->ajouterPanier($panier);
            header('Location:afficherPaniers.php');
            
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
    <title>Gestion Panier</title>
</head>
    <body>
       <button><a href="afficherPaniers.php">Retour à la liste</a></button>
        <hr>
        
        <div id_panier="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='2' colspan='1'>Ajouter un Panier</td>
                    <td>
                        <label for="ref_article">Ref_article:
                        </label>
                    </td>
                    <td><input type="number" name="ref_article" id_panier="ref_article" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_commande">Id_commande:
                        </label>
                    </td>
                    <td><input type="number" name="id_commande" id_panier="id_commande" maxlength="20"></td>
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