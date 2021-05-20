<?php
 class categorie {
     private $Id_categorie;
      private $Nom_categorie;
     
	 
 
    public function __construct($Nom_categorie){
		
		
		$this->Nom_categorie=$Nom_categorie;
		}
		
	
		public function setId_categorie($Id_categorie)
		{
			$this->Id_categorie=$Id_categorie;
		}
		
		public function setNom_categorie($Nom_categorie)
		{
			$this->Nom_categorie=$Nom_categorie;
		}
		
		
		public function getId_categorie(){
			return $this->Id_categorie;
		}
	public function getNom_categorie()
		{
			return $this->Nom_categorie;
		}
		
		
}

?>