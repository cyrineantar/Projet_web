<?PHP
	include "../Zina/Back/controller/PanierC.php";
    include "../Zina/Back/config.php";

	$panierC=new PanierC();
	
	if (isset($_POST["id_panier"])){
		$panierC->supprimerPanier($_POST["id_panier"]);
		header('Location:cart1.php');
	}

?>