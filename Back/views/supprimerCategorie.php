<?PHP
include "../Controller/Categorie_evenC.php";
$categorie_evenC=new Categorie_evenC();
if (isset($_POST["Id_catg_even"])){
	$categorie_evenC->supprimerCategorie($_POST["Id_catg_even"]);
	header('Location: afficherCategorie.php');
}

?>