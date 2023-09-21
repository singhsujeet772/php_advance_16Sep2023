<?php

    interface Parent1{
        public function add($a,$b);
    }

    interface Parent2{
        public function add($c,$d);
    }

    class Child implements Parent1 , Parent2{
        public function add($a,$b){
            echo $a+$b;
        }

        public function sub($a,$b){
            echo $a-$b;
        }
    }

    $obj = new Child();
    $obj->add(20,10);
    echo "<br>";
    $obj->sub(20,10);

?>