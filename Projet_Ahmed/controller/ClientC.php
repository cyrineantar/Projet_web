<?PHP 
	include "../config.php";
	require_once '../Model/Client.php';

	class ClientC {
		
		function ajouterClient($Client){
			$sql="INSERT INTO Clients (nom_client, prenom_client, num_client, adresse_client, carte_fidelite, id_admin) 
			VALUES (:nom_client,:prenom_client,:num_client, :adresse_client, :carte_fidelite, :id_admin)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_client' => $Client->getNom_client(),
					'prenom_client' => $Client->getPrenom_client(),
					'num_client' => $Client->getNum_client(),
					'adresse_client' => $Client->getAdresse_client(),
					'carte_fidelite' => $Client->getCarte_fidelite(),
                    'id_admin' => $Client->getId_admin()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    }
?>