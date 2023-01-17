<!-- A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!

We see in the example below, that using a constructor saves us from calling the set_name() method which reduces the amount of code: -->


<?php

class fruit
{
//properties

    public $name;
    public $color;

    public function __construct($name, $color)
    {

        $this->name = $name;
        $this->color = $color;
    }
    public function get_name()
    {

        return $this->name;
    }
    public function get_color()
    {

        return $this->color;
    }

}

$apple = new fruit("Apple", "Green");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

?>