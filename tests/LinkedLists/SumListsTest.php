<?php

require_once __DIR__ . '/../../src/LinkedLists/MyLinkedListNode.php';
require_once __DIR__ . '/../../src/LinkedLists/SumLists.php';


use LinkedLists\SumLists;

class SumListsTest extends \PHPUnit\Framework\TestCase
{

    public function testSumReverseWithNoCarry()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m3 = new \LinkedLists\MyLinkedListNode(3, null);
        $m2 = new \LinkedLists\MyLinkedListNode(2, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(1, $m2);

        $k3 = new \LinkedLists\MyLinkedListNode(6, null);
        $k2 = new \LinkedLists\MyLinkedListNode(4, $k3);
        $k1 = new \LinkedLists\MyLinkedListNode(2, $k2);

        $this->assertEquals((string) $k1, (string) SumLists::sumListsReverse($n1, $m1));
    }

    public function testSumReverseWithCarry()
    {
        $n1 = new \LinkedLists\MyLinkedListNode(1, null);

        $m2 = new \LinkedLists\MyLinkedListNode(9, null);
        $m1 = new \LinkedLists\MyLinkedListNode(9, $m2);

        $k3 = new \LinkedLists\MyLinkedListNode(1, null);
        $k2 = new \LinkedLists\MyLinkedListNode(0, $k3);
        $k1 = new \LinkedLists\MyLinkedListNode(0, $k2);

        $this->assertEquals((string) $k1, (string) SumLists::sumListsReverse($n1, $m1));
    }


}
