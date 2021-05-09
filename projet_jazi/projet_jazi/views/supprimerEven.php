<?PHP
include "../config.php";
include "../Controller/EvenC.php";
$evenC=new EvenC();
if (isset($_POST["Id_even"])){
	$evenC->supprimerEven($_POST["Id_even"]);
	header('Location: afficherEven.php');
}

?>