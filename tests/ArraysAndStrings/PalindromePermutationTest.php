<?php

require_once __DIR__ . '/../../src/ArraysAndStrings/PalindromePermutation.php';

use ArraysAndStrings\PalindromePermutation;

class PalindromePermutationTest extends \PHPUnit\Framework\TestCase
{

    public function testIsPalindromePermutation()
    {
        $this->assertTrue(PalindromePermutation::isPalindromePermutation(""));
        $this->assertTrue(PalindromePermutation::isPalindromePermutation("a"));
        $this->assertTrue(PalindromePermutation::isPalindromePermutation("acto tac"));
        $this->assertTrue(PalindromePermutation::isPalindromePermutation("act atac"));
        $this->assertTrue(PalindromePermutation::isPalindromePermutation("act cat"));
        $this->assertTrue(PalindromePermutation::isPalindromePermutation("bbb"));
        $this->assertTrue(PalindromePermutation::isPalindromePermutation("cc"));
        $this->assertFalse(PalindromePermutation::isPalindromePermutation("ccbncc"));
        $this->assertTrue(PalindromePermutation::isPalindromePermutation("abba-civic@daad paap+izzi"));
    }
}
