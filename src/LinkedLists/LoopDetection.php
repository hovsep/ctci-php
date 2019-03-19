<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 20.03.19
 * Time: 0:22
 */

namespace LinkedLists;

/**
 *
 * Question 2.8
 *
 * Loop Detection: Given a circular linked list, implement an algorithm that returns the node at the
 * beginning of the loop
 *
 * Class LoopDetection
 * @package LinkedLists
 */
class LoopDetection
{

    public static function detect(MyLinkedListNode $head): ?MyLinkedListNode
    {
        $fast = $head;
        $slow = $head;

        while (!is_null($fast) && !is_null($fast->next)) {
            $slow = $slow->next;
            $fast = $fast->next->next;

            if ($slow === $fast) {
                break;//Collision point
            }
        }

        if (is_null($fast) || is_null($fast->next)) {
            //No loop
            return null;
        }

        $slow = $head;

        while ($slow !== $fast) {
            $slow = $slow->next;
            $fast = $fast->next;
        }

        return $fast;
    }
}