<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
<button><a href="afficher_livraison.php">Retour à la liste</a></button>
<hr>

<form action="update.php" method="POST">
    <table >

    <tr>
            <td>
                <label for="Id_livraison"> Id_livraison</label>
            </td>
            <td>
            <input type="int" Id_livraison="Id_livraison" name="Id_livraison"placeholder="Id_livraison">
            </td>
            </tr>
    

            <tr>
                <td>
                    <label for="Date_livraison">Date_livraison</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_livraison="Date_livraison" name="Date_livraison" placeholder="Date_livraison">
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="Methode_de_livraison">Methode_de_livraison</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_livraison="Methode_de_livraison" name="Methode_de_livraison" placeholder="Methode_de_livraison">
                    </td>
            </tr>
            <tr>
                <td>
                    <label for="Methode_de_payement">Methode_de_payement</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_livraison="Methode_de_payement" name="Methode_de_payement" placeholder="Methode_de_payement">
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