<?PHP
	include "../controller/Categorie_evenC.php";
    include "../config.php";
	$categorie_evenC=new Categorie_evenC();
	$listeCategorie=$categorie_evenC->afficherCategories();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Categories </title>
    </head>
    <body>
		<button><a href="ajouterCategorie_even.php">Ajouter un Categorie</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>Id_catg_even</th>
				<th>Nom_catg_even</th>
				<th>Type_catg_even</th>
				
			</tr>

			<?PHP
				foreach($listeCategorie as $categorie){
			?>
            		<tr>
                    <td><?PHP echo $categorie['Id_catg_even']; ?></td>
					<td><?PHP echo $categorie['Nom_catg_even']; ?></td>
					<td><?PHP echo $categorie['Type_catg_even']; ?></td>
					
					<td>
						<form method="POST" action="supprimerCategorie.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $categorie['Id_catg_even']; ?> name="Id_catg_even">
						</form>
					</td>
					<td>
						<a href="modifierCategorie.php?id_catg_even=<?PHP echo $categorie['Id_catg_even']; ?>"id_catg_even="id_catg_even" name="id_catg_even"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>