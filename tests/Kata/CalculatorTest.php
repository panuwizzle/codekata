<?php

use PHPUnit\Framework\TestCase;
use Kata\Calculator;
use Kata\Grade;

final class CalculatorTest extends TestCase
{
    private $cal;
    public function setup()
    {
        $this->cal = new Calculator();
        $this->cal->setRule(new Grade(100, 80, 4));
        $this->cal->setRule(new Grade(79, 70, 3));
        $this->cal->setRule(new Grade(69, 60, 2));
        $this->cal->setRule(new Grade(59, 50, 1));
        $this->cal->setRule(new Grade(49, 0, 0));
    }

    public function testClassExisted()
    {
        $this->assertInstanceOf(Calculator::class, $this->cal);
    }

    public function testGot50ShouldGet1()
    {
        $this->assertEquals(1, $this->cal->calculate(50));
    }
    public function testGot60ShoudGet2()
    {
        $this->assertEquals(2, $this->cal->calculate(60));
    }
    public function testGot70ShoudGet3()
    {
        $this->assertEquals(3, $this->cal->calculate(70));
    }
    public function testGot80ShoudGet4()
    {
        $this->assertEquals(4, $this->cal->calculate(80));
    }

    public function testGot40ShouldGet0()
    {
        $this->assertEquals(0, $this->cal->calculate(40));
    }
    public function testGot90ShouldGet4()
    {
        $this->assertEquals(4, $this->cal->calculate(90));
    }

    // YoProgrammer
    public function testRandomScore0to40GradeShouldBe0()
    {
        $point = rand(0, 40);
        $this->assertEquals(0, $this->cal->calculate($point));
    }

    public function testRandomScore50to59GradeShouldBe1()
    {
        $point = rand(50, 59);
        $this->assertEquals(1, $this->cal->calculate($point));
    }

    public function testRandomScore60to69GradeShouldBe2()
    {
        $point = rand(60, 69);
        $this->assertEquals(2, $this->cal->calculate($point));
    }

    public function testRandomScore70to79GradeShouldBe3()
    {
        $point = rand(70, 79);
        $this->assertEquals(3, $this->cal->calculate($point));
    }

    public function testRandomScore80to100GradeShouldBe4()
    {
        $point = rand(80, 100);
        $this->assertEquals(4, $this->cal->calculate($point));
    }
}
