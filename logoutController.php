<?php declare( strict_types = 1 ); ?>
<?php

spl_autoload_register();

if( isset($_COOKIE["login"]) ) {
  
  echo "cookie is geplaatst";
  setcookie("login");

}

$loggedIn = false;

header("location: _index.php");
exit(0);