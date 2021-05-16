<?php
	include "../Zina/Back/controller/ClientC.php";
	include_once '../Zina/Back/model/Client.php';
    include "../Zina/Back/config.php";
    session_start();
	$clientC = new ClientC();
	$error = "";
	
	if (
		isset($_POST["nom_client"]) && 
        isset($_POST["prenom_client"]) &&
        isset($_POST["num_client"]) &&
        isset($_POST["adresse_client"]) &&
        isset($_POST["carte_fidelite"]) &&
        isset($_POST["mot_de_passe"])  
      
	){
		if (
            !empty($_POST["nom_client"]) && 
            !empty($_POST["prenom_client"]) &&
            !empty($_POST["num_client"]) &&
            !empty($_POST["adresse_client"]) &&
            !empty($_POST["carte_fidelite"]) &&
            !empty($_POST["mot_de_passe"])  
        
        ) {
            $Client = new Client(
                $_POST['nom_client'],
                $_POST['prenom_client'],
                $_POST['num_client'],
                $_POST['adresse_client'],
                $_POST['carte_fidelite'],
                $_POST['mot_de_passe'],
			);
			
            $clientC->modifierClient($Client, $_GET['Id_client']);
            header('refresh:0;url=principale.php');
        }
        else
            $error = "Missing information";
	}
    ?>

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
<hr>
        <div Id_client="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['Id_client'])){
				$Client = $clientC->recupererClient($_GET['Id_client']);
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='0' colspan='1'>
						
					</td>
                    <td>
                        <label for="Id_client">Your ID : 
                        </label>
                    </td>
                    <td>
						<input type="text" name="Id_client" Id_client="Id_client"  value = <?php echo $Client['Id_client']; ?> disabled >
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom_client">Userame:
						</label>
					</td>
					<td>
						<input type="text" name="nom_client" Id_client="nom_client" maxlength="20" value = "<?php echo $Client['Nom_client'];  ?>" >
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="prenom_client">Full Name:
                        </label>
                    </td>
                    
                    <td><input type="text" name="prenom_client" Id_client="prenom_client" maxlength="20" value = "<?php echo $Client['Prenom_client']; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="num_client">Phone Number:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="num_client" Id_client="num_client" maxlength="20" value = "<?php echo $Client['Num_client']; ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse_client">Email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse_client" Id_client="adresse_client" maxlength="20" value = "<?php echo $Client['Adresse_client']; ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="carte_fidelite">Fidelity Card:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="carte_fidelite" Id_client="carte_fidelite" maxlength="20" value = "<?php echo $Client['Carte_fidelite']; ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mot_de_passe">Password:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="mot_de_passe" Id_client="mot_de_passe" maxlength="20" value = "<?php echo $Client['Mot_de_passe']; ?>"></td>
                    </td>
                </tr>                                               
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update" name = "modifer"> 
                    </td>
                </tr>
            </table>
        </form>
		<?php
 
         
        }
		?>
</div>
</body>
</html>
