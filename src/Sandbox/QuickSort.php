<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 11.03.19
 * Time: 1:11
 */

namespace Sandbox;


class QuickSort
{

    public static function qsort($array) {
        $len = count($array);

        if ($len <= 1) {
            return $array;
        } else {
            $pivot = array_shift($array);
            $left = $right = [];

            foreach ($array as $item) {
                if ($item < $pivot) {
                    $left[] = $item;
                } else {
                    $right[] = $item;
                }
            }

            return array_merge(self::qsort($left), [$pivot], self::qsort($right));
        }
    }

}

$unsorted = [43,21,2,1,9,24,2,99,23,8,7,114,92,5];

print_r(QuickSort::qsort($unsorted));