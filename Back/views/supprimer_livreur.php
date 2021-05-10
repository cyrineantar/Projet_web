<?PHP
 include_once '../model/Livreur.php';
 include_once '../controller/LivreurC.php';
$livreurC=new LivreurC();
if (isset($_POST["Id_livreur"])){
	$livreurC->supprimer_livreur($_POST["Id_livreur"]);
	header('Location: ajouter_livreur.php');
}

?>