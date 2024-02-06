<?php
// There are 16 Magic methods in php class All magic methods excuted automatically by php engine they are not explicitly invoked 

/*
1. __construct  // run with the instance delacred 
2. __destruct   // run after the instance ends
3. __toString  // convert class into string to if some one echo the instance it will shw whatever you want to.
4. __get // if some one want to access properties which is not exists than this function excuted and inside paramater will give us the property the person want to access from instance.
5. __set // if some one want to assgin value to a property which is not exists so this function will excuted and it return two params one is poerty name and the property value
6. __call// when an unexisting method called from instance it wll run 
7. __callStatic // when call a static function which is not avaliable we call __callStatic
8. __invoke // user your instance as a function or your class as a function $p = new Person(); echo $p();
9. __sleep and __wakeup __sleep method works when we try to serlized our instance object we can hide some of properties which should not serliaze and __wakeup run before the unserlization 
10. __clone // run when the instance create by a clone method

*/ 

class Person {
    public $name = 'John';
    public $age = 32;
    static $counter;



  
    

    public function __construct(){
        echo "I am a constructor function";
        self::$counter++;
    }


    public function __destruct(){
        echo "I got exectued when the instance is done working than my job starts";
    }

    public function __toString(){
            echo "Name" . $this->name . "Age" . $this->age; 
    }

//  Getter 
    public function __get($propertyName) {
        if($propertyName === 'username'){
           return $this->username;
        }else {
            return "Poperty $propertyName does not exist";
        }

    }

    // Setter


    public function __set($propertyName, $propertyValue){
        if($propertyName === 'username'){
            $this->name = $propertyValue;
        }
    }

    public function __call($names, $arguments){
        var_dump($name, $arguments);
        if($names == "getUsername"){
            return $this->getName();
        } elseif($name =='getUserage'){
               call_user_func([$this, 'getAge'], $arguments);
        }
    }

    public function getName(){
      return $this->name;
    }

   public function getAge($age){
    $this->age = $age;
   }

   public static function __callStatic($name, $args){
    echo "$name static method was called";
  }

  public function __invoke(){
    return  "Object was called as a function";
  }

  public function __sleep(){
     unset($this->phone);
     return ['name'];
  }
  public function __wakeup(){
   
    self::$counter++;
  }

   
}

$billal = new Person();
echo $billal; // it will return Name: John  Age: 32;

// Getting the properties not exist so __get function run 
$billal->username;

// Setting the properties and value not exist so __set function run
$billal->username = "Waqas";

// Seniaro for __Call function

$billal->getUsername();
$billal->getUserage();
//  Seniaro for __callStatic function
Person::hello();

// var_dump(is_callable($billal)); // return true;

// echo $billal();

// __sleep and __wakeup

// $seralized = serialize($billal);
// echo $seralized;
// $newPerson = unserialize($seralized);
// var_dump($newPerson);

// When object is unserialized a new object is created
$newBillal = clone $billal;
$newBillal1 = unserialize($billal);

