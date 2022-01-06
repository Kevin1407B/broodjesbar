<?php declare( strict_types = 1 ); ?>
<?php

namespace functions;

use entities\Sandwich;

class MakeObject {
  static function makeObjectFromRow($row) : Sandwich
  {
    return new Sandwich(
      (int)$row["ID"],
      (string)$row["Naam"],
      (string)$row["Omschrijving"],
      (float)$row["Prijs"]
    );
  }
}