<?PHP
	include "../Back/controller/AdminC.php";
    include "../Back/config.php";
$admin=new AdminC();
if (isset($_POST["Id_admin"])){
	$admin->supprimerAdmin($_POST["Id_admin"]);
	header('Location: afficherAdmin.php');
}

?>