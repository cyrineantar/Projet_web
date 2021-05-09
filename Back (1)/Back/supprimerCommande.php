<?PHP
	include "../Back/controller/CommandeC.php";
    include "../Back/config.php";

	$commandeC=new CommandeC();
	
	if (isset($_POST["id_commande"])){
		$commandeC->supprimerCommande($_POST["id_commande"]);
		header('Location:afficherCommandes.php');
	}

?>