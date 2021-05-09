<?PHP 
      
     class PanierC 
     {
  
        function ajouterPanier($Panier){
			$sql="INSERT INTO paniers (ref_article, id_commande) 
			VALUES (:ref_article,:id_commande)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
                    'ref_article' => $Panier->getRef_article(),
					'id_commande' => $Panier->getId_commande(),
					
				
                ]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

        function afficherPaniers(){
			
			$sql="SELECT * FROM paniers order by ref_article";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}


        function supprimerPanier($id_panier){
			$sql="DELETE FROM paniers WHERE id_panier= :id_panier";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_panier',$id_panier);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

        function modifierPanier($Panier, $id_panier){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE paniers SET 
						ref_article = :ref_article, 
						id_commande = :id_commande
						
						
					WHERE id_panier = :id_panier'
				);
				$query->execute([
					'ref_article' => $Panier->getRef_article(),
					'id_commande' => $Panier->getId_commande(),
					'id_panier' => $id_panier
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererPanier($id_panier){
			$sql="SELECT * from paniers where id_panier=$id_panier";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$panier=$query->fetch();
				return $panier;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererPanier1($id_panier){
			$sql="SELECT * from paniers where id_panier=$id_panier";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$panier = $query->fetch(PDO::FETCH_OBJ);
				return $panier;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
       


		
       

	
		


     }
?>