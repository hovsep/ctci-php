<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 19.03.19
 * Time: 14:01
 */

namespace LinkedLists;

/**
 * Question 2.7
 *
 * Intersection: Given two (singly) linked lists, determine if the two lists intersect. Return the
 * intersecting node. Note that the intersection is defined based on reference, not value. That is, if the
 * kth node of the first linked list is the exact same node (by reference) as the jth node of the second
 * linked list, then they are intersecting
 *
 * Class Intersection
 * @package LinkedLists
 */
class Intersection
{

    public static function intersects(MyLinkedListNode $head1, MyLinkedListNode $head2): bool
    {
        $len1 = 0;
        $len2 = 0;
        $r1 = $head1;
        $r2 = $head2;
        $tail1 = null;
        $tail2 = null;

        while (!is_null($r1)) {
            $len1++;

            if (is_null($r1->next)) {
                $tail1 = $r1;
            }

            $r1 = $r1->next;
        }

        while (!is_null($r2)) {
            $len2++;

            if (is_null($r2->next)) {
                $tail2 = $r2;
            }

            $r2 = $r2->next;
        }

        if ($tail1 !== $tail2) {
            //No intersection
            return false;
        }

        $r1 = $head1;
        $r2 = $head2;

        while ($len1 != $len2) {
            if ($len1 > $len2) {
                $len1--;
                $r1 = $r1->next;
            }

            if ($len2 > $len1) {
                $len2--;
                $r2 = $r2->next;
            }
        }

        while (!is_null($r1) || !is_null($r2)) {

            if ($r1 === $r2) {
                return true;
            }

            $r1 = $r1->next;
            $r2 = $r2->next;
        }

    }

}