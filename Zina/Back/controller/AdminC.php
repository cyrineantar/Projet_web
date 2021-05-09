<?PHP 

	class AdminC {
		
		function ajouterAdmin($admin){
			$sql="INSERT INTO admins (nom_admin, mot_de_passe) 
			VALUES (:nom_admin,:mot_de_passe)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_admin' => $admin->getNom_admin(),
					'mot_de_passe' => $admin->getMot_de_passe(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    
	    function afficherAdmin(){
			
		$sql="SELECT * FROM admins";
		$db = config::getConnexion();
		try{
			$listeAdmin = $db->query($sql);
			return $listeAdmin;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
	function supprimerAdmin($Id_admin){
		$sql="DELETE FROM admins where Id_admin = :Id_admin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_admin',$Id_admin);
		try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function modifierAdmin($admin, $Id_admin){
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE clients SET 
					nom_admin = :nom_admin, 
					mot_de_passe = :mot_de_passe,
					
				WHERE Id_admin = :Id_admin'
			);
			$query->execute([
				'nom_admin' => $admin->getNom_admin(),
				'mot_de_passe' => $admin->getMot_de_passe(),
				'Id_admin' => $Id_admin
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
	function recupererAdmin($Id_admin){
		$sql="SELECT * from admins where Id_admin=$Id_admin";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$listeAdmin=$query->fetch();
			return $listeAdmin;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
}
?>