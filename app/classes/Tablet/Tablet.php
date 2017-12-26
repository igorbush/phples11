<?php
namespace classes\Tablet;

use \classes\Product;
use \classes\GetInfoProduct;

class Tablet extends Product implements GetInfoProduct
{
  private $size; 
 
  public function __construct($price, $title, $desc, $delivery, $diagonal, $dockstation) 
  {
    $this->price = $price;
    $this->title = $title;
    $this->desc = $desc;
    $this->delivery = $delivery;
    $this->diagonal = $diagonal;
    $this->dockstation = $dockstation;
  }

  public function getInfoProduct()
  { 
    $info = 'Наименование: ' . $this->title . '<br>Цена: ' . $this->price . '<br>Описание: ' . $this->desc . '<br>Доставка: ' . $this->delivery . '<br>Диагональ: ' . $this->diagonal . '<br>Док. Станция: ' . $this->dockstation;
    return $info;
  }
}