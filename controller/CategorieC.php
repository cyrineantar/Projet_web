<?php 

class CategorieC{

public function ajouter_categorie($categorie){
			$sql="insert into categorie_articles(Nom_categorie,Type_categorie) values(:Nom_categorie,:Type_categorie)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			
			$Nom_categorie=$categorie->getNom_categorie();
		
			$Type_categorie=$categorie->getType_categorie();
				
			
			$req->bindValue(':Nom_categorie',$Nom_categorie);
			$req->bindValue(':Type_categorie',$Type_categorie);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}

public function afficher_categorie(){
    $sql="SELECT * From categorie_articles";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}


/*public function modifier_categorie($categorie)
			{
			$sql="UPDATE categorie_articles SET Nom_categorie=:Nom_categorie,Type_categorie=:Type_categorie where Id_categorie=:Id_categorie ";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$Id_categorie=$categorie->getid_categorie();
			$Nom_categorie=$categorie->getnom_categorie();
		     $Type_categorie=$categorie->gettype_categorie();
			$req->bindValue(':Id_categorie',$Id_categorie);
			$req->bindValue(':Nom_categorie',$Nom_categorie);
			 $req->bindValue(':Type_categorie',$Type_categorie);
			  $req->execute();

			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		
}
*/
function modifier_categorie(int $Id_categorie, string $Nom_categorie, string $Type_categorie)
        {
            $db = config::getConnexion();
            $sql = "UPDATE categorie_articles SET Id_categorie='$Id_categorie'  , Nom_categorie='$Nom_categorie' , Type_categorie='$Type_categorie'  WHERE Id_categorie='$Id_categorie'";
            $req = $db->prepare($sql);
		    $req->execute();
           
        }

/*
function modifier_categorie($categorie, $Id_categorie){
	try {
		$db = config::getConnexion();
		$query = $db->prepare(
			'UPDATE categorie_articles SET 
				nom_categorie=:nom_categorie,type_categorie=:type_categorie 	

			WHERE Id_categorie = :Id_categorie'
		);
		$query->execute([
			'nom_categorie' => $categorie->getNom_categorie(),
			'type_categorie' => $categorie->getType_categorie(),
			'Id_categorie' => $Id_categorie
			
		]);
		echo $query->rowCount() . " records UPDATED successfully <br>";
	} catch (PDOException $e) {
		$e->getMessage();
	}
}*/




/*public function recuperercategorie($Id_categorie){
	$sql="SELECT * From categorie_articles where Id_categorie=".$Id_categorie."";
	$db=config::getConnexion();
	try{
		
	$categorie=$db->query($sql);
	return $categorie;
	}
	catch(Exception $e){
		die('Erreur:' .$e->getMessage());
	}
	
}*/
public function supprimer_categorie($Id_categorie){
    $sql="DELETE FROM categorie_articles where Id_categorie=:Id_categorie";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':Id_categorie',$Id_categorie);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }   
}
 /*public function chercher_categorie($categorie){
	$sql="SELECT * From categorie_articles where Id_categorie='".$Id_categorie."'";
	$db=config::getConnexion();
	try{
		
	$liste=$db->query($sql);
	return $liste;
	}
	catch(Exception $e){
		die('Erreur:' .$e->getMessage());
	}
}	*/	
}
?>