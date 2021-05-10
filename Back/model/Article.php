<?php
 class Article{
     private $Ref_article;
      private $Nom_article;
	 private $image;
	  private $Description;
	   private $Prix_article;
	    private $Id_categorie;

    public function __construct($Nom_article,$image,$Description,$Prix_article){
		
		
		$this->Nom_article=$Nom_article;
		$this->image=$image;
		$this->Description=$Description;
		$this->Prix_article=$Prix_article;
		
		
		}
		
		
 
      
		public function setRef_article($Ref_article)
		{
			$this->Ref_article=$Ref_article;
		}
		
		public function setNom_article($Nom_article)
		{
			$this->Nom_article=$Nom_article;
		}
		
		
		public function setimage($image)
		{
			$this->image=$image;
		}
		
		
	public function setDescription($Description)
		{
			$this->Description=$Description;
		}
		public function setPrix_article($Prix_article)
		{
			$this->Prix_article=$Prix_article;
		}
		
		public function getRef_article(){
			return $this->Ref_article;
		}
	public function getNom_article()
		{
			return $this->Nom_article;
		}
		public function getTitre(){
			return $this->titre;
		}
		
		public function getimage(){
			return $this->image;
		}
		
	public function getDescription(){
			return $this->Description;
		}
		
		public function getPrix_article(){
			return $this->Prix_article;
		}
	
}

?>