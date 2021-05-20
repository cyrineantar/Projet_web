<?PHP
	include "../Zina/Back/controller/CommandeC.php";
    include "../Zina/Back/config.php";

	$commandeC=new CommandeC();
	
	if (isset($_POST["id_commande"])){
		$commandeC->supprimerCommande($_POST["id_commande"]);
		header('Location:cart1.php');
	}

?>