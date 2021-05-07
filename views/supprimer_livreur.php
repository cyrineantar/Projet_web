<?PHP
 include_once '../Back/model/Livreur.php';
 include_once '../Back/controller/LivreurC.php';
 include "../Back/config.php";
$livreurC=new LivreurC();
if (isset($_POST["Id_livreur"])){
	$livreurC->supprimer_livreur($_POST["Id_livreur"]);
	header('Location: afficher_livreur.php');
}

?>