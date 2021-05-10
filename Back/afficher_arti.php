<?php 
include "../Back/model/ArticleC.php";


 $articleC=new articleC();

$liste=$articleC->afficher_article(); 
?>
<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../asset/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="../asset/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../asset/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../asset/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="../asset/img/ico/apple-touch-icon-57x57.png">
</head>

 <tbody  Ref_article="myTable">
    
    <?PHP

foreach($liste as $row){

  ?>
    <tr>
       <td><img style="
    width: 50px;
" src="<?php echo $row['image'] ?>"></td>
      <td><?php echo $row['Nom_article'] ?></td>
 
 <td> <form method="POST" action="afficher_article.php">

                             
  <button class="btn btn-primary" type="submit"><i class="fa fa-trash"></i> </button>
    <input type="hidden" value="<?PHP echo $row['Ref_article']; ?>" name="Ref_article">       

    
  </form>

     </td>
  
    
    </tr>
                  <?PHP
                  
}
?>
  
  </tbody>
</table>
</html>