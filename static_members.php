<?php

    class Base{
        public static $name = "Sujeet singh";

        public static function show($n){
            self::$name = $n;
            echo self::$name;
        }

        public function __construct(){
            echo self::$name;
        }
    }

    class Derived extends Base{
        public $class = "Ram singh";

        public static function shown(){
            echo self::$class;
        }
    }

    $obj = new Base();
    $obj->show("Yahoo Baba");
    $obj1 = new Derived();
    $obj1->show();

?>