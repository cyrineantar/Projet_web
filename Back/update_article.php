<?php
include_once '../Back/model/Article.php';
include_once '../Back/controller/ArticleC.php';
include "../Back/config.php";


session_start();
$db = config::getConnexion();
$Ref_article=$_POST['Ref_article'];
$Nom_article= $_POST['Nom_article'];
$image= $_POST['image'];
$Description= $_POST['Description'];
$Prix_article= $_POST['Prix_article'];
$Id_categorie= $_POST['Id_categorie'];


$articlec=new ArticleC();
$articlec->modifier_article($Ref_article,$Nom_article,$image,$Description,$Prix_article,$Id_categorie);
header('Location:afficherArticles.php');
?>