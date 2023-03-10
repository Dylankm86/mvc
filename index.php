<?php

class  person{
    public $name;
    public $age;
    public $address;

    function __construct($name,$age,$address){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        
    }
    public function introduce(){
        echo "hello my name is {$this->name} and i am {$this->age} years old and live on{$this->address}";
    }
}

$person = new person("Dylan", "16", "123st");

$person->introduce();
 