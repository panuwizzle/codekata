<?php
namespace Kata;

class FizzBuzz
{
    private $tarang = [
        15 => 'FizzBuzz',
        5 => 'Buzz',
        3 => 'Fizz',
    ];

    public function __construct() 
    {
    }

    public function sayit($num)
    {
        foreach ($this->tarang as $key => $glype) {
            if ($num % $key == 0) {
                return $glype;
            }
        }
        return $num;
    }

    public function sayitinarray($nums)
    {
        $result = [];
        for($i = 1; $i <= $nums; $i++) {
            $result[] = $this->sayit($i);
        }
        return implode(' ', $result);
    }

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
