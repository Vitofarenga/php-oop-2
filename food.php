<?php
require_once __DIR__ . './Product.php';

class Food extends Product{
    protected $brand;
    protected $weight;
    protected $meat;

    public function __construct($_name, $_type, $_availability, $_cost, $_brand, $_weight, $_meat){
       parent::__construct($_name, $_type, $_availability, $_cost);
       $this->brand = $_brand;
       $this->weight = $_weight;
       $this->meat = $_meat;
      
}
}