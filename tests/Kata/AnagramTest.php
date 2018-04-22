<?php
namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Anagram;

class AnagramTest extends TestCase
{
    public function testIsAnagram()
    {
        $obj = new Anagram();
        $this->assertFalse($obj->isAnagram('abcde', 'dcaebd'));
        $this->assertFalse($obj->isAnagram('abcde', 'fffff'));
        $this->assertFalse($obj->isAnagram('america', 'xeamirac'));
        $this->assertFalse($obj->isAnagram('belt', 'yelb'));
        $this->assertTrue($obj->isAnagram('abcde', 'cdeba'));
        $this->assertTrue($obj->isAnagram('abcde', 'dcaeb'));
        $this->assertTrue($obj->isAnagram('abcde', 'dceab'));
        $this->assertTrue($obj->isAnagram('america', 'america'));
        $this->assertTrue($obj->isAnagram('belt', 'telb'));
        $this->assertTrue($obj->isAnagram('python', 'typhon'));

    }
}
