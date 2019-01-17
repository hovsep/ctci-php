<?php

require_once __DIR__ . '/../../src/ArraysAndStrings/StringCompression.php';

use ArraysAndStrings\StringCompression;

class StringCompressionTest extends \PHPUnit\Framework\TestCase
{

    public function testCompress()
    {
        $this->assertEquals("a", StringCompression::compress("a"));
        $this->assertEquals("aa", StringCompression::compress("aa"));
        $this->assertEquals("a3", StringCompression::compress("aaa"));
        $this->assertEquals("aaab", StringCompression::compress("aaab"));
        $this->assertEquals("a3b2", StringCompression::compress("aaabb"));
        $this->assertEquals("a3b2a2", StringCompression::compress("aaabbaa"));
    }
}
