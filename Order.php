<?php
require_once __DIR__ . './User.php';

class Food extends User{
    protected $payment;
    protected $deliveryTime;

    public function __construct($_name, $_surname, $_registered, $_payment, $_deliveryTime){
       parent::__construct($_name, $_surname, $_registered, $_payment, $_deliveryTime);
       $this->payment = $_payment;
       $this->deliveryTime = $_deliveryTime;
}
}