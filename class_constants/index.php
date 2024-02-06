<?php


// Class Constants Work same to delar we use predefine word const and than the name of the Constants and than assign value like const Name = "Tillal Saeed" and if we can to call that constant inside class we use self::and the name of constant for above example we can use like self::Name to call outside class we use classname and than the :: and than the name of constant
// Delcaration Code 
// const Name = "Tillal";
// Call Inside the class
// self::Name
// Call Outside the class
// ClassName::Name

 class Cars {

    public $color;        
    public $manfaturer;

    const MERCEDICE = 'mercdices';
    const BMW = 'bmw';
    const Red = 'red';

    

    public function __construct($color, $manfaturer){
        $this->color = $color;
        $this->manfaturer = $manfaturer;
        echo self::Red;
    }

 }

 $myCar = new Car(Car::MERCEDICE, "orange");