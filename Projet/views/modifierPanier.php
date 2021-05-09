<?php
	include "../controller/PanierC.php";
	include_once '../model/Panier.php';
    include "../config.php";

	$panierC = new PanierC();
	$error = "";
	
	if (
		isset($_POST["ref_article"]) && 
        isset($_POST["id_commande"]) 
        
      
	){
		if (
            !empty($_POST["ref_article"]) && 
            !empty($_POST["id_commande"]) 
             
        
        ) {
            $panier = new Panier(
                $_POST['ref_article'],
                $_POST['id_commande'], 
                
			);
			
            $panierC->modifierPanier($panier, $_GET['id_panier']);
            header('refresh:0;url=afficherPaniers.php');
        }
        else
            $error = "Missing information";
	}
    ?>



<!DOCTYPE html>
<html>
	<head>
		<title>Modifier Panier</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherPaniers.php">Retour à la liste</a></button>
        <hr>
        
        <div id_panier="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id_panier'])){
				$panier = $panierC->recupererPanier($_GET['id_panier']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>
						Fiche Panier
					</td>
                    <td>
                        <label for="id_panier">Id_panier:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id_panier" id_panier="id_panier"  value = "<?php echo $panier['Id_panier']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="ref_article">Ref_article:
						</label>
					</td>
					<td>
						<input type="number" name="ref_article" id_panier="ref_article" maxlength="20" value = "<?php echo $panier['Ref_article']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="id_commande">Id_commande:
                        </label>
                    </td>
                    <td><input type="number" name="id_commande" id_panier="id_commande" maxlength="20" value = "<?php echo $panier['Id_commande']; ?>"></td>
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

