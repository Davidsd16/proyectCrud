<?php

namespace App;

class FizzBuzz
//la class tiene que llamarse igual al nombre del archivo

{
    public function execute(int $number)
    {
        if ($number % 3 == 0 && $number % 5 == 0 ){
            return "FizzBuzz";
        }
        if ($number % 3 == 0){
            return "Fizz";
        }
        if ($number % 5 == 0){
            return "Buzz";
        }
        return $number;
    }
}