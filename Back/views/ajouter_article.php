<?php
    include_once '../model/Article.php';
    include_once '../controller/ArticleC.php';

    $error = "";

    
    $article= null;

    // create an instance of the controller
    $articleC = new ArticleC();
    if (
        //isset($_POST["Id_categorie"]) && 
        isset($_POST["Nom_article"]) &&
        isset($_POST["image"]) &&
        isset($_POST["Description"]) &&
        isset($_POST["Prix_article"]) 
      
    ) {
        if (
            //!empty($_POST["Id_categorie"]) && 
            !empty($_POST["Nom_article"]) && 
            !empty($_POST["image"]) && 
            !empty($_POST["Description"]) && 
            !empty($_POST["Prix_article"]) 
          
        ) {
            $article = new Article(
               // $_POST['Id_categorie'],
                $_POST['Nom_article'], 
                $_POST['image'],
                $_POST['Description'],
                $_POST['Prix_article'],
               
            );
            $articleC->ajouter_article($article);
           
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
    <title>gestion d'article </title>
</head>
    <body>
       
        <hr>
        
        <div Ref_article="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Ajouter un article</td>
                    <td>
                        <label for="Ref_article">Ref_article:
                       </label>
                    
                    
                </tr>
                <tr>
                    <td>
                        <label for="Nom_article">Nom_article:
                        </label>
                    </td>
                    <td><input type="text" name="Nom_article" Ref_article="Nom_article" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="image">image:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="image"Ref_article="image" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Description">Description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Description"Ref_article="Description" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Prix_article">Prix_article:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Prix_article"Ref_article="Prix_article" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Id_categorie">Id_categorie:
                        </label>
                    </td>
                    <td><input type="number" name="Id_categorie" Ref_article="Id_categorie" maxlength="20"></td>
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