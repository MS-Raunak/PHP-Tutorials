<?php
/**
 * The class which is prefixed with abstract keyword is known as abstract class
 * Abstract class consist atleast one abstract method
 * Abstract method does not have their body and implementation
 * Abstract class must be inherited by any other child class to provide the implementation of abstarct method
 * We can't create the object for Abstract class
 * Abstract class can have constructor, variale, any type of methods and any type of access modifier
 */

 abstract class Test {
    public $a;//Varibale

    //Constructor
    function __const($a){
        $this->a;
    }

    //abstract function
    abstract function m1();

    //Normal function
    function m2() {
        echo "This is m2() fun from Class Test<br>";
    }
    
 }

class Child extends Test {
    function m1() {
        echo "m1() of Test class overridden in Child class<br>";
    }
    function m3() {
        $this->m2();
    }
}

$child = new Child();
$child->m1();
$child->m2();

?>