<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 16.01.19
 * Time: 23:38
 */

namespace ArraysAndStrings;

/**
 * Question 1.5
 *
 * One Away: There are three types of edits that can be performed on strings: insert a character,
 * remove a character, or replace a character. Given two strings, write a function to check if they are
 * one edit (or zero edits) away.
 *
 * Class OneAway
 * @package ArraysAndStrings
 */
class OneAway {

    public static function isOneEditAway($s1, $s2)
    {
        if ($s1 === $s2) {
            return true;
        }

        if (abs(strlen($s1) - strlen($s2)) > 1) {
            return false;
        }

        $i = 0;
        $j = 0;
        $k = strlen($s1) - 1;
        $l = strlen($s2) - 1;
        $diffIndex = 0;

        while (($i < strlen($s1)) && ($j < strlen($s2))) {

            if ($s1[$i] != $s2[$j]) {
                $diffIndex = $i;

                while (($k > 0) && ($l > 0)) {

                    if ($s1[$k] != $s2[$l]) {
                        if ($diffIndex != max($k, $l)) {
                            return false;
                        }
                    }

                    $k--;
                    $l--;
                }
            }

            $i++;
            $j++;
        }

        return true;
    }

}