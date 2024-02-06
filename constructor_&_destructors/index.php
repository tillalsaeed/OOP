<?php


class Car {
    private $color = 'red';
    public $weight = 2000;

    public function __construct($color, $weight){
          $this->color = $color;
          $this->weight = $weight;
    }

    public function getColor(){
        return $this->color;
    }

    public function __destruct(){
        echo "I am destroyed: " . $this->color.PHP_EOL;
    }

}

// .PHP_EOL;

// instance

$myCar = new Car('green', 2005);
$myCar2 = new Car('white', 2005);

echo $myCar->getColor() . PHP_EOL;
echo $myCar2->getColor();

// UNSET TO DESTORY YOURSELF

unset($myCar); // destory first
sleep(2); // sleep 2 seconds after destroy first 