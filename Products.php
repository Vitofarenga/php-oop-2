<?php
class Products{
    protected $name;
    protected $type;
    protected $availability;
    protected $cost;


    public function __construct($_name, $_type, $_availability, $_cost){
   $this-> food = $_name;
   $this-> toys = $_type;
   $this-> care = $_availability;
   $this-> training = $_cost;
}
}