<?php
namespace Kata;

class Grade
{
    private $upper_point;
    private $lower_point;
    public $grade;

    public function __construct($upper_point, $lower_point, $grade)
    {
        $this->upper_point = $upper_point;
        $this->lower_point = $lower_point;
        $this->grade = $grade;
    }

    public function check($points)
    {
        if ($points >= $this->lower_point && $points <= $this->upper_point) {
            return $this->grade;
        } else {
            return false;
        }
    }
}
