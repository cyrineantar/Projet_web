<?PHP 


class EvenC {
		
    function ajouterEven($Even){
        $sql="INSERT INTO evenements (nom_even, date_even, localisation, description, id_catg_even) 
        VALUES (:nom_even, :date_even, :localisation, :description, :id_catg_even)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'nom_even' => $Even->getNom_even(),
                'date_even' => $Even->getDate_even(),
                'localisation' => $Even->getLocalisation(),
                'description' => $Even->getDescription(),
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

function modifierEven($Even, $id_even){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE evenements SET 
        
                nom_even = :nom_even,
                date_even = :date_even,
                localisation = :localisation,
                description = :description,
                id_catg_even = :id_catg_even



                
            WHERE id_even = :id_even'
        );
        $query->execute([
    
           'nom_even' => $Even->getNom_even(),
            'date_even' => $Even->getDate_even(),
            'localisation' => $Even->getLocalisation(),
            'description' => $Even->getDescription(),
            'id_catg_even' => $Even->getId_catg_even(),
            'id_even' => $id_even

        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
function recupererEven($id_even){
    $sql="SELECT * from evenements where id_even=$id_even";
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