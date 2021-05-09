<?PHP
	class Client{
		private ?int $id_client = null;
		private ?string $nom_client = null;
		private ?string $prenom_client = null;
        private ?int $num_client = null;
		private ?string $adresse_client = null;
		private ?string $carte_fidelite = null;
		private ?int $id_admin = null;
		
		function __construct(string $nom_client, string $prenom_client, int $num_client, string $adresse_client, string $carte_fidelite, int $id_admin){
			
			$this->nom_client=$nom_client;
			$this->prenom_client=$prenom_client;
			$this->num_client=$num_client;
			$this->adresse_client=$adresse_client;
			$this->carte_fidelite=$carte_fidelite;
            $this->id_admin=$id_admin;
		}
		
		function getId_client(): int{
			return $this->id_client;
		}
		function getNom_client(): string{
			return $this->nom_client;
		}
		function getPrenom_client(): string{
			return $this->prenom_client;
		}
		function getNum_client(): int{
			return $this->num_client;
		}
		function getAdresse_client(): string{
			return $this->adresse_client;
		}
		function getCarte_fidelite(): string{
			return $this->carte_fidelite;
		}
        function getId_admin(): int{
			return $this->id_admin;
		} 
		function setNom_client(string $nom_client): void{
			$this->nom_client=$nom_client;
		}
		function setPrenom_client(string $prenom_client): void{
			$this->prenom_client=$prenom_client;
		}
		function setNum_client(int $num_client): void{
			$this->num_client=$num_client;
		}
		function setAdresse_client(string $adresse_client): void{
			$this->adresse_client=$adresse_client;
		}
		function setCarte_fidelite(string $carte_fidelite): void{
			$this->carte_fidelite=$carte_fidelite;
		}
        function setId_admin(int $id_admin): void{
			$this->id_admin=$id_admin;
		}
	}
?>