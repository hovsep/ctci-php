<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 22.01.19
 * Time: 16:29
 */

namespace ArraysAndStrings;

/**
 * Question 1.8
 *
 * Zero Matrix: Write an algorithm such that if an element in an MxN matrix is 0, its entire row and
 * column are set to 0
 */
class ZeroMatrix
{

    public static function zero($matrix)
    {
        $m = count($matrix);
        $n = count($matrix[0]);

        $rowsToMakeZero = [];
        $colsToMakeZero = [];

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($matrix[$i][$j] === 0) {
                    $rowsToMakeZero[] = $i;
                    $colsToMakeZero[] = $j;
                }
            }
        }

        foreach ($rowsToMakeZero as $row) {
            for ($col = 0; $col < $n; $col ++) {
                $matrix[$row][$col] = 0;
            }
        }

        foreach ($colsToMakeZero as $col) {
            for ($row = 0; $row < $m; $row++) {
                $matrix[$row][$col] = 0;
            }
        }

        return $matrix;
    }
}