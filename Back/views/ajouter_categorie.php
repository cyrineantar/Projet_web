<?php
    include_once '../model/Categorie.php';
    include_once '../controller/CategorieC.php';

    $error = "";

    // create commande
    $categorie= null;

    // create an instance of the controller
    $categorieC = new CategorieC();
    if (
        //isset($_POST["Id_categorie"]) && 
        isset($_POST["Nom_categorie"]) &&
        isset($_POST["Type_categorie"]) 
      
    ) {
        if (
            //!empty($_POST["Id_categorie"]) && 
            !empty($_POST["Nom_categorie"]) && 
            !empty($_POST["Type_categorie"]) 
          
        ) {
            $categorie = new Categorie(
               // $_POST['Id_categorie'],
                $_POST['Nom_categorie'], 
                $_POST['Type_categorie'],
               
            );
            $categorieC->ajouter_categorie($categorie);
           
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
    <title>categorie d'article </title>
</head>
    <body>
       
        <hr>
        
        <div Id_categorie="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Ajouter une Categorie</td>
                    <td>
                        <label for="Id_categorie">Id_categorie:
                       </label>
                    
                    
                </tr>
                <tr>
                    <td>
                        <label for="Nom_categorie">Nom_categorie:
                        </label>
                    </td>
                    <td><input type="text" name="Nom_categorie" Id_categorie="Nom_categorie" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="Type_categorie">Type_categorie:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Type_categorie"Id_categorie="Type_categorie" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="chercher"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>