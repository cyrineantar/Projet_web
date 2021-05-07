<?php
include_once '../model/Categorie.php';
include_once '../controller/CategorieC.php';
$db = config::getConnexion();
$Id_categorie=$_POST['Id_categorie'];
$Nom_categorie= $_POST['Nom_categorie'];
$Type_categorie= $_POST['Type_categorie'];


$categoriec=new CategorieC();
$categoriec->modifier_categorie($Id_categorie,$Nom_categorie,$Type_categorie);
header('Location:afficher_categorie.php');
?>