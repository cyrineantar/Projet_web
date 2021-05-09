<?PHP
	include "../Controller/CommandeC.php";
    include "../config.php";
	$commandeC=new CommandeC();
	$listeCommandes=$commandeC->afficherCommandes();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Commandes </title>
    </head>
    <body>
		<button><a href="ajouterCommande.php">Ajouter une commande</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id_commande</th>
				<th>Prix_total</th>
				<th>Id_client</th>
				<th>Id_livraison</th>
			
			</tr>

			<?PHP
				foreach($listeCommandes as $commande){
			?>
				<tr>
					<td><?PHP echo $commande['Id_commande']; ?></td>
					<td><?PHP echo $commande['Prix_total']; ?></td>
					<td><?PHP echo $commande['Id_client']; ?></td>
					<td><?PHP echo $commande['Id_livraison']; ?></td>

				
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>