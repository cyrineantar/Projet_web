<?php
	include "../controller/EvenC.php";
	include_once '../Model/Even.php';
    

	$evenC = new EvenC();
	$error = "";
	
	if (
        isset($_POST["nom_even"]) && 
        isset($_POST["date_even"]) && 
        isset($_POST["localisation"]) &&
        isset($_POST["description"]) &&  
        isset($_POST["id_catg_even"]) 
         
      
	){
		if (
            !empty($_POST["nom_even"]) && 
            !empty($_POST["date_even"]) && 
            !empty($_POST["localisation"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["id_catg_even"])  
             
        
        ) {
            $even = new Even(
                $_POST['nom_even'],
                $_POST['date_even'],
                $_POST['localisation'],
                $_POST['description'],
                $_POST['id_catg_even'], 
               
			);
			
            $evenC->modifierEven($even, $_GET['id_even']);
            header('refresh:5;url=afficherEven.php');
        }
        else
            $error = "Missing information";
	}
    ?>
    <!DOCTYPE html>
<html>
	<head>
		<title>Modifier Evenement</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherEven.php">Retour à la liste</a></button>
        <hr>
        
        <div id_even="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id_even'])){
              
				$even = $evenC->recupererEven($_GET['id_even']);
                
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='6' colspan='1'>
						
					</td>
                    <td>
                        <label for="id_even">Id_even:
                        </label>
                    </td>
                    <td>
						<input type="number" name="id_even" id_even="id_even"  value = "<?php echo $even['Id_even']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom_even">Nom_even:
						</label>
					</td>
					<td>
						<input type="text" name="nom_even" id_even="nom_even" maxlength="20" value = "<?php echo $even['Nom_even']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="date_even">date_even:
                        </label>
                    </td>
                    <td><input type="date" name="date_even" id_even="date_even" maxlength="20" value = "<?php echo $even['Date_even']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="localisation">localisation:
                        </label>
                    </td>
                    <td><input type="text" name="localisation" id_even="localisation" maxlength="20" value = "<?php echo $even['Localisation']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td><input type="text" name="description" id_even="description" maxlength="20" value = "<?php echo $even['Description']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="id_catg_even">Id_catg_even:
                        </label>
                    </td>
                    <td><input type="number" name="id_catg_even" id="id_catg_even" maxlength="20" value = "<?php echo $even['Id_catg_even']; ?>"></td>
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