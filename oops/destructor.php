<?php
/**
 * Destructor is a special type of function that is called when object is destructed
 * or script is stopped or exited.
 * Destructor declare with function keyword.
 * destructor name must be start with(__) and must be __destruct()
 * destructor automatically called at the end of script
 */

 class Test{
    public $a;

    //Constructor
    function __construct($a){ //2.constructor called when object creating
        $this->a=$a;
    }

    //Destructor
    function __destruct() { //3.destructor call at the end after object destructed
        echo "a: {$this->a}";
    }
 }

 //Creating Object
 $test = new Test(10);//1.object creation
?>