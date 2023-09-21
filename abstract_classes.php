<?php

    abstract class ParentClass{
        abstract protected function calc($a,$b);
    }

    class ChildClass extends ParentClass{
        public function calc($c,$d){
            echo $c+$d;
        }
    }

    $obj = new ChildClass();
    $obj->calc(10,20);

?>