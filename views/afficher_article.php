<?PHP
    include_once '../model/Article.php';
    include_once '../controller/ArticleC.php';
	$articleC = new articleC();
	$liste=$articleC->afficher_article();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste des articles </title>
    </head>
    <body>
		<button><a href="ajouter_article.php">Ajouter un article</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>Ref_article</th>
				<th>Nom_article</th>
				<th>image</th>
                <th>Description</th>
                <th>Prix_article</th>
				
			</tr>

            <?PHP


				foreach ($liste as $article){
			?>
            		<tr>
                    <td><?PHP echo $article['Ref_article']; ?></td>
					<td><?PHP echo $article['Nom_article']; ?></td>
					<td><img style="width: 500px;"src=" <?PHP echo $article['image']; ?>"></td>

                    <td><?PHP echo $article['Description']; ?></td>
                    <td><?PHP echo $article['Prix_article']; ?></td>
					
					<td>
						<form method="POST" action="supprimer_article.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $article['Ref_article']; ?> name="Ref_article">
						<form method="POST" action="modifier_article.php">
						</form>
					</td>
					<td>
						<a href="modifier_article.php?Ref_article=<?PHP echo $article['Ref_article']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>