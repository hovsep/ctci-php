<?php

require_once __DIR__ . '/../../src/ArraysAndStrings/StringRotation.php';

use ArraysAndStrings\StringRotation;

class StringRotationTest extends \PHPUnit\Framework\TestCase
{

    public function testRotated()
    {
        $this->assertTrue(StringRotation::rotated("", ""));
        $this->assertTrue(StringRotation::rotated("hello", "hello"));
        $this->assertTrue(StringRotation::rotated("hello", "llohe"));
        $this->assertFalse(StringRotation::rotated("hello", "llo"));
        $this->assertFalse(StringRotation::rotated("hello", "world"));
        $this->assertFalse(StringRotation::rotated("hello", "oehll"));
    }
}
