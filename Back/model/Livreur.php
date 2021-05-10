<?php
 class livreur
 {
         private $Id_livreur;
         private $Nom_livreur;
	     private $Num_livreur;
	     private $Destination;
        
 
    public function __construct($Nom_livreur,$Num_livreur,$Destination)
        {
		
		$this->Nom_livreur=$Nom_livreur;
		$this->Num_livreur=$Num_livreur;
		$this->Destination=$Destination;
		
		
		}
		
	
      
		public function setId_livreur($Id_livreur)
		{
			$this->Id_livreur=$Id_livreur;
		}
		
		public function setNom_livreur($Nom_livreur)
		{
			$this->Nom_livreur=$Nom_livreur;
		}
		
		
		public function setNum_livreur($Num_livreur)
		{
			$this->Num_livreur=$Num_livreur;
		}
		
		
	public function setDestination($Destination)
		{
			$this->Destination=$Destination;
		}



	    public function getId_livreur()
		{
			return $this->Id_livreur;
		}

		public function getNom_livreur()
        {
			return $this->Nom_livreur;
		}
		
		public function getNum_livreur()
        {
			return $this->Num_livreur;
		}
		
	    public function getDestination(){
			return $this->Destination;
		}
		
        
}

?>