<?php

namespace spec\Kata;

use Kata\GradingStudent;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GradingStudentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(GradingStudent::class);
    }

    function it_should_show_the_correct_grades()
    {
        $grades = [
            73, 67, 38, 33, 0, 1, 21, 84, 94
        ];
        $this->gradingStudents($grades)->shouldReturn([75, 67, 40, 33, 0, 1, 21, 85, 95]);
    }
}
