<?php 


class LivreurC
{
    public function ajouter_livreur($livreur)
    {
        $sql="insert into livreurs(Nom_livreur,Num_livreur,Destination) values(:Nom_livreur,:Num_livreur,:Destination)";
        $db=config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $Nom_livreur=$livreur->getNom_livreur();
    
        $Num_livreur=$livreur->getNum_livreur();

        $Destination=$livreur->getDestination();
    
        $req->bindValue(':Nom_livreur',$Nom_livreur);
        
        $req->bindValue(':Num_livreur',$Num_livreur);
                
        $req->bindValue(':Destination',$Destination);
            
        $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
        
}
public function afficher_livreur()
{
			$sql="SELECT * From livreurs ";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}

function modifier_livreur(int $Id_livreur,string $Nom_livreur, string $Num_livreur, string $Destination)
        {
            $db = config::getConnexion();
            $sql = "UPDATE livreurs SET Id_livreur='$Id_livreur'  , Nom_livreur='$Nom_livreur' , Num_livreur='$Num_livreur' , Destination='$Destination' WHERE Id_livreur='$Id_livreur'";
            $req = $db->prepare($sql);
		    $req->execute();
           
        }

public function supprimer_livreur($Id_livreur){
    $sql="DELETE FROM livreurs where Id_livreur=:Id_livreur";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':Id_livreur',$Id_livreur);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }   
}

}
?>