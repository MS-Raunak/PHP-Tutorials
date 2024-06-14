<?php
/**
 * PHP supports only Single inheritence or Multilevel Inheritance
 * but not multiple inheritance so to solve this propblem php introduced traits
 */

 trait trait1{
    public function m1() {
        echo "Hello from Trait1<br>";
    }
 }

 trait trait2{
    public function m2() {
        echo "Namaste from Trait2";
    }
 }

 class Test {
    use trait1,trait2;
 }

 $test = new Test();
 $test->m1();
 $test->m2();
?>