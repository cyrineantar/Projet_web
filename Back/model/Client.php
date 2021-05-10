<?PHP
	class Client{
		private ?int $id_client = null;
		private ?string $nom_client = null;
		private ?string $prenom_client = null;
        private ?int $num_client = null;
		private ?string $adresse_client = null;
		private ?string $carte_fidelite = null;
		private ?string $mot_de_passe = null;
		
		function __construct(string $nom_client, string $prenom_client, int $num_client, string $adresse_client, string $carte_fidelite, string $mot_de_passe){
			
			$this->nom_client=$nom_client;
			$this->prenom_client=$prenom_client;
			$this->num_client=$num_client;
			$this->adresse_client=$adresse_client;
			$this->carte_fidelite=$carte_fidelite;
            $this->mot_de_passe=$mot_de_passe;
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
        function getMot_de_passe(): string{
			return $this->mot_de_passe;
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
        function setMot_de_passe(string $mot_de_passe): void{
			$this->mot_de_passe=$mot_de_passe;
		}
	}
?>