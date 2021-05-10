<?PHP
    include_once '../Back/Model/Even.php';
    include_once '../Back/Controller/EvenC.php';
	include "../Back/config.php";
$evenC=new EvenC();
if (isset($_POST["Id_even"])){
	$evenC->supprimerEven($_POST["Id_even"]);
	header('Location: afficherEven.php');
}

?>