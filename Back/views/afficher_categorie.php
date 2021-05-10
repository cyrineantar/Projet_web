<?PHP
    include_once '../model/Categorie.php';
    include_once '../controller/CategorieC.php';
	$categorieC = new CategorieC();
	$liste=$categorieC->afficher_categorie();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste des categories </title>
    </head>
    <body>
		<button><a href="ajouter_categorie.php">Ajouter une Categorie</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>Id_categorie</th>
				<th>Nom_categorie</th>
				<th>Type_categorie</th>
				
			</tr>

			<?PHP
				foreach ($liste as $categorie){
			?>
            		<tr>
                    <td><?PHP echo $categorie['Id_categorie']; ?></td>
					<td><?PHP echo $categorie['Nom_categorie']; ?></td>
					<td><?PHP echo $categorie['Type_categorie']; ?></td>
					
					<td>
						<form method="POST" action="supprimer_categorie.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $categorie['Id_categorie']; ?> name="Id_categorie">
						<form method="POST" action="modifier_categorie.php">
						</form>
					</td>
					<td>
						<a href="modifier_categorie.php?id=<?PHP echo $categorie['Id_categorie']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>