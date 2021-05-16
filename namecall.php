<?php
	$db_username = 'root';
    $db_password = '';
    $db_name     = 'goweb';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
          or die('could not connect to database');
		   			                 $username = $_SESSION['username'] ;
		                             $requete = "SELECT prenom_client FROM clients where 
                                     nom_client = '".$username."' ";
									 $exec_requete = mysqli_query($db,$requete);
                                     $reponse      = mysqli_fetch_array($exec_requete);
?>