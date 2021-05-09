<?php
	include "../controller/Categorie_evenC.php";
	include_once '../Model/Categorie_even.php';
    

	$categorie_evenC = new Categorie_evenC();
	$error = "";
	
	if (
		isset($_POST["Nom_catg_even"]) && 
        isset($_POST["Type_catg_even"])
         
      
	){
		if (
            !empty($_POST["Nom_catg_even"]) && 
            !empty($_POST["Type_catg_even"]) 
             
        
        ) {
            $categorie = new Categorie(
                $_POST['Nom_catg_even'],
                $_POST['Type_catg_even'], 
               
			);
			
            $categorie_evenC->modifierCategorie($categorie, $_GET['Id_catg_even']);
            header('refresh:5;url=afficherCategorie.php');
        }
        else
            $error = "Missing information";
	}
    ?>



<!DOCTYPE html>
<html>
	<head>
		<title>Modifier Categorie</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherCategorie.php">Retour à la liste</a></button>
        <hr>
        
        <div id_catg_even="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['Id_catg_even'])){
                $categorie_evenC = new categorie_evenC();
				$categorie = $categorie_evenC->recupererCategorie($_GET['Id_catg_even']);
                
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						Fiche Categorie
					</td>
                    <td>
                        <label for="id_catg_even">Id_catg_even:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id_catg_even" id="id_catg_even"  value = "<?php echo $categorie['Id_catg_even']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom_catg_even">Nom_catg_even:
						</label>
					</td>
					<td>
						<input type="text" name="nom_catg_even" id="nom_catg_even" maxlength="20" value = "<?php echo $commande['Nom_catg_even']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="type_catg_even">type_catg_even:
                        </label>
                    </td>
                    <td><input type="number" name="type_catg_even" id="type_catg_even" maxlength="20" value = "<?php echo $categorie['Type_catg_even']; ?>"></td>
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