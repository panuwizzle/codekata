<?php
namespace Kata;

class FizzBuzz2 
{
    public function check($num) 
    {
        if ( ($num % 3 == 0) && ($num % 5 == 0) ) {
            return 'FizzBuzz';
        }

        if ($num % 3 == 0) {
            return 'Fizz';
        }

        if ($num % 5 == 0) {
            return 'Buzz';
        }

        return $num;

    }

}
