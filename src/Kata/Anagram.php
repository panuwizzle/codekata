<?php
/**
 * This file is part of my Kata
 * file doc to shut phpcs up
 * 
 * @category Kata
 * @package  Kata
 * @author   Phanuwat <sukorn@gmail.com>
 * @license  http://none.com none
 * @link     http://none.com
 */

namespace Kata;

/**
 * Anagram class for check if the string is anagram
 * 
 * @category Kata
 * @package  Kata
 * @author   Phanuwat <sukorn@gmail.com>
 * @license  http://none.com none
 * @link     http://none.com
 */
class Anagram
{
    /**
     * Function isAnagram function
     * 
     * @param string $str_a First string for compare
     * @param string $str_b Second string for compare
     * 
     * @return bool
     */
    function isAnagram($str_a, $str_b) 
    {
        //return (count_chars($str_a, 1) == count_chars($str_b, 1));
        $ar1 = str_split(strtolower($str_a));
        $ar2 = str_split(strtolower($str_b));
        sort($ar1);
        sort($ar2);
        return ($ar1 === $ar2) ? true : false;
    }

    /**
     * The sort function
     * 
     * @param string $str String to sort
     * 
     * @return string
     */
    public function sort($str)
    {
        $ar = str_split($str);
        sort($ar);
        return trim(implode('', $ar));
    }

    /**
     * The anagram function with custom sort
     * 
     * @param string $str1 First string to check
     * @param string $str2 Second string to check
     * 
     * @return bool
     */
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
