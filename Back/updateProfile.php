<?php
    include "../Zina/Back/controller/ClientC.php";
	include_once '../Zina/Back/model/Client.php';
    include "../Zina/Back/config.php";
$db = config::getConnexion();
$Id_client=$_POST['Id_client'];
$nom_client= $_POST['Nom_client'];
$prenom_client= $_POST['Prenom_client'];
$num_client= $_POST['Num_client'];
$adresse_client= $_POST['Adresse_client'];
$carte_fidelite= $_POST['Carte_fidelite'];
$mot_de_passe= $_POST['Mot_de_passe'];


$clientC=new ClientC();
$clientC->modifierClient($Id_client,$nom_client,$prenom_client,$num_client,$adresse_client,$carte_fidelite,$mot_de_passe);
 ?>