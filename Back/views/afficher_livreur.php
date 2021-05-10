<?PHP
    include_once '../model/Livreur.php';
    include_once '../controller/LivreurC.php';
	$livreurC = new LivreurC();
	$listelivreur=$livreurC->afficher_livreur();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste des livreurs </title>
    </head>
    <body>
		<button><a href="ajouter_livreur.php">Ajouter un livreur</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>Id_livreur</th>
				<th>Nom_livreur</th>
				<th>Num_livreur</th>
                <th>Destination</th>
				
			</tr>

			<?PHP
				foreach ($listelivreur as $livreur){
			?>
            		<tr>
                    <td><?PHP echo $livreur['Id_livreur']; ?></td>
					<td><?PHP echo $livreur['Nom_livreur']; ?></td>
					<td><?PHP echo $livreur['Num_livreur']; ?></td>
                    <td><?PHP echo $livreur['Destination']; ?></td>
					<td>
						<form method="POST" action="supprimer_livreur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $livreur['Id_livreur']; ?> name="Id_livreur">
						<form method="POST" action="modifier_livreur.php">
						</form>
					</td>
					<td>
						<a href="modifier_livreur.php?id=<?PHP echo $livreur['Id_livreur']; ?>""Id_livreur="Id_livreur"> Modifier </a>
					</td>
					
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>