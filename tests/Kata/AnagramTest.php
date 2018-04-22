<?php
namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Anagram;

class AnagramTest extends TestCase
{
    public function testIsAnagram()
    {
        $obj = new Anagram();

        $this->assertTrue($obj->isAnagram('belt', 'telb'));
        $this->assertTrue($obj->isAnagram('america', 'america'));
        $this->assertTrue($obj->isAnagram('Bernard Lowe', 'Arnold Weber'));

        $this->assertFalse($obj->isAnagram('belt', 'yelb'));
        $this->assertFalse($obj->isAnagram('america', 'xeamirac'));
        $this->assertTrue($obj->isAnagram('abcde', 'cd eba'));
        $this->assertTrue($obj->isAnagram('abcde', 'dceab'));
        $this->assertTrue($obj->isAnagram('abcde', 'dcaeb'));
        $this->assertTrue($obj->isAnagram('python', 'typhon'));

        $this->assertFalse($obj->isAnagram('abcde', 'dcaebd'));
        $this->assertFalse($obj->isAnagram('abcde', 'fffff'));

    }
}
