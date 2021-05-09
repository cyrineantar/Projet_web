<?PHP
	class Admin{
		private ?int $Id_admin = null;
		private ?string $nom_admin = null;
		private ?string $mot_de_passe = null;
		
		function __construct(string $nom_admin, string $mot_de_passe){
			
			$this->nom_admin=$nom_admin;
			$this->mot_de_passe=$mot_de_passe;
            $this->Id_admin=$Id_admin;
		}
		
		function getId_admin(): int{
			return $this->Id_admin;
		}
		function getNom_admin(): string{
			return $this->nom_admin;
		}
		function getMot_de_passe(): string{
			return $this->mot_de_passe;
		}
		function setId_admin(int $Id_admin): void{
			$this->nom_client=$nom_client;
		}
		function setNom_admin(string $nom_client): void{
			$this->nom_client=$nom_client;
		}
		function setMot_de_passe(string $mot_de_passe): void{
			$this->mot_de_passe=$mot_de_passe;
		}
	}
?>