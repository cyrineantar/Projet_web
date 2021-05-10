<?PHP
	include "../controller/AdminC.php";
	include_once '../model/Admin.php';
    include "../config.php";
	$adminC=new AdminC();
	$listeAdmin=$adminC->afficherAdmin();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Admins </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter un Admin</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>Id_admin</th>
				<th>Nom_admin</th>
				<th>Mot_de_passe</th>
			</tr>

			<?PHP
				foreach($listeAdmin as $admin){
			?>
            		<tr>
                    <td><?PHP echo $admin['Id_admin']; ?></td>
					<td><?PHP echo $admin['Nom_admin']; ?></td>
					<td><?PHP echo $admin['Mot_de_passe']; ?></td>
					<td>
						<form method="POST" action="supprimerAdmin.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $admin['Id_admin']; ?> name="Id_admin">
						</form>
					</td>
					<td>
						<a href="modifierAdmin.php?id=<?PHP echo $admin['Id_admin']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>