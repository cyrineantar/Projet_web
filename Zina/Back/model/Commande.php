<?PHP 
  class Commande
  {
    private ?int $id_commande = null;
    private ?float $prix_total = null;
    private ?int $id_client = null;
    private ?int $id_livraison = null;

    function __construct(float $prix_total, int $id_client, int $id_livraison){
			
        $this->prix_total=$prix_total;
        $this->id_client=$id_client;
        $this->id_livraison=$id_livraison;
      
    }
    function getId_commande(): int{
        return $this->id_commande;
    }

    
     function getPrix_total(): float{
        return $this->prix_total;
    } 
    
    
    function getId_client(): int{
        return $this->id_client;
    }

    
    function getId_livraison(): int{
        return $this->id_livraison;
    }

    function setPrix_total(float $prix_total): void{
        $this->prix_total=$prix_total;
    }
    
    function setId_client(int $id_client): void{
        $this->id_client=$id_client;
    }

    function setId_livraison(int $id_livraison): void{
        $this->id_livraison=$id_livraison;
    }
  
    
  }
?>