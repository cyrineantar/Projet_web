<?PHP
	class Admin{
		private ?int $Id_admin = null;
		private ?string $nom_admin = null;
		private ?string $mot_de_passe = null;
		private ?string $Id_client = null;
		
		function __construct(string $nom_admin, string $mot_de_passe,string $Id_client){
			
			$this->nom_admin=$nom_admin;
			$this->mot_de_passe=$mot_de_passe;
			$this->Id_client=$Id_client;
            $this->Id_admin=$Id_admin;
			
		}
		
		function getId_admin(): int{
			return $this->Id_admin;
		}
		function getId_client(): int{
			return $this->Id_client;
		}
		function getNom_admin(): string{
			return $this->nom_admin;
		}
		function getMot_de_passe(): string{
			return $this->mot_de_passe;
		}
		function setId_admin(int $Id_admin): void{
			$this->Id_admin=$Id_admin;
		}
		function setId_client(int $Id_client): void{
			$this->Id_client=$Id_client;
		}
		function setNom_admin(string $nom_client): void{
			$this->nom_client=$nom_client;
		}
		function setMot_de_passe(string $mot_de_passe): void{
			$this->mot_de_passe=$mot_de_passe;
		}
	}
?>