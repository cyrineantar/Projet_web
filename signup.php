<?php
	include "../Zina/Back/controller/ClientC.php";
	include_once '../Zina/Back/model/Client.php';
    include "../Zina/Back/config.php";
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
            header('Location:index.html');
        }
        else
            $error = "Missing information";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Zina | Sign Up</title>
	<link rel="shortcut icon" href="images/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div id_client="error">
            <?php echo $error; ?>
        </div>
        
        <form id="myForm" action="" method="POST" onsubmit="return verifform(this)">
<div id="login-box">

  <div class="left">
    <h1>Sign up</h1>
    
    <input type="text" name="nom_client" id_client="nom_client" placeholder="Userame" />
	<input type="text" name="prenom_client" id_client="prenom_client" placeholder="Full Name" onblur="allLetter(this)" />
	<div class="input_field">
	          <input type="radio" name="radiogroup1" id="rd1">
              <label for="rd1">Male</label>
              <input type="radio" name="radiogroup1" id="rd2">
              <label for="rd2">Female</label>
              </div>
    <input type="text" name="adresse_client" id_client="adresse_client" placeholder="E-mail" onblur="checkEmail(this.value)" />
	<input type="number" name="num_client" maxlength="8" id_client="num_client" placeholder="Phone Number" onblur="allnumeric(this)" />
	<input type="number" name="carte_fidelite" maxlength="10" id_client="carte_fidelite" placeholder="Fidelity card" onblur="allnumeric(this)" />
    <input type="password" name="mot_de_passe" id_client="mot_de_passe" placeholder="Password" />
	<button type="submit" class="social-signin google" name="signup_submit" onclick="showAlert()" >Sign me up</button>
  </div>
  </form>
  <div class="right">
    <span class="loginwith">Already registered ?</span>
	<form action="http://localhost/goweb/Zina/loginfront.php">
    <button type="submit" class="social-signin facebook"> Login </button>
    </form>
  </div>
  <div class="or">OR</div>
</div>


    <script src="js/submit.js"> </script>
</body>
</html>