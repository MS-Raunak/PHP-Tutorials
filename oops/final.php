<?php
/**
 * final keyword is used to prevent and method overriding
 */
final class ParentClass{
    final function m() {
        echo "m() from Parent class<br>";
    }
}

class Child extends ParentClass {
    function m() {
        echo "m() accessed of class ParenClass";
    }
}

$child = new Child();
echo $child->m();
/**
 * When we executing this, it will throw error
 * because final class can't inherited and final method 
 * can't overridden
 */
?>