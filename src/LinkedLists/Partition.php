<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 23.02.19
 * Time: 22:45
 */

namespace LinkedLists;

/**
 *
 *  * Question 2.4
 *
 * Write code to partition a linked list around a value x, such that all nodes less than x come
 * before all nodes greater than or equal to x. If x is contained within the list the values of x only need
 * to be after the elements less than x (see below). The partition element x can appear anywhere in the
 * "right partition"; it does not need to appear between the left and right partitions.
 * EXAMPLE
 * Input: 3->5->8->5->10->2->1 [partition= 5]
 * Output: 3->1->2->10->5->5->8
 *
 * Class Partition
 * @package LinkedLists
 */
class Partition
{

    public static function partition(MyLinkedListNode $head, int $p): MyLinkedListNode
    {
        $current = $head;
        $previous = null;

        while(!is_null($current)) {

            if ($current->data < $p && !is_null($previous)) {
                $previous->next = $current->next;
                $current->next = $head;
                $head = $current;

                $current = $previous->next;
            } else {
                $previous = $current;
                $current = $current->next;
            }
        }

        return $head;
    }

}