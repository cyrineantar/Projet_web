<?PHP
	include "../Back/controller/AdminC.php";
	include_once '../Back/model/Admin.php';
    include "../Back/config.php";
	$adminC=new AdminC();
	$listeAdmin=$adminC->afficherAdmin();
    $listeAdmin=$adminC->trierNomAdmin();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Admins </title>
    </head>
    <body onload="window.print()" >
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
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>