<?php

require_once __DIR__ . '/../../src/LinkedLists/MyLinkedListNode.php';
require_once __DIR__ . '/../../src/LinkedLists/DeleteMiddleNode.php';


use LinkedLists\DeleteMiddleNode;

class ReturnKthFromLastTest extends \PHPUnit\Framework\TestCase
{

    public function testWithMiddle()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m2 = new \LinkedLists\MyLinkedListNode(3, null);
        $m1 = new \LinkedLists\MyLinkedListNode(1, $m2);

        DeleteMiddleNode::deleteMiddleNode($n2);

        $this->assertEquals((string) $m1, (string) $n1);
    }

    public function testWithMiddle2()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m2 = new \LinkedLists\MyLinkedListNode(3, null);
        $m1 = new \LinkedLists\MyLinkedListNode(1, $m2);

        DeleteMiddleNode::deleteMiddleNode2($n2);

        $this->assertEquals((string) $m1, (string) $n1);
    }


}
