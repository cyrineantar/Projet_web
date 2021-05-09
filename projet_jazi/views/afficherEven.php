<?PHP
include "../config.php";
	include "../controller/EvenC.php";
	$evenC=new EvenC();
	$listeEven=$evenC->afficherEven();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Categories </title>
    </head>
    <body>
		<button><a href="Even.html">Ajouter un evenement</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>Id_even</th>
				<th>Nom_even</th>
				<th>Date_even</th>
                <th>Localisation</th>
				<th>Description</th>
                <th>Id_catg_even</th>

			</tr>

			<?PHP
				foreach($listeEven as $even){
			?>
            		<tr>
                    <td><?PHP echo $even['Id_even']; ?></td>
					<td><?PHP echo $even['Nom_even']; ?></td>
					<td><?PHP echo $even['Date_even']; ?></td>
                    <td><?PHP echo $even['Localisation']; ?></td>
                    <td><?PHP echo $even['Description']; ?></td>
                    <td><?PHP echo $even['Id_catg_even']; ?></td>
					
					<td>
						<form method="POST" action="supprimerEven.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $even['Id_even']; ?> name="Id_even">
						</form>
					</td>
					<td>
						<a href="modifierEven.php?id_catg_even=<?PHP echo $even['Id_even']; ?>"id_catg_even="id_even" name="id_even"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>