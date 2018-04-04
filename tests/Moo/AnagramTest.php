<?php
use Moo\Anagram;
use PHPUnit\Framework\TestCase;

final class AnagramTest extends TestCase
{
    private $anagram;
    public function setup()
    {
        $this->anagram = new Anagram();
    }

    public function testClassExisted()
    {
        $this->assertInstanceOf(Anagram::class, $this->anagram);
    }

    public function testIsAnagram() 
    {
        $this->assertTrue($this->anagram->isAnagram('abcde', 'cd eba'));
        $this->assertTrue($this->anagram->isAnagram('abcde', 'dceab'));
        $this->assertTrue($this->anagram->isAnagram('abcde', 'dcaeb'));
        $this->assertTrue($this->anagram->isAnagram('python', 'typhon'));

        $this->assertFalse($this->anagram->isAnagram('abcde', 'dcaebd'));
        $this->assertFalse($this->anagram->isAnagram('abcde', 'fffff'));
    }
}
