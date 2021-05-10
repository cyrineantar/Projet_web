<?php
	include "../controller/ClientC.php";
	include_once '../model/Client.php';
    include "../config.php";

	$clientC = new ClientC();
	$error = "";
	
	if (
		isset($_POST["nom_client"]) && 
        isset($_POST["prenom_client"]) &&
        isset($_POST["num_client"]) &&
        isset($_POST["adresse_client"]) &&
        isset($_POST["carte_fidelite"]) &&
        isset($_POST["id_admin"])  
      
	){
		if (
            !empty($_POST["nom_client"]) && 
            !empty($_POST["prenom_client"]) &&
            !empty($_POST["num_client"]) &&
            !empty($_POST["adresse_client"]) &&
            !empty($_POST["carte_fidelite"]) &&
            !empty($_POST["id_admin"])  
        
        ) {
            $Client = new Client(
                $_POST['nom_client'],
                $_POST['prenom_client'],
                $_POST['num_client'],
                $_POST['adresse_client'],
                $_POST['carte_fidelite'],
                $_POST['id_admin'],
			);
			
            $clientC->modifierClient($Client, $_GET['Id_client']);
            header('refresh:5;url=afficherClient.php');
        }
        else
            $error = "Missing information";
	}
    ?>



<!DOCTYPE html>
<html>
	<head>
		<title>Modifier Clients</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherClient.php">Retour à la liste</a></button>
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
                    <td rowspan='6' colspan='2'>
						Fiche Client
					</td>
                    <td>
                        <label for="Id_client">Id_client:
                        </label>
                    </td>
                    <td>
						<input type="text" name="Id_client" Id_client="Id_client"  value = "<?php echo $Client['Id_client']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom_client">Nom client:
						</label>
					</td>
					<td>
						<input type="text" name="nom_client" Id_client="nom_client" maxlength="20" value = "<?php echo $Client['nom_client']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="prenom_client">Prenom client:
                        </label>
                    </td>
                    
                    <td><input type="text" name="prenom_client" Id_client="prenom_client" maxlength="20" value = "<?php echo $Client['prenom_client']; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="num_client">Num client:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="num_client" Id_client="num_client" maxlength="20" value = "<?php echo $Client['num_client']; ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse_client">Adresse client:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse_client" Id_client="adresse_client" maxlength="20" value = "<?php echo $Client['adresse_client']; ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="carte_fidelite">Carte fidelite:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="carte_fidelite" Id_client="carte_fidelite" maxlength="20" value = "<?php echo $Client['carte_fidelite']; ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="id_admin">Id admin:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="id_admin" Id_client="id_admin" maxlength="20" value = "<?php echo $Client['id_admin']; ?>"></td>
                    </td>
                </tr>                                               
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
            }
		?>
	</body>
</html>