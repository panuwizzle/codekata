<?php
namespace Kata;

/*
 * A robot that walk by parsing the instruction
 * L, R - turn left or right
 * W2, WN - walk by the number after W
 *
 * example. RW2LLW3 = turn right, walk 2 steps, turn left 2 times and walk 3 step
 * The robot will start at 0,0 and facing north
 */
class Bot
{
    private $currentPosition = [0, 0];
    private $facing = 0;
    private $directions = ['North', 'East', 'West', 'South'];
    private $commandStack = [];

    const DIRECTION_NORTH = 0;
    const DIRECTION_EAST = 1;
    const DIRECTION_WEST = 2;
    const DIRECTION_SOUTH = 3;

    public function resetCommand()
    {
        $this->commandStack = [];
    }

    public function execute()
    {
    }

    public function parseCommand($command)
    {
        preg_match_all('/W\d+|[LR]/', $command, $matches);
        return $matches[0];
    }

    public function getCurrentPosition()
    {
        return $this->currentPosition;
    }

    public function getFacing()
    {
        return $this->directions[$this->facing];
    }

    public function reset()
    {
        $this->currentPosition = [0, 0];
    }

    public function walk($step)
    {
        // north
        if ($this->facing == self::DIRECTION_NORTH) {
            $this->currentPosition = [
                $this->currentPosition[0], 
                $this->currentPosition[1] + $step 
            ];
        }

        // east
        if ($this->facing == self::DIRECTION_EAST) {
            $this->currentPosition = [
                $this->currentPosition[0] + $step, 
                $this->currentPosition[1]
            ];
        }

        // west
        if ($this->facing == self::DIRECTION_WEST) {
            $this->currentPosition = [
                $this->currentPosition[0] - $step, 
                $this->currentPosition[1]
            ];
        }

        // south
        if ($this->facing == self::DIRECTION_SOUTH) {
            $this->currentPosition = [
                $this->currentPosition[0] + $step, 
                $this->currentPosition[1]
            ];
        }
    }

    public function turn($direction)
    {
        if ($direction == 'L') {
            switch ($this->facing) {
            case self::DIRECTION_NORTH:
                $this->facing = self::DIRECTION_WEST;
                break;
            case self::DIRECTION_EAST:
                $this->facing = self::DIRECTION_NORTH;
                break;
            case self::DIRECTION_WEST:
                $this->facing = self::DIRECTION_SOUTH;
                break;
            case self::DIRECTION_SOUTH:
                $this->facing = self::DIRECTION_EAST;
                break;
            }
        } 

        if ($direction == 'R') {
            switch ($this->facing) {
            case self::DIRECTION_NORTH:
                $this->facing = self::DIRECTION_EAST;
                break;
            case self::DIRECTION_EAST:
                $this->facing = self::DIRECTION_SOUTH;
                break;
            case self::DIRECTION_WEST:
                $this->facing = self::DIRECTION_NORTH;
                break;
            case self::DIRECTION_SOUTH:
                $this->facing = self::DIRECTION_WEST;
                break;
            }
        }
    }
}

