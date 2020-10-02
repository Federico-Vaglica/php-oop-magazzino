<?php
require_once  'magazzino.php';

class Computer extends Storage {
    public $Processor;
    public $GPU;

    public function __construct($_name, $_category, $_price,$_quantity ,$_Processor = 'amd' ,$_GPU = 'nvidia'){
       parent::__construct($_name, $_category, $_price);
       $this-> GPU = $_GPU;
       $this-> Processor = $_Processor;
    }

   


}
?>