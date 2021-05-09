<?PHP
include "../Controller/Categorie_evenC.php";
include "../config.php";
$categorie_evenC=new Categorie_evenC();
if (isset($_POST["id_catg_even"])){
	$categorie_evenC->supprimerCategorie($_POST["id_catg_even"]);
	header('Location: afficherCategories.php');
}

?>