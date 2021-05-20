<?php
include_once '../Back/model/Livraison.php';
include_once '../Back/controller/LivraisonC.php';
include "../Back/config.php";

session_start();
$db = config::getConnexion();
$Id_livraison=$_POST['Id_livraison'];
$Date_livraison= $_POST['Date_livraison'];
$Methode_de_livraison= $_POST['Methode_de_livraison'];
$Methode_de_payement= $_POST['Methode_de_payement'];



$livraisonc=new LivraisonC();
$livraisonc->modifier_livraison($Id_livraison,$Date_livraison,$Methode_de_livraison,$Methode_de_payement);
header('Location:afficher_livraison.php');
?>