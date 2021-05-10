<?php 


class LivraisonC
{
    public function ajouter_livraison($livraison)
    {
        $sql="insert into livraisons(Date_livraison,Methode_de_livraison,Methode_de_payement) values(:Date_livraison,:Methode_de_livraison,:Methode_de_payement)";
        $db=config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $Date_livraison=$livraison->getDate_livraison();
    
        $Methode_de_livraison=$livraison->getMethode_de_livraison();

        $Methode_de_payement=$livraison->getMethode_de_payement();

        
    
        $req->bindValue(':Date_livraison',$Date_livraison);
        
        $req->bindValue(':Methode_de_livraison',$Methode_de_livraison);
                
        $req->bindValue(':Methode_de_payement',$Methode_de_payement);

            
        $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
        
}
public function afficher_livraison()
{
			$sql="SELECT * From livraisons ";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}

public function supprimer_livraison($Id_livraison){
    $sql="DELETE FROM livraisons where Id_livraison=:Id_livraison";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':Id_livraison',$Id_livraison);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }   
}
function modifier_livraison(int $Id_livraison,string $Date_livraison, string $Methode_de_livraison, string $Methode_de_payement)
        {
            $db = config::getConnexion();
            $sql = "UPDATE livraisons SET Id_livraison='$Id_livraison'  , Date_livraison='$Date_livraison' , Methode_de_livraison='$Methode_de_livraison' , Methode_de_payement='$Methode_de_payement' WHERE Id_livraison='$Id_livraison'";
            $req = $db->prepare($sql);
		    $req->execute();
           
        }


}
?>