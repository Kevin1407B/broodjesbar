<?php declare( strict_types = 1 ); ?>
<?php

if( isset($_COOKIE["login"]) ) {
  $loggedIn = true;
} else {
  $loggedIn = false;
}

?>

<?php include_once "presentation/home.php"; ?>