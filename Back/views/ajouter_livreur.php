<?php
    include_once '../model/Livreur.php';
    include_once '../controller/LivreurC.php';

    $error = "";

    // create livreur
    $livreur = null;

    // create an instance of the controller
    $livreurC = new LivreurC();
    if (
        
        isset($_POST["Nom_livreur"]) &&
        isset($_POST["Num_livreur"]) &&
        isset($_POST["Destination"]) 
       )
    {
        if (
            
            !empty($_POST["Nom_livreur"]) &&
            !empty($_POST["Num_livreur"]) &&
            !empty($_POST["Destination"]) 

          
        ) {
            $livreur = new livreur(
                
                ($_POST["Nom_livreur"]) ,
                ($_POST["Num_livreur"]) ,
                ($_POST["Destination"]) 
               
            );
            $livreurC->ajouter_livreur($livreur);
           
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
    <title>Gestion Livreur</title>
</head>
    <body>
       
        <hr>
        
        <div Id_livreur="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='4' colspan='1'>Ajouter un livreur</td>
                    <td>
                        <label for="Id_livreur">Id_livreur:
                        </label>
                        <td><input type="number" name="Id_livreur" Id_livreur="Id_livreur" maxlength="20"></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Nom_livreur">Nom_livreur:
                        </label>
                    </td>
                    <td><input type="text" name="Nom_livreur" Id_livreur="Nom_livreur" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Num_livreur">Num_livreur:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="Num_livreur" Id_livreur="Num_livreur" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Destination">Destination:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Destination" Id_livreur="Destination" maxlength="20">
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