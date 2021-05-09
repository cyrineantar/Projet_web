<?PHP
	include "../controller/CommandeC.php";
    include "../config.php";

	$commandeC=new CommandeC();
	
	if (isset($_POST["id_commande"])){
		$commandeC->supprimerCommande($_POST["id_commande"]);
		header('Location:afficherCommandes.php');
	}

?>