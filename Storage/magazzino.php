<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Storage {
    public $name;
    public $descrption;
    public $category;
    public $quantity;
    public $price;

    public function __construct($_name,$_category,$_price){
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
    }

    public function getName(){
        return $this ->name;
    }

    public function getPrice(){
        return $this ->price;
    }
}

$auto = new Storage('tizio','caio',3);
echo $auto -> getPrice();
// var_dump(get_class_methods($auto));
?>