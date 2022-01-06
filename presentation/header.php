<!DOCTYPE html>
<html lang="nl-BE">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broodjesbar</title>
  </head>
  <body>
    <header>
      <nav>
        <div>
          broodjesbar
        </div>
        <ul>
          <li><a href="_index.php">Home</a></li>
          <?php 
            if( $loggedIn ) {
              echo "<li><a href='sandwichController.php'>Broodjes kiezen</a></li>";
              echo "<li><a href='#'>Besteld</a></li>";
              echo "<li><a href='logoutController.php'>Afmelden</a></li>";
            } else {
              echo "<li><a href='loginController.php'>Aanmelden</a></li>";
              echo "<li><a href='registerController.php'>Registreren</a></li>";
            }
          ?>
        </ul>
      </nav>
    </header>
    <main>
  
