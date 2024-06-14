<?php
/**
 * constant is a type of variale which has fixed value
 * constant variable declare with const keyword inside the class only
 * constant variable name must be in uppercase
 * constant variable can access by class name.
 * to access the constant variable we take help of scope resolution operator(::)
 * EX: className::constVaribale
 */

 class Test {
    const MESSAGE = "This is Constant Varibale";
    //MESSAGE = "NO";//Cant reinittialize
 }

 echo Test::MESSAGE;
?>