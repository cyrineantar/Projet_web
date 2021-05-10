<?PHP
 include_once '../Back/model/Article.php';
 include_once '../controller/ArticleC.php';
 include "../Back/config.php";
$articleC=new ArticleC();
if (isset($_POST["Ref_article"])){
	$articleC->supprimer_article($_POST["Ref_article"]);
	header('Location: afficher_article.php');
}

?>
