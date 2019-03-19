<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 19.03.19
 * Time: 12:43
 */

namespace LinkedLists;

/**
 * Question 2.6
 *
 * Palindrome: Implement a function to check if a linked list is a palindrome
 *
 * Class Palindrome
 * @package LinkedLists
 */
class Palindrome
{

    public static function isPalindrome(MyLinkedListNode $head): bool
    {
        $current = $head;
        $reversedHead = null;

        //Reverse list
        while (!is_null($current)) {
            $reversedHead = new MyLinkedListNode($current->data, $reversedHead);
            $current = $current->next;
        }

        //Compare
        return (0 === strcmp($head, $reversedHead));
    }
}