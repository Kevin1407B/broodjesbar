<?php declare( strict_types = 1 ); ?>
<?php include "header.php"; ?>

<form action="orderedController.php" method="POST">
  <h2>Kies uw broodjes hier</h2>
  <?php
  foreach( $sandwiches as $sandwich ) {
    ?>
    <div>
      <input type="checkbox" id="<?php echo $sandwich -> getName(); ?>" name="sandwich" value="<?php echo str_replace(' ', '_', $sandwich -> getName()); ?>">
      <label for="<?php echo $sandwich -> getName(); ?>"><?php echo $sandwich -> getName(); ?></label><br>
    </div>
    <div>
      <label for="number">Kies het gewenste aantal</label>
      <select name="number" id="number">
        <?php
          for( $i = 1; $i <= 100; $i++ ) {
            ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
          }
          ?>
      </select>
      <br><br>
    </div>
    <?php
  }
  ?>
  <input type="submit" value="Bestel" name="btnOrder">
</form>

<?php include "footer.php"; ?>