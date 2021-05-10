<?PHP 
      
     class CommandeC 
     {
  
        function ajouterCommande($Commande){
			$sql="INSERT INTO Commandes (prix_total, id_client, id_livraison) 
			VALUES (:prix_total,:id_client,:id_livraison)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
                    'prix_total' => $Commande->getPrix_total(),
					'id_client' => $Commande->getId_client(),
					'id_livraison' => $Commande->getId_livraison(),
				
                ]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

        function afficherCommandes(){
			
			$sql="SELECT * FROM commandes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}


		function supprimerCommande($id_commande){
			$sql="DELETE FROM commandes WHERE id_commande= :id_commande";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_commande',$id_commande);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
       

		function modifierCommande($Commande, $id_commande){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commandes SET 
						prix_total = :prix_total, 
						id_client = :id_client,
						id_livraison = :id_livraison
						
					WHERE id_commande = :id_commande'
				);
				$query->execute([
					'prix_total' => $Commande->getPrix_total(),
					'id_client' => $Commande->getId_client(),
					'id_livraison' => $Commande->getId_livraison(),
					'id_commande' => $id_commande
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererCommande($id_commande){
			$sql="SELECT * from commandes where id_commande=$id_commande";
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

		function recupererCommande1($id_commande){
			$sql="SELECT * from commandes where id_commande=$id_commande";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		


     }
?>