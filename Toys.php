<?php
require_once __DIR__ . './Product.php';

class Food extends Product{
    protected $material;

    public function __construct($_name, $_type, $_availability, $_cost, $_material){
       parent::__construct($_name, $_type, $_availability, $_cost);
       $this->material = $_material;
}
}