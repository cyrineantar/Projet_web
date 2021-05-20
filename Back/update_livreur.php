<?php
include_once '../Back/model/Livreur.php';
include_once '../Back/controller/LivreurC.php';
include "../Back/config.php";

session_start();
$db = config::getConnexion();
$Id_livreur=$_POST['Id_livreur'];
$Nom_livreur= $_POST['Nom_livreur'];
$Num_livreur= $_POST['Num_livreur'];
$Destination= $_POST['Destination'];



$livreurc=new LivreurC();
$livreurc->modifier_livreur($Id_livreur,$Nom_livreur,$Num_livreur,$Destination);
header('Location:afficher_livreur.php');
?>