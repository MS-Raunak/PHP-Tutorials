<?php
class Test{
    public $a=10;

    function m() {
        return $this->a;
    }
}
$obj = new Test();
echo "This Keyword:<br>";
echo "a: ".$obj->m();

/**
*this referes to the current object and only accessile within the function
 */
?>

