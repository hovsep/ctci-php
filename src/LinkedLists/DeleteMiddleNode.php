<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 22.02.19
 * Time: 22:56
 */

namespace LinkedLists;

/**
 * Question 2.3
 * Implement an algorithm to delete a node in the middle (i.e., any node but
 * the first and last node, not necessarily the exact middle) of a singly linked list, given only access to
 * that node.EXAMPLE
 * input:the node c from the linked list a->b->c->d->e->f
 * Result: nothing is returned, but the new linked list looks like a->b->d->e->f
 *
 * Class DeleteMiddleNode
 * @package LinkedLists
 */
class DeleteMiddleNode
{

    public static function deleteMiddleNode(MyLinkedListNode $nodeToDelete): void
    {
        $current = $nodeToDelete;

        while(!is_null($current->next)) {

            $current->data = $current->next->data;

            if (is_null($current->next->next)) {
                $current->next = null;
                break;
            }

            $current = $current->next;
        }
    }

    public static function deleteMiddleNode2(MyLinkedListNode $nodeToDelete): void
    {
        if (!is_null($nodeToDelete->next)) {
            $next = $nodeToDelete->next;
            $nodeToDelete->data = $next->data;
            $nodeToDelete->next = $next->next;
        }
    }
}