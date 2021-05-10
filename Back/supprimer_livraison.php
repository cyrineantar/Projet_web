<?PHP
 include_once '../model/Livraison.php';
 include_once '../controller/LivraisonC.php';
$livraisonC=new LivraisonC();
if (isset($_POST["Id_livraison"])){
	$livraisonC->supprimer_livraison($_POST["Id_livraison"]);
	header('Location: ajouter_livraison.php');
}

?>