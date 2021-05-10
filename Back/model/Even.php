<?PHP
class Even {

	private $id_even= null;
	private $nom_even = null;
	private $date_even = null;
	private $localisation = null;
	private $description = null;
	private $id_catg_even  = null;


     	
		function __construct($nom_even, $date_even, $localisation, $description, $id_catg_even){
			
			$this->nom_even=$nom_even;
			$this->date_even=$date_even;
			$this->localisation=$localisation;
			$this->description=$description;
			$this->id_catg_even=$id_catg_even;

			}


			function getId_even(): int{
				return $this->id_even;
			}
			function getNom_even(): string{
				return $this->nom_even;
			}
			function getDate_even(): string{
				return $this->date_even;
			} 


			function getLocalisation(): string{
				return $this->localisation;
			} 

			function getDescription(): string{
				return $this->description;
			} 

			function getId_catg_even(): int{
				return $this->id_catg_even;
			} 
	
			function setNom_even($nom_even){
				$this->nom_even=$nom_even;
			}
			function setDate_even($date_even){
				$this->date_even=$date_even;
			}
			function setLocalisation($localisation){
				$this->localisation=$localisation;
			}
           
            function setDescription($description){
				$this->description=$description;
			}

			function setId_catg_even($id_catg_even){
				$this->id_catg_even=$id_catg_even;
			}

		















}

?>