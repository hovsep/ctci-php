<?php

require_once __DIR__ . '/../../src/ArraysAndStrings/UniqueChars.php';

use ArraysAndStrings\UniqueChars;

class UniqueCharsTest extends \PHPUnit\Framework\TestCase
{

    public function testIsUniqueChars()
    {
       $this->assertTrue(UniqueChars::isUniqueChars(""));
       $this->assertTrue(UniqueChars::isUniqueChars("abc"));
       $this->assertFalse(UniqueChars::isUniqueChars("aabc"));
    }

    public function testIsUniqueChars2()
    {
        $this->assertTrue(UniqueChars::isUniqueChars2(""));
        $this->assertTrue(UniqueChars::isUniqueChars2("abc"));
        $this->assertFalse(UniqueChars::isUniqueChars2("aabc"));
    }
}
