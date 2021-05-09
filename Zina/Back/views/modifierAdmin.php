<?php
	include "../controller/AdminC.php";
	include_once '../model/Admin.php';
    include "../config.php";

	$adminC = new AdminC();
	$error = "";
	
	if (
		isset($_POST["nom_admin"]) && 
        isset($_POST["mot_de_passe"]) 
      
	){
		if (
            !empty($_POST["nom_admin"]) && 
            !empty($_POST["mot_de_passe"])  
        ) {
            $admin = new Admin(
                $_POST['nom_admin'],
                $_POST['mot_de_passe'],
			);
			
            $adminC->modifierClient($admin, $_GET['Id_admin']);
            header('refresh:5;url=afficherAdmin.php');
        }
        else
            $error = "Missing information";
	}
    ?>



<!DOCTYPE html>
<html>
	<head>
		<title>Modifier Admins</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherAdmin.php">Retour à la liste</a></button>
        <hr>
        <div Id_admin="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['Id_admin'])){
				$admin = $adminC->recupererAdmin($_GET['Id_admin']);
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='2'>
						Fiche Admin
					</td>
                    <td>
                        <label for="Id_admin">Id admin:
                        </label>
                    </td>
                    <td>
						<input type="text" name="Id_admin" Id_admin="Id_admin"  value = "<?php echo $admin['Id_admin']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom_admin">Nom admin:
						</label>
					</td>
					<td>
						<input type="text" name="nom_admin" Id_admin="nom_admin" maxlength="20" value = "<?php echo $admin['nom_admin']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="mot_de_passe">Mot de passe:
                        </label>
                    </td>
                    
                    <td><input type="text" name="mot_de_passe" Id_admin="mot_de_passe" maxlength="20" value = "<?php echo $admin['mot_de_passe']; ?>">
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