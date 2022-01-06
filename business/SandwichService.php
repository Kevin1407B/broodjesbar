<?php declare( strict_types = 1 ); ?>
<?php

namespace business;

spl_autoload_register();

use data\SandwichDAO;
use entities\Sandwich;
use functions\MakeObject;

class SandwichService {
  private SandwichDAO $sandwichDAO;

  public function __construct()
  {
    $this -> sandwichDAO = new SandwichDAO();
  }

  public function showSandwichOverview() : array
  {
    $list = [];
    $result = $this -> sandwichDAO -> getAll();

    foreach( $result as $row ) {
      $sandwich = MakeObject :: makeObjectFromRow($row);
      array_push($list, $sandwich);
    }
    return $list;
  }
}