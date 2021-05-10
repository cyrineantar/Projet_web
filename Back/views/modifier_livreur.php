<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
<button><a href="afficher_livreur.php">Retour à la liste</a></button>
<hr>

<form action="update1.php" method="POST">
    <table >

    <tr>
            <td>
                <label for="Id_livreur"> Id_livreur</label>
            </td>
            <td>
            <input type="int" Id_livreur="Id_livreur" name="Id_livreur"placeholder="Id_livreur">
            </td>
            </tr>
    

            <tr>
                <td>
                    <label for="Nom_livreur">Nom_livreur</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_livraison="Nom_livreur" name="Nom_livreur" placeholder="Nom_livreur">
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="Num_livreur">Num_livreur</label>
                    
                    </td>
                    <td>
                        <input type="int" Id_livraison="Num_livreur" name="Num_livreur" placeholder="Num_livreur">
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="Destination">Destination</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_livraison="Destination" name="Destination" placeholder="Destination">
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