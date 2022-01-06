<?php declare( strict_types = 1 ); ?>
<?php

spl_autoload_register();

use business\SandwichService;

if( isset($_COOKIE["login"]) ) {
  $loggedIn = true;
} else {
  $loggedIn = false;
}

$orderedList = [];
$sandwichService = new SandwichService();
$sandwiches = $sandwichService -> showSandwichOverview();

// $sandwichCheck = $_POST["sandwich"];
// if( !empty($sandwichCheck) ) {

//   $lengthChecked = count($sandwichCheck);
//   for( $i = 0; $i < $lengthChecked; $i++ ) {
//     echo $_POST[$i];
//   }
// }

echo $_POST[""];

?>

<?php include_once "presentation/ordered.php"; ?>