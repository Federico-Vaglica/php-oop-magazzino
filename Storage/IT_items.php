<?php
require_once  'magazzino.php';

class Computer extends Storage {
    public $Processor;
    public $GPU;

    public function __construct($_Processor = 'amd',$_GPU = 'nvidia'){
        $this->Processor = $_Processor;
        $this->GPU = $_GPU;
    }
}
?>