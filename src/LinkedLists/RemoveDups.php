<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 21.02.19
 * Time: 23:17
 */

namespace LinkedLists;

/**
* Question 2.1
 *
 * Write code to remove duplicates from an unsorted linked list.
 * FOLLOW UP
 * How would you solve this problem if a temporary buffer is not allowed?
 *
 * Class RemoveDups
 * @package LinkedLists
 */
class RemoveDups
{
    /**
     * Requires O(n) additional space
     *
     * @param MyLinkedListNode $head
     * @return MyLinkedListNode
     */
    public static function removeDups(MyLinkedListNode $head)
    {
        $items = [];
        $current = $head;
        $previous = $current;

        while (!is_null($current)) {
            if (array_key_exists($current->data, $items)) {
                $previous->next = $current->next;
            } else {
                $items[$current->data] = true;
                $previous = $current;
            }

            $current = $current->next;
        }

        return $head;
    }

    /**
     * In place algorithm
     * No additional space needed
     *
     * @param MyLinkedListNode $head
     * @return MyLinkedListNode
     */
    public static function removeDups2(MyLinkedListNode $head)
    {
        $current = $head;
        $runner = null;

        while(!is_null($current)) {

            $runner = $current->next;

            while (!is_null($runner)) {

                if ($current->data == $runner->data) {
                    $current->next = $runner->next;
                }

                $runner = $runner->next;
            }

            $current = $current->next;
        }

        return $head;

    }

}