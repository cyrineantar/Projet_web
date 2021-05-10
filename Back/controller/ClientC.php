<?PHP 

	class ClientC {
		
		function ajouterClient($Client){
			$sql="INSERT INTO clients (nom_client, prenom_client, num_client, adresse_client, carte_fidelite, mot_de_passe) 
			VALUES (:nom_client,:prenom_client,:num_client, :adresse_client, :carte_fidelite, :mot_de_passe)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_client' => $Client->getNom_client(),
					'prenom_client' => $Client->getPrenom_client(),
					'num_client' => $Client->getNum_client(),
					'adresse_client' => $Client->getAdresse_client(),
					'carte_fidelite' => $Client->getCarte_fidelite(),
					'mot_de_passe' => $Client->getMot_de_passe(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    
	    function afficherClient(){
			
		$sql="SELECT * FROM clients";
		$db = config::getConnexion();
		try{
			$listeClient = $db->query($sql);
			return $listeClient;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
	function supprimerClient($Id_client){
		$sql="DELETE FROM clients where Id_client= :Id_client";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_client',$Id_client);
		try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function modifierClient($Client, $Id_client){
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE clients SET 
					nom_client = :nom_client, 
					prenom_client = :prenom_client,
					num_client = :num_client,
					adresse_client = :adresse_client, 
					carte_fidelite = :carte_fidelite,
					mot_de_passe = :mot_de_passe
					
				WHERE Id_client = :Id_client'
			);
			$query->execute([
				'nom_client' => $Client->getNom_client(),
				'prenom_client' => $Client->getPrenom_client(),
				'num_client' => $Client->getNum_client(),
				'adresse_client' => $Client->getAdresse_client(),
				'carte_fidelite' => $Client->getCarte_fidelite(),
				'mot_de_passe' => $Client->getMot_de_passe(),
				'Id_client' => $Id_client
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
	function recupererClient($Id_client){
		$sql="SELECT * from clients where Id_client=$Id_client";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$Client=$query->fetch();
			return $Client;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	
	 function trierNomClients(){
        $sql="SELECT * from clients ORDER BY nom_client ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	
}
?>