<?PHP
    include_once '../Back/model/Livraison.php';
    include_once '../Back/controller/LivraisonC.php';
    include "../Back/config.php";
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
    <body onload="window.print()">

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
					
					
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>