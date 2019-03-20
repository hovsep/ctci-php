<?php

use StackAndQueue\StackOfPlates;

require_once __DIR__ . '/../../src/StackAndQueue/StackOfPlates.php';

class StackOfPlatesTest extends \PHPUnit\Framework\TestCase {

    public function testWithBigCapacity()
    {
        $stack = new StackOfPlates(100);
        $stack->push(3);
        $stack->push(4);
        $stack->push(5);
        $stack->push(6);
        $this->assertEquals(6, $stack->pop());
        $this->assertEquals(5, $stack->pop());
        $this->assertEquals(4, $stack->pop());
        $this->assertEquals(3, $stack->pop());
    }

    public function testWithSmallCapacity()
    {
        $stack = new StackOfPlates(2);
        $stack->push(3);
        $stack->push(4);
        $stack->push(5);
        $stack->push(6);
        $this->assertEquals(6, $stack->pop());
        $this->assertEquals(5, $stack->pop());
        $this->assertEquals(4, $stack->pop());
        $this->assertEquals(3, $stack->pop());
    }

    public function withSmallThreshold_PopAtIndex()
    {
        $stack = new StackOfPlates(2);
        $stack->push(3);
        $stack->push(4);
        $stack->push(5);
        $stack->push(6);
        $stack->push(7);
        $stack->push(8);

        $this->assertEquals(6, $stack->popAt(1));
        $this->assertEquals(5, $stack->popAt(1));
        $this->assertEquals(8, $stack->pop());
        $this->assertEquals(4, $stack->popAt(0));
        $this->assertEquals(7, $stack->pop());
    }
}