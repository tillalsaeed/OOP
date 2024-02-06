<?php

/*
1. Redclare all abstract method from abstract parent class to child class
2. the argument must be same for abstract methods
3. Method in child can have additional default arguments
4. Method's signature must be same
5. Visibilty for the child method should be equal or less restricted
6. Object cannot be created with abstract class

*/

abstract class Shape {

    public $color;
    abstract public function getArea();

    public function __construct($color){
         $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
}


class Triangle extends Shape{
    public function getArea() {

    }
}


class Circle extends Shape {
    public $radius;
      
    public function __construct($color, $radius){
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea() {
       
       return $this->radius * $this->radius * 3.14;
    }

}

class Rectangle extends Shape {
    public $width;
    public $height;

     public function __construct($width, $height, $color){
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
     }

    public function getArea(){

        return $this->width * $this->height;
       
    }

}


$t = new Rectangle('red', 10, 5);
$circle = new Circle('green', 5);
echo $t->getArea();
echo $circle->getArea();