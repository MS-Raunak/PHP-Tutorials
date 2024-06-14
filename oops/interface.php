<?php
  /**
   * Interface is the one of the feature of oops that is similar to class
   * Interface declare using interface keyword
   * I has only abstract methods.
   * All abstracts methods are by default public
   * It does not have constructor.
   * It does not have properties.
   * one or more class can implement multiple interfaces
   * It promotest loose coupling, code reusablity and manitainality
   * An interface can implements by using implements key word
   */

   interface Animal {
        function makeSound();
   }

   class Cat implements Animal {
        public function makeSound() {
            echo "Cat Meow <br>";
        }
   }

   class Dog implements Animal {
        public function makeSound() {
            echo "Dog Bark <br>";
        }
   }

   class Mouse implements Animal {
    public function makeSound() {
        echo "Mouse Squeak <br>";
    }
   }

   $animal = new Cat();
   $animal->makeSound();

   $cat = new Cat();
   $dog = new Dog();
   $mouse = new Mouse();

   $cat->makeSound();
   $dog->makeSound();
   $mouse->makeSound();
?>