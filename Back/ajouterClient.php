<?php
	include "../Back/controller/ClientC.php";
	include_once '../Back/model/Client.php';
    include "../Back/config.php";

    session_start();
    include "../Back/namecall.php";
    $error = "";

    // create user
    $client = null;

    // create an instance of the controller
    $clientC = new ClientC();
    if (
        isset($_POST["nom_client"]) && 
        isset($_POST["prenom_client"]) &&
        isset($_POST["num_client"]) && 
        isset($_POST["adresse_client"]) && 
        isset($_POST["carte_fidelite"]) &&
        isset($_POST["mot_de_passe"]) 
    ) {
        if (
            !empty($_POST["nom_client"]) && 
            !empty($_POST["prenom_client"]) && 
            !empty($_POST["num_client"]) && 
            !empty($_POST["adresse_client"]) && 
            !empty($_POST["carte_fidelite"]) && 
            !empty($_POST["mot_de_passe"]) 
        ) {
            $client = new Client(
                $_POST['nom_client'],
                $_POST['prenom_client'], 
                $_POST['num_client'],
                $_POST['adresse_client'],
                $_POST['carte_fidelite'],
                $_POST['mot_de_passe']
            );
            $clientC->ajouterClient($client);
            header('Location:afficherClient.php');
        }
        else
            $error = "Missing information";
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Back Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 6 pending letter</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
							
                            <span class="username">
							<?php
                            if($_SESSION['username'] !== ""){

                            echo $reponse['nom_admin'];
							}
                            ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Gest Clients</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="afficherClient.php">Afficher Clients</a></li>
              <li><a class="" href="ajouterClient.php">Ajouter Clients</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Gest Admins</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
              <ul class="sub">
              <li><a class="" href="afficherAdmin.php">Afficher</a></li>
              <li><a class="" href="AjouterAdmin.php"><span>Ajouter</span></a></li>
            </ul>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Gest Commande</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
              <ul class="sub">
              <li><a class="" href="afficherCommandes.php">Afficher</a></li>
              <li><a class="" href="AjouterCommande.php"><span>Ajouter</span></a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Gest Articles</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
              <ul class="sub">
              <li><a class="" href="afficherArticles.php">Afficher</a></li>
              <li><a class="" href="ajouterArticle.php"><span>Ajouter</span></a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Gest Categories</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
              <ul class="sub">
              <li><a class="" href="afficher_categorie.php">Afficher</a></li>
              <li><a class="" href="ajouter_categorie.php"><span>Ajouter</span></a></li>
            </ul>
          </li>
		  
		  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Categories-Even</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
              <ul class="sub">
              <li><a class="" href="afficherCategorie.php">Afficher</a></li>
              <li><a class="" href="ajoutCategorie.php"><span>Ajouter</span></a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Gest Livraisons</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="afficher_livraison.php">Afficher Livraisons</a></li>
              <li><a class="" href="ajouter_livraison.php"><span>Ajouter Livraisons</span></a></li>
			  <li><a class="" href="afficher_livreur.php">Afficher Livreurs</a></li>
              <li><a class="" href="ajouter_livreur.php"><span>Ajouter Livreurs</span></a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Evenements</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
              <ul class="sub">
              <li><a class="" href="afficherEven.php">Afficher</a></li>
              <li><a class="" href="AjouterEven.php"><span>Ajouter</span></a></li>
            </ul>
          </li>
		  
		  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Paniers</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
              <ul class="sub">
              <li><a class="" href="afficherPaniers.php">Afficher</a></li>
              <li><a class="" href="AjouterPanier.php"><span>Ajouter</span></a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Ajouter Clients</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Gestion des Clients</li>
              <li><i class="fa fa-files-o"></i>Ajouter Clients</li>
            </ol>
          </div>
        </div>
    <!--main content start-->
    <button><a href="afficherClient.php">Retour ?? la liste</a></button>
        <hr>
        <hr>
        <div id_client="error">
            <?php echo $error; ?>
        </div>
        
        <form id="myForm" action="" method="POST" onsubmit="return verifform(this)">
            <table border="2" align="center" class="table">

                <tr>
                    <td rowspan='6' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom_client">Nom d'utilisateur:
                        </label>
                    </td>
                    <td><input type="text" name="nom_client" id_client="nom_client" maxlength="20"/></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom_client">Nom & Prenom du client:
                        </label>
                    </td>
                    <td><input type="text" name="prenom_client" id_client="prenom_client" onblur="allLetter(this)" maxlength="20"/></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="num_client">Num_client:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="num_client" id_client="num_client"  maxlength="8" onblur="allnumeric(this)"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="adresse_client">Adresse_client:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse_client" id_client="adresse_client" onblur="checkEmail(this.value)" maxlength="20" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="carte_fidelite">Carte_fidelite:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="carte_fidelite" id_client="carte_fidelite" onblur="allnumeric(this)"  maxlength="4"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mot_de_passe">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="mot_de_passe" id_client="mot_de_passe" maxlength="20"/>
                    </td>
                </tr>
        
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"/> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" />
                    </td>
                </tr>
            </table>
        </form>
		<script>
function validateForm() {
      var Id_client= document.forms["myForm"]["Id_client"].value;
  var nom_client= document.forms["clients"]["nom_client"].value;
    var prenom_client = document.forms["myForm"]["prenom_client"].value;
    var num_client = document.forms["myForm"]["num_client"].value;
     var adresse_client = document.forms["myForm"]["adresse_client"].value;
	 var carte_fidelite = document.forms["myForm"]["carte_fidelite"].value;
	 var mot_de_passe = document.forms["myForm"]["mot_de_passe"].value;

  if (nom_client == "") {
    alert("nom vide");
    return false;
  }
  if (prenom_client == "") {
    alert("prenom vide");
    return false;
  }
  if (num_client == 0) {
    alert("numero vide");
    return false;
  }
    if (adresse_client == "") {
    alert("adresse vide");
    return false;
  }
    if (carte_fidelite == 0) {
    alert("carte fidelite ne peut pas etre null");
    return false;
  }
    if (mot_de_passe == "") {
    alert("mot de passe vide");
    return false;
  }   
    
  if (num_client.length<8) {

alert("too short number");
return false;
}
}
</script>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
	<script src="js/submit.js"> </script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
