<?php 
// Magic method always start two underscores
// When created object from a class constructors autometic call

class Programmer{

    public function __construct() {
        echo 'I am constructor . <br>';
    }

    public function __destruct() {
        echo 'I am Destructor';
    }
}
// Create object
$obj = new Programmer();


?>