<?php

namespace ArraysAndStrings;

/**
 * Question 1.4
 *
 * Palindrome Permutation: Given a string, write a function to check if it is a permutation of
 * a palindrome. A palindrome is a word or phrase that is the same forwards and backwards. A
 * permutation is a rearrangement of letters. The palindrome does not need to be limited to just
 * dictionary words.
 *
 * Class Permutation
 * @package ArraysAndStrings
 */
class PalindromePermutation {


    public static function isPalindromePermutation($s)
    {
        if (strlen($s) < 2) {
            return true;
        }

        $charCounts = [];

        for ($i = 0; $i < strlen($s); $i++) {

            if (!preg_match('~[A-Za-z0-9]~msi', $s[$i])) {
                continue;
            }

            if (array_key_exists($s[$i], $charCounts)) {
                $charCounts[$s[$i]]++;
            } else {
                $charCounts[$s[$i]] = 1;
            }
        }

        $centerFound = false;

        foreach ($charCounts as $char => $count) {
            if ($count % 2 != 0) {
                if ($centerFound) {
                    return false;
                } else {
                    $centerFound = true;
                }
            }
        }

        return true;
    }
}