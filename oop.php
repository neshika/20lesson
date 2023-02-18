<?php
include_once("init.php");



class Person{
    public $name;
    public $age;
    const ID = 10;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(){
        echo 'меня зовут ' . $this->name;
        echo "<br> мне лет уже: " . $this->age;
    }


}

$new = new Person('Mary', 14);
vardump($new);

$new->sayHello();
echo "<br>";
echo Person::ID;

