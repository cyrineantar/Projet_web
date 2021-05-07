<?php 


class ArticleC{


 function ajouter_article($article){
			$sql= " insert into articles (Nom_article,image,Description,Prix_article) values(:Nom_article,:image,:Description,:Prix_article)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			
			$Nom_article=$article->getNom_article();
		
			$image=$article->getimage();
				
			$Description=$article->getDescription();
			
			$Prix_article=$article->getPrix_article();
			
			
			$req->bindValue(':Nom_article',$Nom_article);
			
			$req->bindValue(':image',$image);
					
				$req->bindValue(':Description',$Description);
				$req->bindValue(':Prix_article',$Prix_article);
					
				
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		
			
}

public function afficher_article(){
    $sql="SELECT * From articles";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}


  public function supprimer_article($Ref_article){
    $sql="DELETE FROM articles where Ref_article=:Ref_article";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':Ref_article',$Ref_article);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }   
}

/*function modifier_article($article, $Ref_article){
	try {
		$db = config::getConnexion();
		$query = $db->prepare(
			'UPDATE articles SET 
				Nom_article  = :Nom_article 
				image  = :image 
				Description  = :Description 
				Prix_article  = :Prix_article	

			WHERE Ref_article = :Ref_article'
		);
		$query->execute([
			'Nom_article' => $article->getNom_article(),
			'image' => $article->getimage(),
			'Description' => $article->getDescription(),
			'Prix_article' => $article->getPrix_article(),
			'Ref_article' => $Ref_article
			
		]);
		echo $query->rowCount() . " records UPDATED successfully <br>";
	} catch (PDOException $e) {
		$e->getMessage();
	}
}

function recupererarticle($Ref_article){
	$sql="SELECT * from articles where	Ref_article=$Ref_article";
	$db = config::getConnexion();
	try{
		$query=$db->prepare($sql);
		$query->execute();

		$article=$query->fetch();
		return $article;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function recupererarticle1($Ref_article){
	$sql="SELECT * from articles where Ref_article=$Ref_article";
	$db = config::getConnexion();
	try{
		$query=$db->prepare($sql);
		$query->execute();
		
		$article = $query->fetch(PDO::FETCH_OBJ);
		return $article;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}*/
function modifier_article(int $Ref_article, string $Nom_article, string $image   , string $Description   , string $Prix_article)
        {
            $db = config::getConnexion();
            $sql = "UPDATE articles SET Ref_article='$Ref_article'  , Nom_article='$Nom_article' , image='$image'  , Description='$Description' , Prix_article='$Prix_article'  WHERE Ref_article='$Ref_article'";
            $req = $db->prepare($sql);
		    $req->execute();
           
        }



}

?>