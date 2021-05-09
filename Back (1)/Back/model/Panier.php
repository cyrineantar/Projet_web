<?PHP 
  class Panier
  {
    private ?int $id_panier = null;
    private ?int $ref_article = null;
    private ?int $id_commande = null;

    function __construct(int $ref_article, int $id_commande){
			
        $this->ref_article=$ref_article;
        $this->id_commande=$id_commande;
       
      
    }
    function getId_panier(): int{
        return $this->id_panier;
    }

    
     function getRef_article(): int{
        return $this->ref_article;
    } 
    
    
    function getId_commande(): int{
        return $this->id_commande;
    }

    
    function setRef_article(int $ref_article): void{
        $this->ref_article=$ref_article;
    }
    
    function setId_commande(int $id_commande): void{
        $this->id_commande=$id_commande;
    }

 
  
    
  }
?>