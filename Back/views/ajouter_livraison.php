<?php
    include_once '../model/Livraison.php';
    include_once '../controller/LivraisonC.php';

    $error = "";

    // create livraison
    $livraison = null;

    // create an instance of the controller
    $livraisonC = new LivraisonC();
    if (
        
        isset($_POST["Date_livraison"]) &&
        isset($_POST["Methode_de_livraison"]) &&
        isset($_POST["Methode_de_payement"]) 
        
       )
    {
        if (
            
            !empty($_POST["Date_livraison"]) &&
            !empty($_POST["Methode_de_livraison"]) &&
            !empty($_POST["Methode_de_payement"]) 

          
        ) {
            $livraison = new livraison(
                
                ($_POST["Date_livraison"]) ,
                ($_POST["Methode_de_livraison"]) ,
                ($_POST["Methode_de_payement"]) 
               
            );
            $livraisonC->ajouter_livraison($livraison);
           
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
    <title>Gestion Livraison</title>
</head>
    <body>
       
        <hr>
        
        <div Id_livraison="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='4' colspan='1'>Ajouter une livraison</td>
                    <td>
                        <label for="Id_livraison">Id_livraison:
                        </label>
                        <td><input type="number" name="Id_livraison" Id_livraison="Id_livraison" maxlength="20"></td> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Date_livraison">Date_livraison:
                        </label>
                    </td>
                    <td><input type="date" name="Date_livraison" Id_livraison="Date_livraison" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Methode_de_livraison">Methode_de_livraison:
                        </label>
                    </td>
                    <td>
                        <input type="varchar" name="Methode_de_livraison" Id_livraison="Methode_de_livraison" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Methode_de_payement">Methode_de_payement:
                        </label>
                    </td>
                    <td>
                        <input type="varchar" name="Methode_de_payement" Id_livraison="Methode_de_payement" maxlength="20">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Ajouter"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>