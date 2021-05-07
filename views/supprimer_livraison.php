<?PHP
 include_once '../Back/model/Livraison.php';
 include_once '../Back/controller/LivraisonC.php';
 include "../Back/config.php";
$livraisonC=new LivraisonC();
if (isset($_POST["Id_livraison"])){
	$livraisonC->supprimer_livraison($_POST["Id_livraison"]);
	header('Location: afficher_livraison.php');
}

?>