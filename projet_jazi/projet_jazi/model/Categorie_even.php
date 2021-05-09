<?PHP
	class Categorie_even{
		
		private $id_catg_even = null;
		private $nom_catg_even = null;
		private $type_catg_even = null;
		
		function __construct($nom_catg_even, $type_catg_even){
			
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

		function setId_catg_even($id_catg_even){
			$this->id_catg_even=$id_catg_even;
		}
        function setNom_catg_even($nom_catg_even){
			$this->nom_catg_even=$nom_catg_even;
		}
		function setType_catg_even($type_catg_even){
			$this->type_catg_even=$type_catg_even;
		}
	
	}
?>