<?php
class ParentClass {
    public $a=10;
    function msg() {
        echo "msg() function called from Test class";
    }
    
}

class Child extends ParentClass{
    //Accessing the function of Parent class
    function m() {
        $this->msg();
    }

    function getA() {
        return $this->a;
    }
}
$child = new Child();
echo "a: {$child->getA()}<br>";
echo $child->m();

?>