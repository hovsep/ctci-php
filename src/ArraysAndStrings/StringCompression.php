<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 17.01.19
 * Time: 19:16
 */

namespace ArraysAndStrings;


class StringCompression
{

    public static function compress($s)
    {
        $compressed = '';
        $currentChar = $s[0];
        $charCounter = 1;

        for ($i = 1; $i < strlen($s); $i++) {
            if ($s[$i] == $s[$i - 1]) {
                $charCounter++;
            } else {
                $compressed .= $currentChar . $charCounter;
                $charCounter = 1;
                $currentChar = $s[$i];
            }
        }

        $compressed .= $currentChar . $charCounter;

        return (strlen($compressed) < strlen($s)) ? $compressed : $s;
    }

}