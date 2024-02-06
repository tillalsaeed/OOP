<?php

/*
    1. Code Dublication
    2. Single Inheritance
    3. Traits Cant have constants
    4. Traits can have static methods and properties
    5. for explain trait we use word trait than name of trait and for invoking or calling we use use inside class and name of trait so we can use that trait inside if we have multi traits we can spearte them with commas 
*/


trait MyTrait {
    public $a = 10;
    abstract function jumping();

    public function fly(){
        echo "I am flying";
    }
}


trait MyEngine {
    public function hello(){
        echo "I have an engine";
    }

}


class Plain {

    use MyTrait, MyEngine ;

    public function  jumping(){
        echo "I am jumping";
    }
}

class Helicopter {

    use MyTrait, MyEngine;
    
    public function  jumping(){
        echo "I am jumping";
    }
}

class Car {

    use MyEngine;
}

$plain = new Plain();
$helicopter = new Helicopter();
$car = new Car();

$plain->fly();
$plain->hello();

// Instanse

$helicopter->fly();
$helicopter->hello();

//Instance

$car->hello();

// Imagine if we want to do with extend it is a code duplication let we add all two methods in one class and extend all three class in plainClass and helicopter class its fine but in car class we dont need the fly method but with extend u have to have it in ur class so helping code duplication we use the traits.
