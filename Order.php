<?php
require_once __DIR__ . './User.php';

class Food extends User{
    protected $payment;
    

    public function __construct($_name, $_type, $_availability, $_cost, $_material){
       parent::__construct($_name, $_type, $_availability, $_cost);
       $this->material = $_material;
}
}