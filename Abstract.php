<?php
abstract class parentclass{
   
     public $name;

     abstract protected function cal($a,$b);

}

class childclass extends parentclass{
   
    public $name;

   public function cal($c,$d){
        echo $c+$d;

   }

}

$test= new childclass();
$test->cal(10,5);

?>