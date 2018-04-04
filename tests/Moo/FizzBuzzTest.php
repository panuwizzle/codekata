<?php
use PHPUnit\Framework\TestCase;
use Moo\FizzBuzz;

final class FizzBuzzTest extends TestCase
{
    private $class;

    public function setup() {
        $this->class = new FizzBuzz();
    }

    public function testClassExisted()
    {
        $this->assertInstanceOf(FizzBuzz::class, $this->class);
    }

    public function testShouldShowFizzBuzz() 
    {
        // if it can be devided by both 3 and 5
        $params = [15, 30, 45, 60];
        foreach ($params as $i) {
            $this->assertEquals('FizzBuzz', $this->class->check($i));
        }
    }

    public function testShouldShowOnlyFizz()
    {
        // if it can be devided by 3
        $params = [3, 6, 9, 12, 18, 21, 24];
        foreach ($params as $i) {
            $this->assertEquals('Fizz', $this->class->check($i));
        }
    }

    public function testShouldShowOnlyBuzz()
    {
        // if it can be devided by 5
        $params = [5, 10, 20, 25, 35, 40];
        foreach ($params as $i) {
            $this->assertEquals('Buzz', $this->class->check($i));
        }
    }
}

