<?php

use PHPUnit\Framework\TestCase;
use Kata\Grade;

final class GradeTest extends TestCase
{
    public function setup()
    {
    }

    public function testGot50ShouldGet1() 
    {
        $grade = new Grade(69, 50, 1);
        $this->assertEquals(1, $grade->check(50));
    }

    public function testGot60ShouldGet2() 
    {
        $grade = new Grade(79, 60, 2);
        $this->assertEquals(2, $grade->check(60));
    }
}
