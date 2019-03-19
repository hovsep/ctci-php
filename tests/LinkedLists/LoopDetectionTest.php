<?php

require_once __DIR__ . '/../../src/LinkedLists/MyLinkedListNode.php';
require_once __DIR__ . '/../../src/LinkedLists/LoopDetection.php';


use LinkedLists\LoopDetection;

class LoopDetectionTest extends \PHPUnit\Framework\TestCase
{

    public function testWithListWithoutLoop()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $this->assertNull(LoopDetection::detect($n1));
    }

    public function testWithLoop_FromListHead()
    {
        $n5 = new \LinkedLists\MyLinkedListNode(5, null);
        $n4 = new \LinkedLists\MyLinkedListNode(4, $n5);
        $n3 = new \LinkedLists\MyLinkedListNode(3, $n4);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $n5->next = $n1;

        $this->assertEquals(1, LoopDetection::detect($n1)->data);
    }

    public function testWithLoop_FromListTail()
    {
        $n5 = new \LinkedLists\MyLinkedListNode(5, null);
        $n4 = new \LinkedLists\MyLinkedListNode(4, $n5);
        $n3 = new \LinkedLists\MyLinkedListNode(3, $n4);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $n5->next = $n5;

        $this->assertEquals(5, LoopDetection::detect($n1)->data);
    }

    public function testWithLoop_FromListMiddle()
    {
        $n5 = new \LinkedLists\MyLinkedListNode(5, null);
        $n4 = new \LinkedLists\MyLinkedListNode(4, $n5);
        $n3 = new \LinkedLists\MyLinkedListNode(3, $n4);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $n5->next = $n2;

        $this->assertEquals(2, LoopDetection::detect($n1)->data);
    }
}
