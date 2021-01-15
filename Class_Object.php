<?php 
// Classes are the template for creating object
// Class is a collection of object. Object has properties and behavior
// Class begin with the keyword class with curly braces which enclose the definition of the properties and methods belonging to the class.
// When we class instantiate , create object using by new keywor

// Create a class
Class Programmerd {

    // The code

}

// Add properties to a class

class Programmer {

    public $javascript;
    public $php = 'PHP is dynamic language.';
    public $reactjs = true;
}

// Create object from a class

$objectProgrammer = new Programmer();

// Get an object properties

echo $objectProgrammer->php.'<br>'; // return PHP is dynamic language

// Add method to a class

class ProgrammerAdd {

    public $javascript;
    public $php = 'PHP is dynamic language';
    public $reactjs = true;

    public function redux() {
        return 'I am redux.';
    }
}
$objectProgrammerAdd = new ProgrammerAdd();
echo $objectProgrammerAdd->redux(); // return I am redux.
?>