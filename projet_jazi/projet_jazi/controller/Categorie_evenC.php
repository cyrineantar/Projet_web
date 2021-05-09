<?PHP 
include "../config.php";
require_once '../model/Categorie_even.php';
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
    function afficherCategorie(){
			
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
    function supprimerCategorie($Id_catg_even){
		$sql="DELETE FROM categorie_evenements where Id_catg_even= :Id_catg_even";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_catg_even',$Id_catg_even);
		try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierCategorie($Categorie, $Id_catg_even){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE categorie_evenements SET 
            
                    nom_catg_even = :nom_catg_even,
                    type_catg_even = :type_catg_even
                    
                WHERE id_catg_even = :id_catg_even'
            );
            $query->execute([
        
               'nom_catg_even' => $Categorie->getNom_catg_even(),
                'type_catg_even' => $Categorie->getType_catg_even(),
                'id_catg_even' => $Id_catg_even,
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function recupererCategorie($Id_catg_even){
        $sql="SELECT * from categorie_evenements where id_catg_even=$id_catg_even";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    

}
?>