<?php

require_once __DIR__ . '/../../src/LinkedLists/MyLinkedListNode.php';
require_once __DIR__ . '/../../src/LinkedLists/RemoveDups.php';


use LinkedLists\RemoveDups;

class RemoveDupsTest extends \PHPUnit\Framework\TestCase
{

    public function testEquality()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m3 = new \LinkedLists\MyLinkedListNode(3, null);
        $m2 = new \LinkedLists\MyLinkedListNode(2, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(1, $m2);

        $this->assertEquals((string) $n1, (string) $m1);
    }

    public function testWithUnique()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m3 = new \LinkedLists\MyLinkedListNode(3, null);
        $m2 = new \LinkedLists\MyLinkedListNode(2, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(1, $m2);

        $this->assertEquals((string) RemoveDups::removeDups($n1), (string) RemoveDups::removeDups($m1));
        $this->assertEquals((string) RemoveDups::removeDups2($n1), (string) RemoveDups::removeDups2($m1));
    }

    public function testWithDuplicates()
    {
        $n9 = new \LinkedLists\MyLinkedListNode(6, null);
        $n8 = new \LinkedLists\MyLinkedListNode(6, $n9);
        $n7 = new \LinkedLists\MyLinkedListNode(5, $n8);
        $n6 = new \LinkedLists\MyLinkedListNode(2, $n7);
        $n5 = new \LinkedLists\MyLinkedListNode(4, $n6);
        $n4 = new \LinkedLists\MyLinkedListNode(3, $n5);
        $n3 = new \LinkedLists\MyLinkedListNode(2, $n4);
        $n2 = new \LinkedLists\MyLinkedListNode(1, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m6 = new \LinkedLists\MyLinkedListNode(6, null);
        $m5 = new \LinkedLists\MyLinkedListNode(5, $m6);
        $m4 = new \LinkedLists\MyLinkedListNode(4, $m5);
        $m3 = new \LinkedLists\MyLinkedListNode(3, $m4);
        $m2 = new \LinkedLists\MyLinkedListNode(2, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(1, $m2);


        $this->assertEquals((string) RemoveDups::removeDups($n1), (string) RemoveDups::removeDups($m1));
        $this->assertEquals((string) RemoveDups::removeDups2($n1), (string) RemoveDups::removeDups2($m1));
    }
}
