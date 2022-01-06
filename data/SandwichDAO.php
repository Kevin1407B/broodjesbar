<?php declare( strict_types = 1 ); ?>
<?php

namespace data;

use PDO;

class SandwichDAO {
  
  /*
   *  ---------------------------------------------------------
   *  Haalt alle broodjes uit de database.
   */
  public function getAll() : array 
  {
    $sql = "SELECT * FROM broodjes";
    $dbh = new PDO(
      DBConfig :: $DB_CONNSTRING,
      DBConfig :: $DB_USERNAME,
      DBConfig :: $DB_PASSWORD
    );
    $stmt = $dbh -> prepare($sql);
    $stmt -> execute();
    $resultSet = $stmt -> fetchAll(PDO :: FETCH_ASSOC);
    $dbh = null;

    return $resultSet;
  }

  /*
   *  ---------------------------------------------------------
   *  Haalt de id's van de broodjes uit de database.
   */
  public function getId() : array
  {
    $sql = "SELECT ID FROM broodjes";
    $dbh = new PDO(
      DBConfig :: $DB_CONNSTRING,
      DBConfig :: $DB_USERNAME,
      DBConfig :: $DB_PASSWORD
    );
    $stmt = $dbh -> prepare($sql);
    $stmt -> execute();
    $resultSet = $stmt -> fetchAll(PDO :: FETCH_ASSOC);
    $dbh = null;

    return $resultSet;
  }

  /*
   *  ---------------------------------------------------------
   *  Haalt de naam van de broodjes uit de database.
   */
  public function getName() : array
  {
    $sql = "SELECT Naam FROM broodjes";
    $dbh = new PDO(
      DBConfig :: $DB_CONNSTRING,
      DBConfig :: $DB_USERNAME,
      DBConfig :: $DB_PASSWORD
    );
    $stmt = $dbh -> prepare($sql);
    $stmt -> execute();
    $resultSet = $stmt -> fetchAll(PDO :: FETCH_ASSOC);
    $dbh = null;

    return $resultSet;
  }

  /*
   *  ---------------------------------------------------------
   *  Haalt de omschrijving van de broodjes uit de database.
   */
  public function getDescription() : array
  {
    $sql = "SELECT Omschrijving FROM broodjes";
    $dbh = new PDO(
      DBConfig :: $DB_CONNSTRING,
      DBConfig :: $DB_USERNAME,
      DBConfig :: $DB_PASSWORD
    );
    $stmt = $dbh -> prepare($sql);
    $stmt -> execute();
    $resultSet = $stmt -> fetchAll(PDO :: FETCH_ASSOC);
    $dbh = null;

    return $resultSet;
  }

  /*
   *  ---------------------------------------------------------
   *  Haalt de prijs van de broodjes uit de database.
   */
  public function getPrice() : array
  {
    $sql = "SELECT Prijs FROM broodjes";
    $dbh = new PDO(
      DBConfig :: $DB_CONNSTRING,
      DBConfig :: $DB_USERNAME,
      DBConfig :: $DB_PASSWORD
    );
    $stmt = $dbh -> prepare($sql);
    $stmt -> execute();
    $resultSet = $stmt -> fetchAll(PDO :: FETCH_ASSOC);
    $dbh = null;

    return $resultSet;
  }

}