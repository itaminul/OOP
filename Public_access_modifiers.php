<?php 
//when we define any properties and method by public keyword 
//  meaning we can access anywhere in this properties and method
 class Year{
    public $january = "Januery is the first month of every year.<br>";
    public $february = "February is the second month of every year . <br>";
    public $march = "March is the second month of every year. <br>";

     public function getJanuary() {
        echo $this->january;
     }
 }

 // Class extends user extends keyword

 class Month extends Year {

    public function getMarch() {
        return $this->march;
    }

 }

 //create object
 $object = new Year();
 echo $object->getJanuary(); // return Januery is the first month of every year.
 echo $object->february; // return February is the second month of every year


 $objMonth = new Month();
 echo $objMonth->march; // return March is the second month of every year.


?>