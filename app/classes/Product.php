<?php
namespace classes;

use classes\SuperProduct;

class Product extends SuperProduct
{ 

  public function getTotalPrice() 
  {
      return $this->price + $this->delivery;
  }
}