<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{

    function it_should_say_fizz()
    {
        $this->sayit(3)->shouldReturn('Fizz');
    }

    function it_should_say_buzz()
    {
        $this->sayit(5)->shouldReturn('Buzz');
    }

    function it_should_say_fizzbuzz()
    {
        $this->sayit(15)->shouldReturn('FizzBuzz');
    }

    function it_should_say_buzz_with_9()
    {
        $this->sayit(9)->shouldReturn('Fizz');
    }

    function it_should_say_correctly()
    {
        $this->sayitinarray(15)->shouldReturn('1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz');
    }

}
