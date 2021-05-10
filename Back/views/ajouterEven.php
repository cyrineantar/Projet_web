<?php
    include_once '../Model/Even.php';
    include_once '../Controller/EvenC.php';

    $error = "";

    // create evenement
    $even = null;

    // create an instance of the controller
    $evenC = new EvenC();
    if (
        isset($_POST["nom_even"]) && 
        isset($_POST["date_even"]) && 
        isset($_POST["localisation"]) &&
        isset($_POST["description"]) &&  
        isset($_POST["id_catg_even"]) 
      
    ) {
        if (
            !empty($_POST["nom_even"]) && 
            !empty($_POST["date_even"]) && 
            !empty($_POST["localisation"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["id_catg_even"]) 
           
        ) {
            $even = new Even(
                $_POST['nom_even'],
                $_POST['date_even'],
                $_POST['localisation'],
                $_POST['description'],
                $_POST['id_catg_even'] 
            
            );
            $evenC->ajouterEven($even);
            header('Location: afficherEven.php');
         
        }
        else
            echo "vérifier les champs";
    }

    
?>


