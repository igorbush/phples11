<?php
namespace classes\Phone;
use \classes\Product;
use \classes\GetInfoProduct;

class Phone extends Product implements GetInfoProduct
{
  protected $countryFrom;
  private $weight;
  
  public function __construct($price, $title, $desc, $delivery, $net, $firmware) 
  {
    $this->price = $price;
    $this->title = $title;
    $this->desc = $desc;
    $this->delivery = $delivery;
    $this->net = $net;
    $this->firmware = $firmware;
  }

  public function getInfoProduct()
  { 
    $info = 'Наименование: ' . $this->title . '<br>Цена: ' . $this->price . '<br>Описание: ' . $this->desc . '<br>Доставка: ' . $this->delivery . '<br>Поддержка сетей: ' . $this->net . '<br>Прошивка: ' . $this->firmware ;
    return $info;
  }
}