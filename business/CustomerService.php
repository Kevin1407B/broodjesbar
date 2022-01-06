<?php declare( strict_types = 1 ); ?>
<?php

namespace business;

use data\CustomerDAO;
use entities\Customer;

class CustomerService {
  private CustomerDAO $customerDAO;

  public function __construct()
  {
    $this -> customerDAO = new CustomerDAO();
  }

  public function registerCustomer(string $email, string $password) :? Customer
  {
    $checkCustomer = $this -> customerDAO -> checkCustomer($email, $password);

    if( $checkCustomer ) {
      return null;
    } else {
      return $this -> customerDAO -> createCustomer($email, $password);
    }
  }
}