<?php declare( strict_types = 1 ); ?>
<?php

spl_autoload_register();

if( isset($_COOKIE["login"]) ) {
  $loggedIn = true;
  header("location: sandwichController.php");
  exit(0);
}

if( !isset($_POST["login"]) ) {

  $loggedIn = false;
  $melding = "Gelieve aan te melden";

} elseif ( !empty($_POST["email"]) ) {
  
  $loggedIn = true;
  $email = $_POST["email"];  
  
  // cookie "login" wordt een dag lokaal opgeslagen
  setcookie("login", $email, time() + 60 * 60 * 24);

  header("location: sandwichController.php");
  exit(0);

}

?>

<?php include_once "presentation/login.php"; ?>