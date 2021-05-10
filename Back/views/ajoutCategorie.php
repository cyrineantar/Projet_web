<?php
    include_once '../Model/Categorie_even.php';
    include_once '../Controller/Categorie_evenC.php';

    $error = "";

    // create categorie
    $categorie_even = null;

    // create an instance of the controller
    $categorie_evenC = new Categorie_evenC();
    if (
        isset($_POST["nom_catg_even"]) && 
        isset($_POST["type_catg_even"]) 
      
    ) {
        if (
            !empty($_POST["nom_catg_even"]) && 
            !empty($_POST["type_catg_even"]) 
           
        ) {
            $categorie_even = new Categorie_even(
                $_POST['nom_catg_even'],
                $_POST['type_catg_even'] 
            
            );
            $categorie_evenC->ajouterCategorie_even($categorie_even);
            header('Location: afficherCategorie.php');
         
        }
        else
            echo "vérifier les champs";
    }

    
?>