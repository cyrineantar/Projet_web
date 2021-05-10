<?php
include_once '../Back/model/Categorie.php';
include_once '../Back/controller/CategorieC.php';
include "../Back/config.php";

$db = config::getConnexion();
$Id_categorie=$_POST['Id_categorie'];
$Nom_categorie= $_POST['Nom_categorie'];
$Type_categorie= $_POST['Type_categorie'];


$categoriec=new CategorieC();
$categoriec->modifier_categorie($Id_categorie,$Nom_categorie,$Type_categorie);
header('Location:afficher_categorie.php');
?>