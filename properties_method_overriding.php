<?php

    class Base{
        public $name = "Parent Class";

        public function calc($a,$b){
            return $a*$b;
        }
    }

    class Derived extends Base{
        public $name = "Child Class";

        public function calc($a,$b){
            return $a+$b;
        }
    }

    $obj1 = new Base();
    $obj2 = new Derived();

    echo $obj1->name."<br>";
    echo $obj2->name."<br>";
    echo $obj1->calc(2,3)."<br>";
    echo $obj2->calc(2,3);
?>