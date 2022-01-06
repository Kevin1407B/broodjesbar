<?php declare( strict_types = 1 ); ?>
<?php include "header.php"; ?>

<?php echo $melding; ?>
<form action="loginController.php" method="post">
  <input type="email" name="email">
  <input type="password" name="password">
  <input type="submit" value="Aanmelden" name="login">
  <a href="registerController.php">Nog niet geregistreerd? Klik hier.</a>
</form>

<?php include "footer.php"; ?>