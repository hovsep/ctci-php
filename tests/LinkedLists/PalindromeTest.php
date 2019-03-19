<?php

require_once __DIR__ . '/../../src/LinkedLists/MyLinkedListNode.php';
require_once __DIR__ . '/../../src/LinkedLists/Palindrome.php';


use LinkedLists\Palindrome;

class PalindromeTest extends \PHPUnit\Framework\TestCase
{

    public function testWithOneElement()
    {
        $n1 = new \LinkedLists\MyLinkedListNode(1, null);

        $this->assertTrue(Palindrome::isPalindrome($n1));
    }

    public function t1estWithThreeElements()
    {
        $n3 = new \LinkedLists\MyLinkedListNode(1, null);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $this->assertTrue(Palindrome::isPalindrome($n1));
    }

    public function t1estWithFourElements()
    {
        $n4 = new \LinkedLists\MyLinkedListNode(1, null);
        $n3 = new \LinkedLists\MyLinkedListNode(2, $n4);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $this->assertTrue(Palindrome::isPalindrome($n1));
    }

    public function t1estWithFourElements_NotPalindrome()
    {
        $n4 = new \LinkedLists\MyLinkedListNode(3, null);
        $n3 = new \LinkedLists\MyLinkedListNode(2, $n4);
        $n2 = new \LinkedLists\MyLinkedListNode(2, $n3);
        $n1 = new \LinkedLists\MyLinkedListNode(1, $n2);

        $this->assertFalse(Palindrome::isPalindrome($n1));
    }

}
