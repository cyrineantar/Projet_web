<?PHP
	class Categorie_even{
		private ?int $id_catg_even = null;
		private ?string $nom_catg_even= null;
		private ?string $type_catg_even = null;
		
		function __construct(string $nom_catg_even, string $type_catg_even){
			
			$this->nom_catg_even=$nom_catg_even;
			$this->type_catg_even=$type_catg_even;
			
		}
		
		function getId_catg_even(): int{
			return $this->id_catg_even;
		}
		function getNom_catg_even(): string{
			return $this->nom_catg_even;
		}
		
        function getType_catg_even(): string{
			return $this->type_catg_even;
		} 

        function setNom_catg_even(string $nom_catg_even): void{
			$this->nom_catg_even=$nom_catg_even;
		}
		function setType_catg_even(string $type_catg_even): void{
			$this->type_catg_even=$type_catg_even;
		}
	
	}
?>