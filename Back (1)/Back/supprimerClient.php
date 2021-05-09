<?PHP
include "../Back/Controller/ClientC.php";
include "../Back/config.php";
$client=new ClientC();
if (isset($_POST["Id_client"])){
	$client->supprimerClient($_POST["Id_client"]);
	header('Location: afficherClient.php');
}

?>