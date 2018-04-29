<?php
namespace Kata;
/**
 * Implementation of https://www.hackerrank.com/challenges/grading/problem
 */

class GradingStudent
{
    /**
     * to calculate the grade
     * @param Array $grades
     * @return Array
     */

    public function gradingStudents($grades)
    {
        // fail if below 40
        // n, no more than 60
        // grade, no more than 100
        for ($i = 0; $i < count($grades); $i++) {
            if ($grades[$i] >= 38) { 
                $m = $grades[$i] % 5;
                if ($m == 3) {
                    $grades[$i] += 2;
                } 
                if ($m == 4) {
                    $grades[$i] += 1;
                }
            } 
        }
        return $grades;
    }
}
