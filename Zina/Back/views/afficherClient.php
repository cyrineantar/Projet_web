<?PHP
	include "../controller/ClientC.php";
	include_once '../model/Client.php';
    include "../config.php";
	$clientC=new ClientC();
	$listeClient=$clientC->afficherClient();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Clients </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter un Client</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>Id_client</th>
				<th>Nom_client</th>
				<th>Prenom_client</th>
				<th>Num_client</th>
				<th>Adresse_client</th>
				<th>Carte_fidelite</th>
				<th>supprimer</th>
				<th>modifier</th>
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
					<td>
						<form method="POST" action="supprimerClient.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $Client['Id_client']; ?> name="Id_client">
						</form>
					</td>
					<td>
						<a href="modifierClient.php?id=<?PHP echo $Client['Id_client']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>