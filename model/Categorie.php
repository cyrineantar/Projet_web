<?php
 class categorie {
     private $Id_categorie;
      private $Nom_categorie;
      private $Type_categorie;
	 
 
    public function __construct($Nom_categorie,$Type_categorie){
		
		
		$this->Nom_categorie=$Nom_categorie;
		$this->Type_categorie=$Type_categorie;
		
		
		}
		
	
		public function setId_categorie($Id_categorie)
		{
			$this->Id_categorie=$Id_categorie;
		}
		
		public function setNom_categorie($Nom_categorie)
		{
			$this->Nom_categorie=$Nom_categorie;
		}
		
		
		public function setType_categorie($Type_categorie)
		{
			$this->Type_categorie=$Type_categorie;
		}
		
		public function getId_categorie(){
			return $this->Id_categorie;
		}
	public function getNom_categorie()
		{
			return $this->Nom_categorie;
		}
		public function getType_categorie(){
			return $this->Type_categorie;
		}
		
		
}

?>