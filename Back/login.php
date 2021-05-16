<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zina Back | Login</title>
	<link rel="shortcut icon" href="back/img/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page Zina</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body class="login-img3-body">

<div class="logozina" action="">
<a href=""><img src="img/logo.png" width="180" height="180"></a>
</div>
  <div class="container">
    
	<form class="login-form" action="verification.php" method="POST">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input class="form-control" type="text" placeholder="Your ID" name="username" required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input class="form-control" type="password" placeholder="Password" name="password" required>
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
      
		<input class="btn btn-primary btn-lg btn-block" type="submit" id='submit' value='Login' >
	    <input type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='http://localhost/goweb/Zina/Back/ajouterAdmin.php';" value="Sign up" />
      <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Id ou mot de passe incorrect</p>";
                }
        ?>
	  </div>
    </form>
    <div class="text-right">
      <div class="credits">
          Designed by GoWeb</a>
        </div>
    </div>
  </div>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>

</html>
