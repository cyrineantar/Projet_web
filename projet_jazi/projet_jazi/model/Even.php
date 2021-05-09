<?PHP
class Even{
    private ?int $id_even  = null;
	private ?string $nom_even = null;
    private ?string $date_even = null;
    private ?string $Description = null;
    private ?string $localisation = null;
    private ?int $id_catg_even = null;


	
	function __construct( string $nom_even,string $date_even,string $localisation,string $Description,int $id_catg_even){
        
		$this->nom_even=$nom_even;
        $this->date_even=$date_even;
        $this->localisation=$localisation;
        $this->Description=$Description;
        $this->id_catg_even=$id_catg_even;

		
	}
    function getId_even(): int{
		return $this->id_even;
	}
	function getNom_even(): string{
		return $this->nom_even;
	}
    function getDate_even():string{
		return $this->date_even;
	}
	function getLocalisation(): string{
		return $this->localisation;
	}
    function getDescription(): string{
		return $this->Description;
	}
    function getId_catg_even(): int{
        return $this->id_catg_even;
    }
    
	
	
	function setNom_even($nom_even) :void{
		$this->nom_even=$nom_even;
	}
    function setDate_even($date_even): void{
		$this->date_even=$date_even;
	}
    function setLocalisation($localisation): void{
		$this->localisation=$localisation;
	}
	    function setDescription($Description): void{
		$this->Description=$Description;
	}
	function setId_catg_even($id_catg_even): void{
		$this->id_catg_even=$id_catg_even;
	}
    
	
}

?>