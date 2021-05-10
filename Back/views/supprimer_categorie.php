<?PHP
 include_once '../model/Categorie.php';
 include_once '../controller/CategorieC.php';
$categorieC=new CategorieC();
if (isset($_POST["Id_categorie"])){
	$categorieC->supprimer_categorie($_POST["Id_categorie"]);
	header('Location: ajouter_categorie.php');
}

?>


