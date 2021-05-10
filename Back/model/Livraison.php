<?php
 class livraison
 {
         private $Id_livraison;
         private $Date_livraison;
	     private $Methode_de_livraison;
	     private $Methode_de_payement;

 
    public function __construct($Date_livraison,$Methode_de_livraison,$Methode_de_payement)
        {
		
		$this->Date_livraison=$Date_livraison;
		$this->Methode_de_livraison=$Methode_de_livraison;
		$this->Methode_de_payement=$Methode_de_payement;
		
		}
		
	
      
		public function setId_livraison($Id_livraison)
		{
			$this->Id_livraison=$Id_livraison;
		}
		
		public function setDate_livraison($Date_livraison)
		{
			$this->Date_livraison=$Date_livraison;
		}
		
		
		public function setMethode_de_livraison($Methode_de_livraison)
		{
			$this->Methode_de_livraison=$Methode_de_livraison;
		}
		
		
	    public function setMethode_de_payement($Methode_de_payement)
		{
			$this->Methode_de_payement=$Methode_de_payement;
		}




	    public function getId_livraison()
		{
			return $this->Id_livraison;
		}

		public function getDate_livraison()
        {
			return $this->Date_livraison;
		}
		
		public function getMethode_de_livraison()
        {
			return $this->Methode_de_livraison;
		}
		
	    public function getMethode_de_payement(){
			return $this->Methode_de_payement;
		}


		
        
}

?>