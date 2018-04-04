<?php
namespace Acme;

class Anagram {
    function isAnagram($str_a, $str_b) 
    {
        //return (count_chars($str_a, 1) == count_chars($str_b, 1));
        $ar1 = str_split(strtolower($str_a));
        $ar2 = str_split(strtolower($str_b));
        sort($ar1);
        sort($ar2);
        return ($ar1 === $ar2) ? true : false;
    }
}
