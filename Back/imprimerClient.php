<?PHP
	include "../Back/controller/ClientC.php";
	include_once '../Back/model/Client.php';
    include "../Back/config.php";
	$clientC=new ClientC();
	$listeClient=$clientC->afficherClient();
    $listeClient=$clientC->trierNomClients();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Clients </title>
    </head>
    <body onload="window.print()" >
		<table border=1 align = 'center'>
			<tr>
                <th>Id_client</th>
				<th>Nom_client</th>
				<th>Prenom_client</th>
				<th>Num_client</th>
				<th>Adresse_client</th>
				<th>Carte_fidelite</th>
				<th>Mot_de_passe</th>
			</tr>

			<?PHP
				foreach($listeClient as $Client){
			?>
            		<tr>
                    <td><?PHP echo $Client['Id_client']; ?></td>
					<td><?PHP echo $Client['Nom_client']; ?></td>
					<td><?PHP echo $Client['Prenom_client']; ?></td>
					<td><?PHP echo $Client['Num_client']; ?></td>
					<td><?PHP echo $Client['Adresse_client']; ?></td>
					<td><?PHP echo $Client['Carte_fidelite']; ?></td>
					<td><?PHP echo $Client['Mot_de_passe']; ?></td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>