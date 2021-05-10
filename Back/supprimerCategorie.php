<?PHP
    include_once '../Back/Model/Categorie_even.php';
    include_once '../Back/Controller/Categorie_evenC.php';
    include "../Back/config.php";
$categorie_evenC=new Categorie_evenC();
if (isset($_POST["Id_catg_even"])){
	$categorie_evenC->supprimerCategorie($_POST["Id_catg_even"]);
	header('Location: afficherCategorie.php');
}

?>