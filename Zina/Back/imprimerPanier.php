<?PHP
	include "../Back/controller/PanierC.php";
    include "../Back/config.php";
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
    <body onload="window.print()" >
		
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
				

				
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>