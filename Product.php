<?php
class Product{
    protected $name;
    protected $type;
    protected $availability;
    protected $cost;


    public function __construct($_name, $_type, $_availability, $_cost){
   $this-> name = $_name;
   $this-> type = $_type;
   $this-> availability = $_availability;
   $this-> cost = $_cost;
}
}