<?php

namespace spec\Kata;

use Kata\Bot;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BotSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Bot::class);
    }

    function it_should_be_able_to_reset_the_position()
    {
        $this->reset();
        $this->getCurrentPosition()->shouldReturn([0, 0]);
    }

    function it_should_show_the_current_position()
    {
        $this->getCurrentPosition()->shouldReturn([0, 0]);
    }

    // try step to the north (not turning yet)
    function it_should_walk_farward_1_step_north()
    {
        $this->reset();
        $this->walk(1);
        $this->getCurrentPosition()->shouldReturn([0, 1]);
    }

    function it_should_walk_farward_2_step_north()
    {
        $this->reset();
        $this->walk(2);
        $this->getCurrentPosition()->shouldReturn([0, 2]);
    }

    // try turn
    function it_should_turn_left_and_face_west()
    {
        $this->reset();
        $this->turn('L');
        $this->getFacing()->shouldReturn('West');
    }
    function it_should_turn_right_and_face_east()
    {
        $this->reset();
        $this->turn('R');
        $this->getFacing()->shouldReturn('East');
    }
    function it_should_turn_left_and_face_south()
    {
        $this->reset();
        $this->turn('L');
        $this->turn('L');
        $this->getFacing()->shouldReturn('South');
    }

    function it_should_walk_farward_1_step_east()
    {
        $this->reset();
        $this->walk(1);
        $this->getCurrentPosition()->shouldReturn([0, 1]);
    }

    function it_should_walk_farward_2_step_east()
    {
        $this->reset();
        $this->walk(2);
        $this->getCurrentPosition()->shouldReturn([0, 2]);
    }

    function it_should_parse_the_command_to_array()
    {
        $command = "LW1RW2LW3RW4";
        $this->parseCommand($command)->shouldReturn(['L','W1','R','W2','L','W3','R','W4']);
    }

    function it_should_parse_the_command_to_array2()
    {
        $command = "LLLLRRRRW19";
        $this->parseCommand($command)->shouldReturn(['L','L','L','L','R','R','R','R', 'W19']);
    }
}
