<?php
class MyFirstClass {
    public $var = 10;

    function m(){
        echo "Hello from function m()";
    }
}

//creating object
$obj = new MyFirstClass();
echo "Value: $obj->var<br>";
$obj->m();
?>