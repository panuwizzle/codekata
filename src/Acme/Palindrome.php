<?php
namespace Acme;

class Palindrome 
{
    function reverseString($str)
    {
        $reversed = '';
        for($i = strlen($str) - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        return $reversed;
    }

    function isPalindrome($str)
    {

        //return (strrev($str) == $str)? true : false; 
        // reverse the string
        return ($this->reverseString($str) == $str);
    }
}
