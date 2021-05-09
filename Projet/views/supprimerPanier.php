<?PHP
	include "../controller/PanierC.php";
    include "../config.php";

	$panierC=new PanierC();
	
	if (isset($_POST["id_panier"])){
		$panierC->supprimerPanier($_POST["id_panier"]);
		header('Location:afficherPaniers.php');
	}

?>