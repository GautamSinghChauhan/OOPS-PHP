<?php

class base
{

    protected $name;

    public function __construct($n)
    {
        $this->name = $n;
    }
    public function show()
    {
        echo "Your Name :" . $this->name . "<br>";

    }
}

$test = new base("Gautam");
// $test->name="Thakur";
$test->show();

class base1
{

    protected $name;

    public function __construct($n)
    {
        $this->name = $n;
    }
    protected function show()
    {
        echo "Your Name :" . $this->name . "<br>";

    }
}

class derived extends base1
{
    public function get()
    {
        echo "Your Name :" . $this->name . "<br>";

    }
}

$test = new derived("Gautam Thakur");
// $test->name="Thakur";
$test->get();

//-----------------Private

class base2
{

    private $name;

    public function __construct($n)
    {
        $this->name = $n;
    }
    public function show()
    {
        echo "Your Name :" . $this->name . "<br>";

    }
}

class derived2 extends base2
{
    public function get()
    {
        echo "Your Name :" . $this->name . "<br>";

    }
}

$test = new base2("Gautam Thakur Chauhan");
// $test->name="Thakur";
$test->show();
