<?php

class fruit{
// Properties
public $name;
public $color;

//Method 

function set_name($name){

    $this->name=$name;
}

function get_name(){

    return $this->name;
}

function set_color($color){

    $this->color=$color;
}

function get_color(){

    return $this->color;
}




}

$apple = new fruit();
$apple->set_name('Apple');
$apple->set_color('Red');

echo $apple->get_name();
echo"<br>";
echo $apple->get_color();
 

?>