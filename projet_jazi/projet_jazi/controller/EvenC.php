<?PHP 


class EvenC {
		
    function ajouter_even($Even){
        $sql="INSERT INTO evenements (nom_even, date_even,localisation,Description,id_catg_even) 
        VALUES (:nom_even,:date_even,:localisation,:Description,:id_catg_even)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'nom_even' => $Even->getNom_even(),
                'date_even' => $Even->getDate_even(),
                'localisation' => $Even->getLocalisation(),
                'Description' => $Even->getDescription(),
                'id_catg_even' => $Even->getId_catg_even(),



            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function afficherEven(){
			
		$sql="SELECT * FROM evenements";
		$db = config::getConnexion();
		try{
			$listeEven = $db->query($sql);
			return $listeEven;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
    function supprimerEven($Id_even){
		$sql="DELETE FROM evenements where Id_even= :Id_even";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_even',$Id_even);
		try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>