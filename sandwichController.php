<?php declare( strict_types = 1 ); ?>
<?php

spl_autoload_register();

use business\SandwichService;

if( isset($_COOKIE["login"]) ) {
  $loggedIn = true;
} else {
  $loggedIn = false;
}

$sandwichService = new SandwichService();
$sandwiches = $sandwichService -> showSandwichOverview();

?>

<?php include_once "presentation/sandwich.php"; ?>