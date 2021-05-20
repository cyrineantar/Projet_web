<?php
 class livreur
 {
         private $Id_livreur;
         private $Nom_livreur;
	     private $Num_livreur;
	     private $Destination;
		 private $Id_livraison;
        
 
    public function __construct($Nom_livreur,$Num_livreur,$Destination,$Id_livraison)
        {
		$this->Nom_livreur=$Nom_livreur;
		$this->Num_livreur=$Num_livreur;
		$this->Destination=$Destination;
		$this->Id_livraison=$Id_livraison;
		
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

		public function setId_livraison($Id_livraison)
		{
			$this->Id_livraison=$Id_livraison;
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

		public function getId_livraison(){
			return $this->Id_livraison;
		}
		
        
}

?>