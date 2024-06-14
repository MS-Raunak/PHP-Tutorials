<?php
class Animal {
    function eat(){
        echo "Animal is eating<br>";
    }
}

class Cat extends Animal{
    //overriding method
    function eat() {
        echo "Cat eating meat<br>";
    }
}

class Cow extends Animal {
    //overriding method
    function eat() {
        echo "Cow is eating grass";
    }
}

$animal = new Animal();
$cat = new Cat();
$cow = new Cow();

echo $animal->eat();
echo $cat->eat();
echo $cow->eat();
?>