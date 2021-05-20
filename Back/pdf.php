<?PHP 
include_once '../BacK/pdf/fpdf.php';
$db = new PDO('mysql:host=localhost;dbname=goWeb','root','');

   class myPDF extends FPDF{
function header(){
    $this->Image('ziiina.png',20,20);
    $this->SetFont('Arial','B',24);
    $this->Cell(276,5,'Liste des categories',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',18);
    $this->Cell(276,13,'ziiina',0,0,'C');
    $this->Ln(20);
}
function footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function headerTable(){
    $this->SetFont('Times','B',16);
    $this->Cell(80,10,'Id_categorie',1,0,'C');
    $this->Cell(80,10,'Nom_categorie',1,0,'C');
   
    
    $this->Ln();
}
function viewTable($db){
    $this->SetFont('Times','',12);
    $liste = $db->query('SELECT * FROM categorie_articles');
    while($data = $liste->fetch(PDO::FETCH_OBJ)){
        $this->Cell(80,10,$data->Id_categorie,1,0,'C');
        $this->Cell(80,10,$data->Nom_categorie,1,0,'C');
     
       
        $this->Ln();
    }

}

   }
   $pdf = new myPDF();
   $pdf->AliasNbPages();
   $pdf->AddPage('L','A4',0);
   $pdf->headerTable();
   $pdf->viewTable($db);
   $pdf->Output();
?>