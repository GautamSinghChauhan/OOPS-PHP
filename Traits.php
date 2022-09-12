<?php

trait hello{
   public function sayhellow(){
    echo "Hello EveryOne<br>";

   }
   public function sayhi(){
    echo "Hi EveryOne<br>";

   }

}
trait bye{
   public function saybye(){
    echo "Bye Bye EveryOne<br>";

   }

}

class Base{
  use hello,bye;
}
class Base1{
  use hello;
}

$test = new Base();
// $test1 = new Base1();
$test->sayhellow();
$test->saybye();
$test->sayhi();

?>