<?php
class User{
    protected $name;
    protected $surname;
    protected $registered;
    


    public function __construct($_name, $_surname, $_registered, ){
   $this-> name = $_name;
   $this-> surname = $_surname;
   $this-> registered = $_registered;
}
}