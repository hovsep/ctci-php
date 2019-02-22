<?php

require_once __DIR__ . '/../../src/LinkedLists/MyLinkedListNode.php';
require_once __DIR__ . '/../../src/LinkedLists/ReturnKthFromLast.php';


use LinkedLists\ReturnKthFromLast;

class ReturnKthFromLastTest extends \PHPUnit\Framework\TestCase
{

    public function testWithOutOfScope()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $this->assertNull(ReturnKthFromLast::kthToLast($n1, 3));
    }

    public function testWithZero()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $this->assertEquals(3, ReturnKthFromLast::kthToLast($n1, 0)->data);
    }

    public function testWithNoneZero()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $this->assertEquals(2, ReturnKthFromLast::kthToLast($n1, 1)->data);
    }

}
