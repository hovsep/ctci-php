<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 22.01.19
 * Time: 16:29
 */

namespace ArraysAndStrings;

/**
 * Question 1.9
 *
 * String Rotation: Assume you have a method isSubstring which checks if one word is a substring
 * of another. Given two strings, s1 and s2, write code to check if s2 is a rotation of s1 using only one
 * call to isSubstring (e.g., "waterbottle" is a rotation of" erbottlewat")
 */
class StringRotation
{

    public static function rotated($s1, $s2)
    {
        return empty($s1) || !(false === strpos($s2.$s2, $s1));
    }
}