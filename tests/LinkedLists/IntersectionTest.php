<?php

require_once __DIR__ . '/../../src/LinkedLists/MyLinkedListNode.php';
require_once __DIR__ . '/../../src/LinkedLists/Intersection.php';


use LinkedLists\Intersection;

class IntersectionTest extends \PHPUnit\Framework\TestCase
{

    public function testWithTwoSeparatedLists()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m3 = new \LinkedLists\MyLinkedListNode(6, null);
        $m2 = new \LinkedLists\MyLinkedListNode(5, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(4, $m2);

        $this->assertFalse(Intersection::intersects($n1, $m1));
    }


    public function testWithTwoSeparatedLists_HavingSameValue()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m3 = new \LinkedLists\MyLinkedListNode(3, null);
        $m2 = new \LinkedLists\MyLinkedListNode(2, $m3);
        $m1 = new \LinkedLists\MyLinkedListNode(1, $m2);

        $this->assertFalse(Intersection::intersects($n1, $m1));
    }

    public function testWithIntersectedLists()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(3, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $m1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $this->assertTrue(Intersection::intersects($n1, $m1));
    }

}
