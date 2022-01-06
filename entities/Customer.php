<?php declare( strict_types = 1); ?>
<?php

namespace entities;

class Customer {
  private int $customerId;
  private string $customerEmail;
  private string $customerPassword;

  /**
   * @param int $customerId
   * @param string $customerEmail
   * @param string $customerPassword
   */
  public function __construct(int $customerId, string $customerEmail, string $customerPassword)
  {
      $this -> customerId = $customerId;
      $this -> customerEmail = $customerEmail;
      $this -> customerPassword = $customerPassword;
  }

  /**
   * @return int
   */
  public function getCustomerId() : int
  {
      return $this -> customerId;
  }

  /**
   * @param int $customerId
   */
  public function setCustomerId(int $customerId) : void
  {
      $this -> customerId = $customerId;
  }

  /**
   * @return string
   */
  public function getCustomerEmail() : string
  {
      return $this -> customerEmail;
  }

  /**
   * @param string $customerEmail
   */
  public function setCustomerEmail(string $customerEmail) : void
  {
      $this -> customerEmail = $customerEmail;
  }

  /**
   * @return string
   */
  public function getCustomerPassword() : string
  {
      return $this -> customerPassword;
  }

  /**
   * @param string $customerPassword
   */
  public function setCustomerPassword(string $customerPassword) : void
  {
      $this -> customerPassword = $customerPassword;
  }
}