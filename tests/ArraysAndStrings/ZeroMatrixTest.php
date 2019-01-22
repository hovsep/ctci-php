<?php

require_once __DIR__ . '/../../src/ArraysAndStrings/ZeroMatrix.php';

use ArraysAndStrings\ZeroMatrix;

class ZeroMatrixTest extends \PHPUnit\Framework\TestCase
{

    public function testZero()
    {
        $this->assertSame([[]], ZeroMatrix::zero([[]]));
        $this->assertSame([[1]], ZeroMatrix::zero([[1]]));
        $this->assertSame([[0]], ZeroMatrix::zero([[0]]));
        $this->assertSame([[0, 0]], ZeroMatrix::zero([[0, 0]]));

        $this->assertSame([
            [0,0],
            [0,1]
        ], ZeroMatrix::zero([
            [0,1],
            [1,1]
        ]));

        $this->assertSame([
            [1, 0, 3],
            [0, 0, 0],
            [7, 0, 9]
        ], ZeroMatrix::zero([
            [1, 2, 3],
            [4, 0, 6],
            [7, 8, 9]
        ]));
    }
}
