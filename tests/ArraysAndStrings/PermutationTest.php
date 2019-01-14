<?php

require_once __DIR__ . '/../../src/ArraysAndStrings/Permutation.php';

use ArraysAndStrings\Permutation;

class PermutationTest extends \PHPUnit\Framework\TestCase
{

    public function testIsUniqueChars()
    {
        $this->assertTrue(Permutation::isPermutation("abcdefgg", "gbadcgfe"));
        $this->assertTrue(Permutation::isPermutation("basic", "abcis"));
        $this->assertFalse(Permutation::isPermutation("dog", "wolf"));
        $this->assertFalse(Permutation::isPermutation("", "cat"));
        $this->assertFalse(Permutation::isPermutation("abc", "cabb"));
    }
}
