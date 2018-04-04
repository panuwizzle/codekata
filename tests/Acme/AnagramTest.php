<?php
namespace Acme;

use PHPUnit\Framework\TestCase;
use Acme\Anagram;

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

    }
}
