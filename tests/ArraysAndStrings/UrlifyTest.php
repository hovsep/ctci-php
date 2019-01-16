<?php

require_once __DIR__ . '/../../src/ArraysAndStrings/Urlify.php';

use ArraysAndStrings\Urlify;

class UrlifyTest extends \PHPUnit\Framework\TestCase
{

    public function testUrlify()
    {
        $this->assertSame("hello", URLify::urlify("hello", 5));
        $this->assertSame("hello%20world", URLify::urlify("hello world  ", 11));
        $this->assertSame("hello%20world%20bob", URLify::urlify("hello world bob    ", 15));
    }
}
