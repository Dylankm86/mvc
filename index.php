<?php

class user{
    public $name;
    public $lastname;

    public function name(){
        echo "hello dylan";
    }
    public function lastname(){
        echo "kishoen misier";
    }
}

$names = new user;

$names->name = 'dylan';
$names->lastname = 'kishoen misier';

$names->name ();