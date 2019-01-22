<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 22.01.19
 * Time: 16:29
 */

namespace ArraysAndStrings;

/**
 * Question 1.7
 *
 * Rotate Matrix: Given an image represented by an NxN matrix, where each pixel in the image is 4
 * bytes, write a method to rotate the image by 90 degrees. Can you do this in place?
 */
class RotateMatrix
{

    public static function rotate($matrix)
    {
        $rotated = [];
        $n = count($matrix);

        for ($r = 0; $r < $n; $r++) {
            for ($c = 0; $c < $n; $c++) {
                $rotated[$r][$c] = $matrix[$n - 1 - $c][$r];
            }
        }

        return $rotated;
    }
}