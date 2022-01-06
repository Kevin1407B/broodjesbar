<?php declare( strict_types = 1 ); ?>
<?php include "header.php"; ?>

<?php echo $melding; ?>
<form action="registerController.php" method="post">
  <input type="email" name="email">
  <input type="password" name="password">
  <input type="password" name="controlPassword">
  <input type="submit" value="Registreren" name="register">
</form>

<?php include "footer.php"; ?>