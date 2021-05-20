<?PHP
	include "../Back/controller/AdminC.php";
	include_once '../Back/model/Admin.php';
    include "../Back/config.php";
	include "../Back/controller/ClientC.php";
	include_once '../Back/model/Client.php';
	$adminC=new AdminC();
	$listeAdmin=$adminC->afficherAdmin();
    $listeAdmin=$adminC->trierNomAdmin();
    $ClientC = new ClientC();
    $listeClient= $ClientC->afficherClient();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Admins </title>
    </head>
    <body onload="window.print()" >
		<table class="table" align = 'center'>
			<tr>
                <th>Id_admin</th>
				<th>Nom_admin</th>
				<th>Mot_de_passe</th>
				<th>Id_client</th>
			</tr>

			<?PHP
				foreach($listeAdmin as $admin){
			?>
            		<tr>
                    <td><?PHP echo $admin['Id_admin']; ?></td>
					<td><?PHP echo $admin['Nom_admin']; ?></td>
					<td><?PHP echo $admin['Mot_de_passe']; ?></td>
					<td><?PHP echo $admin['Id_client']; ?></td>
					<td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>