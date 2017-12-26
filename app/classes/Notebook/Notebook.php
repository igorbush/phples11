<?php
namespace classes\Notebook;

use \classes\Product;
use \classes\GetInfoProduct;

class Notebook extends Product implements GetInfoProduct
{ 
  private $model; 
  
  public function __construct($price, $title, $desc, $delivery, $weight, $Os) 
  { 
    $this->price = $price;
    $this->title = $title;
    $this->desc = $desc;
    $this->delivery = $delivery;
    $this->weight = $weight;
    $this->Os = $Os;
    if ($weight >= 10000) {
      $this->delivery = 300;
      $this->price = $this->price * 0.9;
      return $this->price . $this->delivery;
    }
  }

  public function getInfoProduct()
  { 
    $info = 'Наименование: ' . $this->title . '<br>Цена: ' . $this->price . '<br>Описание: ' . $this->desc . '<br>Доставка: ' . $this->delivery . '<br>Операционная система: ' . $this->Os ; 
    return $info;
  }

}