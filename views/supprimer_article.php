<?PHP
 include_once '../model/Article.php';
 include_once '../controller/ArticleC.php';
$articleC=new ArticleC();
if (isset($_POST["Ref_article"])){
	$articleC->supprimer_article($_POST["Ref_article"]);
	header('Location: afficher_article.php');
}

?>
