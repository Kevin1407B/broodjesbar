<?php declare( strict_types = 1 ); ?>
<?php

namespace entities;

class Sandwich {
  private int $id;
  private string $name;
  private string $description;
  private float $price;

  /**
   * @param int $id
   * @param string $name
   * @param string $description
   * @param float $price
   */
  public function __construct(int $id, string $name, string $description, float $price)
  {
    $this -> id = $id;
    $this -> name = $name;
    $this -> description = $description;
    $this -> price = $price;
  }
  
  /**
   * @return int
   */
  public function getId() : int
  {
    return $this -> id;
  }
  
  /**
   * @param int $id
   */
  public function setId(int $id) : void
  {
    $this -> id = $id;
  }

  /**
   * @return string
   */
  public function getName() : string
  {
    return $this -> name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name) : void
  {
    $this -> name = $name;
  }

  /**
   * @return string
   */
  public function getdescription() : string
  {
    return $this -> description;
  }

  /**
   * @param string $description
   */
  public function setdescription(string $description) : void
  {
    $this -> description = $description;
  }
  
  /**
   * @return float
   */
  public function getprice() : float
  {
    return $this -> price;
  }

  /**
   * @param float $price
   */
  public function setprice(float $price)
  {
    $this -> price = $price;
  }
}