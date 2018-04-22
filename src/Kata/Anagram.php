<?php
namespace Kata;

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
    public function sort($str)
    {
        $ar = str_split($str);
        sort($ar);
        return trim(implode('', $ar));
    }

    public function isAnagramWithSort($str1, $str2)
    {
        $s1 = $this->sort($str1);
        $s2 = $this->sort($str2);

        if ($s1 !== $s2) {
            return false;
        }

        return true;
    }
}
