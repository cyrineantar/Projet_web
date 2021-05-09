<?PHP 


class Categorie_evenC {
		
    function ajouterCategorie_even($Categorie_even){
        $sql="INSERT INTO Categorie_evenements (nom_catg_even, type_catg_even) 
        VALUES (:nom_catg_even,:type_catg_even)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'nom_catg_even' => $Categorie_even->getNom_catg_even(),
                'type_catg_even' => $Categorie_even->getType_catg_even(),
            
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function afficherCategories(){
			
		$sql="SELECT * FROM categorie_evenements";
		$db = config::getConnexion();
		try{
			$listeCategorie = $db->query($sql);
			return $listeCategorie;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}

    function supprimerCategorie($id_catg_even){
		$sql="DELETE FROM categorie_evenements where id_catg_even= :id_catg_even";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_catg_even',$id_catg_even);
		try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}
?>