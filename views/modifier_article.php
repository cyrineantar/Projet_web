<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
<button><a href="afficher_article.php">Retour à la liste</a></button>
<hr>

<form action="update_article.php" method="POST">
    <table >

    <tr>
            <td>
                <label for="Ref_article"> Ref_article</label>
            </td>
            <td>
            <input type="int" Ref_article="Ref_article" name="Ref_article"placeholder="Ref_article">
            </td>
            </tr>
    

            <tr>
                <td>
                    <label for="Nom_article">Nom_article</label>
                    
                    </td>
                    <td>
                        <input type="text" Ref_article="Nom_article" name="Nom_article" placeholder="Nom_article">
                    </td>
            </tr>

            <td>
                <label for="image">image:
                </label>
            </td>
            <td>
                <input type="file" name="image" Ref_article="image"  class="form-control" placeholder="Nom_article">
            </td>
            </tr>

            <tr>
                <td>
                    <label for="Description">Description</label>
                    
                    </td>
                    <td>
                        <input type="text" Ref_article="Description" name="Description" placeholder="Description">
                    </td>
            </tr>



            <tr>
                <td>
                    <label for="Prix_article">Prix_article</label>
                    
                    </td>
                    <td>
                        <input type="float" Ref_article="Prix_article" name="Prix_article" placeholder="Prix_article">
                    </td>
            </tr>

    
        <tr>
            <td>
                <input type="submit" value="modifier">

                
            </td>
            <td>
            <input type="reset" value ="quitter">
            </td>
        </tr>
    </table>
</form>
</body>
</html>