<?php

/* Static properties always attached to the class not to the instance and u can call them like name of class :: and the name of properties or method u want to call*/

 class Car {
    public $color = 'red';
    public $weight = 2000;
    public $available = ['red', 'green', 'orange'];
    static $counter = 0;
    public $myCounter = 0;

    public function __construct(){

        //  if we want to use static properties inside class we can use like Car::$counter or we can use self::$counter
        // in this seniaorio we are add a 1 to counter
        self::$counter++;
        $this->$myCounter++;
    }

    static function getAvaliableColor(){
        return self::$available;
    }

 }


 $my_Car = new Car();
 
 //  How to print the static properties outside the class
 
 echo Car::$counter. $my_Car->myCounter .PHP_EOL; // return 1 1 //second 1this come from pubic method of class where as it is instance of mycar1 so thats with it come like before it is one than it is two 
 
 $my_Car2 = new Car();
 echo Car::$counter. $my_Car2->myCounter .PHP_EOL; // return 2 1 // second 1 this come from pubic method of class because it is instance of mycar2 so it will zero and 1
 

 var_dump(Car::getAvaliableColor());

