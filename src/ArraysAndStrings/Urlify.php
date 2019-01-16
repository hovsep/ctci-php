<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 16.01.19
 * Time: 14:05
 */

namespace ArraysAndStrings;

/**
 * Question 1.3
 *
 * URLify: Write a method to replace all spaces in a string with '%20'. You may assume that the string
 * has sufficient space at the end to hold the additional characters, and that you are given the "true"
 * length of the string. (Note: if implementing in Java, please use a character array so that you can
 * perform this operation in place.)
 */
class Urlify
{
    const SPACE = ' ';

    public static function urlify($input, $l) {

        for ($i = 0; $i < strlen($input); $i++) {
            if ($input[$i] == self::SPACE) {
                //Shift rest string
                for ($j = $l - 1; $j > $i; $j--) {
                    $input[$j+2] = $input[$j];
                }

                $input[$i] = '%';
                $input[$i+1] = '2';
                $input[$i+2] = '0';

                $l +=2;
            }
        }

        return $input;
    }

}