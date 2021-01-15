<?php 
//when we define any properties and method by protected keyword 
// meaning we can access from within this properties and method and child class
 class Year{
    public $january = "Januery is the first month of every year.<br>"; // a public property
    private $february = "February is the second month of every year . <br>"; // a private property
    protected $march = "March is the second month of every year. <br>"; // a private property

     public function getJanuary() { // public method
        echo $this->january; // this is valid
     }

     public function getMarch() { // public method
        return $this->march;
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
echo $object->february; // Fatal error: Uncaught Error: Cannot access private property Year::$february 
echo $object->march;// Fatal error: Uncaught Error: Cannot access protected property Year::$march 

 $objMonth = new Month();
 echo $objMonth->getMarch();//Notice: Undefined property: Month::$march
//echo $objMonth->march; // Notice: Undefined property: Month::$march
?>