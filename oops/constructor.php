<?php
/**
 * Construction is used to initialzed the object
 * Construcor called when object is creating
 * Constructor name must starts with double underscore(__construct)
 * Constructor name must be __construct
 * Construction prefixed function keyword
 */
class MyConstructor {
    public $a;
    public $b;

    //Constructor Function: Always starts with double underscore(__)
    function __construct($a, $b){
        $this->a=$a;
        $this->b=$b;
    }

    //Getter Function(a)
    function getA() {
        return $this->a;
    }

    //Getter Function(b)
    function getB() {
        return $this->b;
    }

}

//Creating Object
$obj = new MyConstructor("1", "ONE");
$obj2 = new MyConstructor("2", "TWO");

//Displaying Object Value
echo $obj->getA(). ": ". $obj->getB();
echo "<br>";
echo $obj2->getA(). ": ". $obj2->getB();

echo "<br>=================<br>";

?>

<!-- Constructor-2 -->

<?php
class Fruit{
    public $name;
    public $color;

    //Constructor
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    //Getter(Get Fruit Name)
    function getName(){
        return $this->name;
    }

    //Getter(Get Fruit Color)
    function getColor() {
        return $this->color;
    }
}

//Creating Object
$fruit1 = new Fruit("Apple", "Red");
$fruit2 = new Fruit("Banana", "Yellow");
$fruit3 = new Fruit("Guava", "Green");

//Getting Fruits Name & Color
echo $fruit1->getName(). ": ". $fruit1->getColor(). "<br>";
echo $fruit2->getName(). ": ". $fruit2->getColor(). "<br>";
echo $fruit3->getName(). ": ". $fruit3->getColor();
?>