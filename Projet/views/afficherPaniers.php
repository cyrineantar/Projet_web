<?PHP
	include "../controller/PanierC.php";
    include "../config.php";
	$panierC=new PanierC();
	$listePaniers=$panierC->afficherPaniers();

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Paniers </title>
    </head>
    <body>
		<button><a href="ajouterPanier.php">Ajouter un Panier</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id_panier</th>
				<th>Ref_article</th>
				<th>Id_commande</th>
			
			
			</tr>

			<?PHP
				foreach($listePaniers as $panier){
			?>
				<tr>
					<td><?PHP echo $panier['Id_panier']; ?></td>
					<td><?PHP echo $panier['Ref_article']; ?></td>
					<td><?PHP echo $panier['Id_commande']; ?></td>
				

					<td>
						<form method="POST" action="supprimerPanier.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $panier['Id_panier']; ?> name="id_panier">
						</form>
					</td>
					<td>
						<a href="modifierPanier.php?id_panier=<?PHP echo $panier['Id_panier']; ?>"id_panier="id_panier" name="id_panier"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>