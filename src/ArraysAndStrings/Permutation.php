<?php

namespace ArraysAndStrings;

/**
 * Question 1.2
 *
 * Check Permutation: Given two strings, write a method to decide if one is a permutation of the other
 *
 * Class Permutation
 * @package ArraysAndStrings
 */
class Permutation
{


    public static function isPermutation($s1, $s2)
    {
        $s1CharactersCount = [];
        $s2CharactersCount = [];

        for ($i = 0; $i < strlen($s1); $i++) {
            $c = $s1[$i];
            if (array_key_exists($c, $s1CharactersCount)) {
                $s1CharactersCount[$c] ++;
            } else {
                $s1CharactersCount[$c] = 1;
            }
        }

        for ($i = 0; $i < strlen($s2); $i++) {
            $c = $s2[$i];
            if (array_key_exists($c, $s2CharactersCount)) {
                $s2CharactersCount[$c] ++;
            } else {
                $s2CharactersCount[$c] = 1;
            }
        }

        if (count($s1CharactersCount) != count($s2CharactersCount)) {
            return false;
        }


        foreach ($s1CharactersCount as $c => $v) {
            if (!array_key_exists($c, $s2CharactersCount) || ($v != $s2CharactersCount[$c])) {
                return false;
            }
        }

        foreach ($s2CharactersCount as $c => $v) {
            if (!array_key_exists($c, $s1CharactersCount) || ($v != $s1CharactersCount[$c])) {
                return false;
            }
        }

        return true;

    }
}