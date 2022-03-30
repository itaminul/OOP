<?php 
// When create a new class call child class use by extends keyword from parent class
// child class used of parents class attributes
class Season{
    public $cool;
    public function getCool($cool) {
        return $this->cool = $cool;
    }
}
//child class by extends keyword
class Winter extends Season{
    public $time = ' 3 Month';

    public function getCool($cool) {
        return $this->cool = $cool.$this->time;
    }

}
$obj = new Winter();
echo $obj->getCool('Very cool');
?>