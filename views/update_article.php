<?php
include_once '../model/Article.php';
include_once '../controller/ArticleC.php';
$db = config::getConnexion();
$Ref_article=$_POST['Ref_article'];
$Nom_article= $_POST['Nom_article'];
$image= $_POST['image'];
$Description= $_POST['Description'];
$Prix_article= $_POST['Prix_article'];


$articlec=new ArticleC();
$articlec->modifier_article($Ref_article,$Nom_article,$image,$Description,$Prix_article);
header('Location:afficher_article.php');
?>