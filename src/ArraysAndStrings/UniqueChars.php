<?php

namespace ArraysAndStrings;

/**
 * Question 1.1
 *
 * Implement an algorithm to determine if a string has all unique characters.
 * What if you can not use additional data structures?
 *
 * Class UniqueChars
 * @package ArraysAndStrings
 */
class UniqueChars
{

    /**
     *
     * Doesn't use additional space
     * @param $s
     * @return bool
     */
    public static function isUniqueChars($s)
    {
        if (strlen($s) == 0) {
            return true;
        }

        for ($i = 0; $i < strlen($s); $i++) {
            for ($j = 0; $j < strlen($s); $j++) {
                if (($i != $j) && ($s[$i] === $s[$j])) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * Additional storage used (array)
     *
     * @param $s
     * @return bool
     */
    public static function isUniqueChars2($s)
    {
        if (strlen($s) == 0) {
            return true;
        }

        $used = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (array_key_exists($s[$i], $used)) {
                return false;
            }

            $used[$s[$i]] = true;
        }

        return true;
    }
}