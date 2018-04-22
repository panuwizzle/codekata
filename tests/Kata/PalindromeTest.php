<?php
namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Palindrome;

class PalindromeTest extends TestCase
{
    public function testReverseString()
    {
        $obj = new Palindrome();

        $this->assertEquals('tawunahp', $obj->reverseString('phanuwat'));
        $this->assertEquals('nawusgnauhp', $obj->reverseString('phuangsuwan'));

    }
    
    public function testIsPalindrome()
    {
        $obj = new Palindrome();

        $this->assertTrue($obj->isPalindrome('amma'));
        $this->assertFalse($obj->isPalindrome('nocool'));

        $this->assertTrue($obj->isPalindrome('ameiema'));
        $this->assertFalse($obj->isPalindrome('paramesium'));

    }
}
