<?php declare( strict_types = 1 ); ?>
<?php

namespace data;

use PDO;
use entities\Customer;

class CustomerDAO {

  /*
   *  -------------------------------------------------------
   *  Plaatst klant in database.
   */
  public function createCustomer(string $email, string $password) : Customer
  {
    $sql = "INSERT INTO klanten (email, password) VALUES (:email, :password)";
    $dbh = new PDO(
      DBConfig :: $DB_CONNSTRING,
      DBConfig :: $DB_USERNAME,
      DBConfig :: $DB_PASSWORD
    );
    $stmt = $dbh -> prepare($sql);
    $stmt -> bindValue(":email", $email, PDO :: PARAM_STR);
    $stmt -> bindValue(":password", $password);
    $stmt -> execute();
    $userId = $dbh -> lastInsertId();
    $dbh = null;

    return new Customer((int)$userId, $email, $password);
  }

  /*
   *  -------------------------------------------------------
   *  Haalt alle klanten uit de database.
   */
  public function getAll() : array
  {
    $sql = "SELECT * FROM klanten";
    $dbh = new PDO(
      DBConfig :: $DB_CONNSTRING,
      DBConfig :: $DB_USERNAME,
      DBConfig :: $DB_PASSWORD
    );
    $stmt = $dbh -> prepare($sql);
    $stmt -> execute();
    $resultSet = $stmt -> fetchAll(PDO :: FETCH_ASSOC);

    return $resultSet;
  }

  /*
   *  -------------------------------------------------------
   *  Checkt of dat de klant al reeds bestaat in de database.
   */
  public function checkCustomer(string $email, string $password) : bool
  {
    $sql = "SELECT * FROM klanten WHERE password = :password AND email = :email";
    $dbh = new PDO(
      DBConfig :: $DB_CONNSTRING,
      DBConfig :: $DB_USERNAME,
      DBConfig :: $DB_PASSWORD
    );
    $stmt = $dbh -> prepare($sql);
    $stmt -> bindValue(":email", $email); 
    $stmt -> bindValue(":password", $password); 
    $stmt -> execute();
    
    $result = $stmt -> fetchAll(PDO :: FETCH_ASSOC);
    $isResult = false;
    if( $result ) {
      $isResult = true;
    }

    return $isResult;
  }
}