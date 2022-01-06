<?php declare( strict_types = 1 ); ?>
<?php

spl_autoload_register();

use business\CustomerService;

if( isset($_COOKIE["login"]) ) {
  $loggedIn = true;
} else {
  $loggedIn = false;
}

if( !isset($_POST["register"]) ) {

  $melding = "Gelieve te registreren";

} elseif ( !empty($_POST["email"]) ) {
  
  $email = $_POST["email"];
  $password = $_POST["password"];  
  $controlPassword = $_POST["controlPassword"];  
  
  if( $password === $controlPassword ) {
    
    $customerService = new CustomerService();
    $customer = $customerService -> registerCustomer($email, $password);

    if( $customer === null ) {

      $melding = "Gebruiker al reeds gekend, meld u aan";

    } else {
      header("location: loginController.php");
      exit(0);
    }

  } else {

    $melding = "Wachtwoorden komen niet overeen, probeer opnieuw";

  }

}

?>

<?php include_once "presentation/register.php"; ?>