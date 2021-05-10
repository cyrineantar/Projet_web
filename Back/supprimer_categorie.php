<?PHP
 include_once '../Back/model/Categorie.php';
 include_once '../Back/controller/CategorieC.php';
 include "../Back/config.php";
$categorieC=new CategorieC();
if (isset($_POST["Id_categorie"])){
	$categorieC->supprimer_categorie($_POST["Id_categorie"]);
	header('Location: afficher_categorie.php');
}

?>


