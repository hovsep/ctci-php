<?php

require_once __DIR__ . '/../../src/ArraysAndStrings/OneAway.php';

use ArraysAndStrings\OneAway;

class OneAwayTest extends \PHPUnit\Framework\TestCase
{

    public function testIsOneEditAway()
    {
        $this->assertTrue(OneAway::isOneEditAway("", ""));
        $this->assertTrue(OneAway::isOneEditAway("", "b"));
        $this->assertTrue(OneAway::isOneEditAway("a", "b"));
        $this->assertTrue(OneAway::isOneEditAway("pae", "pale"));
        $this->assertTrue(OneAway::isOneEditAway("pales", "paes"));
        $this->assertTrue(OneAway::isOneEditAway("pawe", "pave"));
        $this->assertFalse(OneAway::isOneEditAway("paxye", "pamne"));
    }
}
