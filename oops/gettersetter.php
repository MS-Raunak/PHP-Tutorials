<!-- Example-1 -->
<?php
class Test {
    public $a;
    public $b;

    //Getter a
    function getA(){
        return $this->a; 
    }
    //Getter b
    function getB() {
        return $this->b;
    }

    //Setter a
    function setA($a) {
        $this->a = $a;
    }
    //Setter b
    function setB($b) {
        $this -> b = $b;
    }
}

$obj = new Test();
//setting data
$obj->setA(10);
$obj->setB(20);

//Getting data
$a = $obj->getA();
$b = $obj->getB();

//Displaying data
echo "Class: Test:-<br>";
echo "a: $a <br>";
echo "b: $b <br>";
echo "================";
?>

<!-- Example -2 -->

<?php
class Fruit{
    public $name;
    public $color;

    //Getter Method(set fruit name)
    function getName(){
        return $this->name;
    }

    //Setter Method(get fruit name)
    function setName($name){
        $this->name = $name;
    } 

    //Get Fruit Color
    function getColor(){
        return $this->color;
    }

    //Set Fruit Colot
    function setColor($color){
        $this->color = $color;
    }
}

//Creating Object
$apple = new Fruit();
$banana = new Fruit();

//Set value
$apple->setName("Apple");
$apple->setColor('Red');
$banana->setName("Banana");
$banana->setColor('Yellow');

//Get Value
$fruit_name1 = $apple->getName();
$fruit_color1 = $apple->getColor();

$fruit_name2 = $banana->getName();
$fruit_color2 = $banana->getColor();


//Display All
echo "<br>Class: Fruit:-<br>";
echo "$fruit_name1 : $fruit_color1";
echo "<br>";
echo "$fruit_name2 : $fruit_color2";
echo "<br>===============<br>";
?>

