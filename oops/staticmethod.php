<?php
/**
 * The method which is declared using static keyword is known as static method
 * To accessing static method we dont need to create the object of class
 * We can access static method outside the class using class name followed by scope resolution opertor
 * We can access static method inside the class using self keyword followed by scope resolution opertor
 * We can say static methods are associated with class rather than object
 */

 class Test {
    static function m() {
        echo "Static Method called<br>";
    }

    function __construct() {
        self::m(); //static method calling inside the class
    }
 }

 Test::m();//static method calling outside the class
 new Test();
?>