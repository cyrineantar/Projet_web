<?php
	include "../controller/CommandeC.php";
	include_once '../Model/Commande.php';
    include "../config.php";

	$commandeC = new CommandeC();
	$error = "";
	
	if (
		isset($_POST["prix_total"]) && 
        isset($_POST["id_client"]) &&
        isset($_POST["id_livraison"])  
      
	){
		if (
            !empty($_POST["prix_total"]) && 
            !empty($_POST["id_client"]) && 
            !empty($_POST["id_livraison"])  
        
        ) {
            $commande = new Commande(
                $_POST['prix_total'],
                $_POST['id_client'], 
                $_POST['id_livraison'],
			);
			
            $commandeC->modifierCommande($commande, $_GET['id_commande']);
            header('refresh:0;url=afficherCommandes.php');
        }
        else
            $error = "Missing information";
	}
    ?>



<!DOCTYPE html>
<html>
	<head>
		<title>Modifier Commande</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherCommandes.php">Retour à la liste</a></button>
        <hr>
        
        <div id_commande="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id_commande'])){
				$commande = $commandeC->recupererCommande($_GET['id_commande']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						Fiche Commande
					</td>
                    <td>
                        <label for="id_commande">Id_commande:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id_commande" id_commande="id_commande"  value = "<?php echo $commande['Id_commande']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="prix_total">Prix_total:
						</label>
					</td>
					<td>
						<input type="number" name="prix_total" id_commande="prix_total" maxlength="20" value = "<?php echo $commande['Prix_total']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="id_client">Id_client:
                        </label>
                    </td>
                    <td><input type="number" name="id_client" id_commande="id_client" maxlength="20" value = "<?php echo $commande['Id_client']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="id_livraison">Id_livraison:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="id_livraison" id_commande="id_livraison" maxlength="20" value = "<?php echo $commande['Id_livraison']; ?>"></td>
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