<?php

require_once __DIR__ . '/../../src/LinkedLists/MyLinkedListNode.php';
require_once __DIR__ . '/../../src/LinkedLists/Partition.php';


use LinkedLists\Partition;

class PartitionTest extends \PHPUnit\Framework\TestCase
{

    public function testWithSortedList()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m3 = new \LinkedLists\MyLinkedListNode(3, null);
        $m2 = new \LinkedLists\MyLinkedListNode(2, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(1, $m2);

        $this->assertEquals((string) $n1, (string) Partition::partition($m1, 2));
    }

    public function testFromBook()
    {
        $n7 = new \LinkedLists\MyLinkedListNode(10, null);
        $n6 = new \LinkedLists\MyLinkedListNode(5, $n7);
        $n5 = new \LinkedLists\MyLinkedListNode(8, $n6);
        $n4 = new \LinkedLists\MyLinkedListNode(5, $n5);
        $n3 = new \LinkedLists\MyLinkedListNode(3, $n4);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m7 = new \LinkedLists\MyLinkedListNode(1, null);
        $m6 = new \LinkedLists\MyLinkedListNode(2, $m7);
        $m5 = new \LinkedLists\MyLinkedListNode(10, $m6);
        $m4 = new \LinkedLists\MyLinkedListNode(5, $m5);
        $m3 = new \LinkedLists\MyLinkedListNode(8, $m4);
        $m2 = new \LinkedLists\MyLinkedListNode(5, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(3, $m2);


        $this->assertEquals((string) $n1, (string) Partition::partition($m1, 5));
    }

    public function testWithSortedList_AndOutOfListX_Smaller()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m3 = new \LinkedLists\MyLinkedListNode(3, null);
        $m2 = new \LinkedLists\MyLinkedListNode(2, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(1, $m2);

        $this->assertEquals((string) $n1, (string) Partition::partition($m1, 0));
    }

    public function testWithUnSortedList()
    {
        $n5 = new \LinkedLists\MyLinkedListNode(5, null);
        $n4 = new \LinkedLists\MyLinkedListNode(3, $n5);
        $n3 = new \LinkedLists\MyLinkedListNode(4, $n4);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m5 = new \LinkedLists\MyLinkedListNode(1, null);
        $m4 = new \LinkedLists\MyLinkedListNode(5, $m5);
        $m3 = new \LinkedLists\MyLinkedListNode(2, $m4);
        $m2 = new \LinkedLists\MyLinkedListNode(3, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(4, $m2);

        $this->assertEquals((string) $n1, (string) Partition::partition($m1, 3));
    }

    public function testWithUnSortedList_AndOutOfScopeX()
    {
        $n5 = new \LinkedLists\MyLinkedListNode(6, null);
        $n4 = new \LinkedLists\MyLinkedListNode(3, $n5);
        $n3 = new \LinkedLists\MyLinkedListNode(4, $n4);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m5 = new \LinkedLists\MyLinkedListNode(1, null);
        $m4 = new \LinkedLists\MyLinkedListNode(6, $m5);
        $m3 = new \LinkedLists\MyLinkedListNode(2, $m4);
        $m2 = new \LinkedLists\MyLinkedListNode(4, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(3, $m2);

        $this->assertEquals((string) $n1, (string) Partition::partition($m1, 5));
    }


}
