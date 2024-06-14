<?php
/**
 * Static Properties(Variable) is declare using static keyword
 * It is associated with class
 * Intialization is done only once
 * Outside the class, we can access static method using className::varName
 * Inside the class, we can access static method using self::varName
 */

 class Test {
    public static $a=10;

    public function m(){
        echo self::$a;
    }
 }

 $test = new Test();
 $test -> m();
 echo "<br>";
 echo Test::$a;
?>