<?php
namespace Moo;

class Calculator 
{
    //private $rules = [80 => 4, 70 => 3, 60 => 2, 40 => 1, 0 => 0];
    private $rules = [];

    public function __construct(Grade $grade = null)
    {
        if ($grade) {
            $this->rules[] = $grade;
        }
    }

    public function setRule(Grade $grade)
    {
        $this->rules[] = $grade;
    }

    public function calculate($points)
    {
        foreach ($this->rules as $checker ) {
            if ($checker->check($points)) {
                return $checker->grade;
                break;
            }
        }
    }
}
