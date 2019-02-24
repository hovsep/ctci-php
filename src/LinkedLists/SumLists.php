<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 24.02.19
 * Time: 20:43
 */

namespace LinkedLists;

/**
 * Question 2.5
 *
 * You have two numbers represented by a linked list, where each node contains a single
 * digit. The digits are stored in reverse order, such that the 1 's digit is at the head of the list. Write a
 * function that adds the two numbers and returns the sum as a linked list.
 * EXAMPLE
 * Input: (7->1->6) + (5->9->2).That is 617 + 295.
 * Output: 2->1->9. That is 912.
 * FOLLOW UP
 * Suppose the digits are stored in forward order. Repeat the above problem.
 * Input: (6->1->7) + (2->9->5).That is 617 + 295.
 * Output: 9->1->2. That is, 912.
 */
class SumLists
{


    public static function sumListsReverse(MyLinkedListNode $n1, MyLinkedListNode $n2): MyLinkedListNode
    {
        $intNumber1 = 0;
        $intNumber2 = 0;
        $r1 = $n1;
        $r2 = $n2;
        $p10 = 0;//Power of 10
        $sum = 0;
        $resultHead = null;
        $resultTail = null;

        //Convert numbers to integers

        while(!is_null($r1) || !is_null($r2)) {

            if (!is_null($r1)) {
                $intNumber1 += pow(10, $p10) * $r1->data;
                $r1 = $r1->next;
            }

            if (!is_null($r2)) {
                $intNumber2 += pow(10, $p10) * $r2->data;
                $r2 = $r2->next;
            }

            $p10++;
        }

        $sum = strrev((string) ($intNumber1 + $intNumber2));

        for ($j = 0; $j < strlen($sum); $j++) {
            if (is_null($resultTail)) {
                $resultTail = new MyLinkedListNode($sum[$j], null);
                $resultHead = $resultTail;
            } else {
                $resultTail->next = new MyLinkedListNode($sum[$j], null);
                $resultTail = $resultTail->next;
            }
        }

        return $resultHead;
    }
}