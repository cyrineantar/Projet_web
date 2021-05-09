<?php
    include_once '../Model/Categorie_even.php';
    include_once '../Controller/Categorie_evenC.php';
    include "../config.php";

    $error = "";

    // create categorie
    $categorie_even = null;

    // create an instance of the controller
    $categorie_evenC = new Categorie_evenC();
    if (
        isset($_POST["nom_catg_even"]) && 
        isset($_POST["type_catg_even"]) 
      
    ) {
        if (
            !empty($_POST["nom_catg_even"]) && 
            !empty($_POST["type_catg_even"]) 
           
        ) {
            $categorie_even = new Categorie_even(
                $_POST['nom_catg_even'],
                $_POST['type_catg_even'] 
            
            );
            $categorie_evenC->ajouterCategorie_even($categorie_even);
            header('Location:afficherCategories.php');
         
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
    <title>Gestion categorie evenement</title>
</head>
    <body>
         <button><a href="afficherCategories.php">Retour à la liste</a></button>
        <hr>
        
        <div id_catg_even="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Ajouter une categorie</td>
                    <td>
                        <label for="nom_catg_even">Nom_catg_even:
                        </label>
                    </td>
                    <td><input type="text" name="nom_catg_even" id_catg_even="nom_catg_even" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="type_catg_even">Type_catg_even:
                        </label>
                    </td>
                    <td><input type="text" name="type_catg_even" id_catg_even="type_catg_even" maxlength="20"></td>
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