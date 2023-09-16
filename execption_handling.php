<?php
    class MyException extends Exception{
        function errorMessage(){
            $error = "My Exception Message : ".$this->getMessage()." Error on line Number : ".$this->getLine();
            return $error;
        }
    }

    function division($n){
        try {
            if ($n <= 0) {
                throw new Exception("Enter The valid number");
            }
            if($n == 3){
                throw new MyException("Number is 3");
            }
            $div = 2/$n;
            echo $div;
        } catch (MyException $e) {
            echo $e->errorMessage();
        }catch (Exception $e) {
            echo $e->getMessage();
        }finally{
            echo "finally";
        }
    }

    division(-1);
    division(3);
    division(-1);
?>