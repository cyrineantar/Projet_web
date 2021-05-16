<?PHP
class Even {

	private $id_even= null;
	private $nom_even = null;
	private $date_deb = null;
	private $date_fin = null;
	private $localisation = null;
	private $description = null;
	private $id_catg_even  = null;


     	
		function __construct($nom_even, $date_deb,$date_fin, $localisation, $description, $id_catg_even){
			
			$this->nom_even=$nom_even;
			$this->date_deb=$date_deb;
			$this->date_fin=$date_fin;
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
			function getDate_deb(): string{
				return $this->date_deb;
			}
			function getDate_fin(): string{
				return $this->date_fin;
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
			function setDate_deb($date_deb){
				$this->date_deb=$date_deb;
			}
			function setDate_fin($date_fin){
				$this->date_fin=$date_fin;
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