<?php
namespace Kata;

class Anagram 
{
    public function sort($str)
    {
        $ar = str_split($str);
        sort($ar);
        return trim(implode('', $ar));
    }

    public function isAnagram($str1, $str2)
    {
        $s1 = $this->sort($str1);
        $s2 = $this->sort($str2);

        if ($s1 !== $s2) {
            return false;
        }

        return true;
    }
}
