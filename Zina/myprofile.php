<!DOCTYPE html>
<html lang="en">
<head>
<title>Zina | Sign Up</title>
	<link rel="shortcut icon" href="images/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

        
<div id="login-box">
<form action="updateProfile.php" method="POST">
    <table >

    <tr>
            <td>
                <label for="Ref_article"> Id_client</label>
            </td>
            <td>
            <input type="int" Id_client="Id_client" name="Id_client"placeholder="Your ID" disabled>
            </td>
            </tr>
    

            <tr>
                <td>
                    <label for="nom_client">Name</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_client="nom_client" name="nom_client" placeholder="">
                    </td>
            </tr>

            <td>
                <label for="prenom_client">Last Name:
                </label>
            </td>
            <td>
                <input type="text" name="image" Id_client="prenom_client"  class="prenom_client" placeholder="">
            </td>
            </tr>

            <tr>
                <td>
                    <label for="num_client">Phone Number</label>
                    
                    </td>
                    <td>
                        <input type="int" Id_client="num_client" name="num_client" placeholder="Phone Number">
                    </td>
            </tr>



            <tr>
                <td>
                    <label for="adresse_client">Email</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_client="adresse_client" name="adresse_client" placeholder="Your Email">
                    </td>
            </tr>
			
			<tr>
                <td>
                    <label for="carte_fidelite">Fidelity Card</label>
                    
                    </td>
                    <td>
                        <input type="int" Id_client="carte_fidelite" name="carte_fidelite" placeholder="" disabled>
                    </td>
            </tr>
			
			<tr>
                <td>
                    <label for="mot_de_passe">Password</label>
                    
                    </td>
                    <td>
                        <input type="text" Id_client="mot_de_passe" name="mot_de_passe" placeholder="Password">
                    </td>
            </tr>

    
        <tr>
            <td>
             <input type="submit" value="Update">
             <input type="reset" value ="Quit">
                
            </td>
         
        </tr>
    </table>
</form>
</div>
</body>
</html>