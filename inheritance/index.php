<?php

// 1. You cannot change the public , or protected or private  on child class it should be same as parent and then way method delclare in parent class should be delcare same in child class the number of arguments the type of argument and the return type should be the same .if type of parameter is not define than u can change 

//2. if we add final before class or method it cannont be overwritten or cannot be extended
class ParentClass {

    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';

    const VERSION = 1;


    public function getProperty2(){
        return $this->property2;
    }
}


class ChildClass extends ParentClass {

    public $property1 = '11';
    protected $property2 = '22';

    public function getProperty2(){
        $result = parent::getProperty2();
         return "Something ". $result;
    }

}


$obj = new ChildClass();

echo $obj->property1;
echo $obj->getProperty2();
    echo ChildClass::VERSION;



    // Example 2 

    class Person1 {
        public $name;
        public $age;
        public $phone;


        public function __construct($name, $age, $phone) {
            $this->name = $name;
            $this->age = $age;
            $this->phone = $phone;
        }

        public function hello(){
            return "Hello from Parent Class";
        }
    }


    class Employees extends Person1{

          private $salary;
        public function __construct($name, $age, $phone, $salary){
            parent::__construct($name,$age,$phone);
            $this->salary = $salary;
        }
        //  Overwrite function of parent class;
        public function hello(){
            return "Hello from Employees Class $this->name";
        }



    }

    $waqas = new Employees();
    echo $waqas->hello();