<?PHP
    include_once '../model/Livraison.php';
    include_once '../controller/LivraisonC.php';
	$livraisonC = new LivraisonC();
	$listelivraison=$livraisonC->afficher_livraison();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste des livraisons </title>
    </head>
    <body>
		<button><a href="ajouter_livraison.php">Ajouter une livraison</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>Id_livraison</th>
				<th>Date_livraison</th>
				<th>Methode_de_livraison</th>
                <th>Methode_de_payement</th>
				
			</tr>

			<?PHP
				foreach ($listelivraison as $livraison){
			?>
            		<tr>
                    <td><?PHP echo $livraison['Id_livraison']; ?></td>
					<td><?PHP echo $livraison['Date_livraison']; ?></td>
					<td><?PHP echo $livraison['Methode_de_livraison']; ?></td>
                    <td><?PHP echo $livraison['Methode_de_payement']; ?></td>
					<td>
						<form method="POST" action="supprimer_livraison.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $livraison['Id_livraison']; ?> name="Id_livraison">
						<form method="POST" action="modifier_livraison.php">
						</form>
					</td>
					<td>
						<a href="modifier_livraison.php?id=<?PHP echo $livraison['Id_livraison']; ?>""Id_livraison="Id_livraison" name="Id_livraison"> Modifier </a>
					</td>
					
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>