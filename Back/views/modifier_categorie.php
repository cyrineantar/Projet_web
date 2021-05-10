<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
<button><a href="afficher_categorie.php">Retour à la liste</a></button>
<hr>

<form action="update.php" method="POST">
    <table >

    <tr>
            <td>
                <label for="Id_categorie"> Id_categorie</label>
            </td>
            <td>
            <input type="int" Id_categorie="Id_categorie" name="Id_categorie"placeholder="Id_categorie">
            </td>
            </tr>
    

            <tr>
                <td>
                    <label for="Nom_categorie">Nom_categorie</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_categorie="Nom_categorie" name="Nom_categorie" placeholder="Nom_categorie">
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="Type_categorie">Type_categorie</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_categorie="Type_categorie" name="Type_categorie" placeholder="Type_categorie">
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