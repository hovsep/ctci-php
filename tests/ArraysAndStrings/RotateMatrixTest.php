<?php

require_once __DIR__ . '/../../src/ArraysAndStrings/RotateMatrix.php';

use ArraysAndStrings\RotateMatrix;

class RotateMatrixTest extends \PHPUnit\Framework\TestCase
{

    public function testRotate()
    {
        $this->assertSame([[1]], RotateMatrix::rotate([[1]]));

        $this->assertSame([
            [3,1],
            [4,2]
        ], RotateMatrix::rotate([
            [1,2],
            [3,4]
        ]));

        $this->assertSame([
            [7,4,1],
            [8,5,2],
            [9,6,3]
        ], RotateMatrix::rotate([
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ]));
    }
}
