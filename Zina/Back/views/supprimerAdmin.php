<?PHP
	include "../controller/AdminC.php";
    include "../config.php";
$admin=new AdminC();
if (isset($_POST["Id_admin"])){
	$admin->supprimerAdmin($_POST["Id_admin"]);
	header('Location: afficherAdmin.php');
}

?>