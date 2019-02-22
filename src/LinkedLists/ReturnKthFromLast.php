<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 22.02.19
 * Time: 21:48
 */

namespace LinkedLists;


class ReturnKthFromLast
{


    public static function kthToLast(MyLinkedListNode $head, int $k): ?MyLinkedListNode
    {
        $size = 0;
        $current = $head;

        while (!is_null($current)) {
            $size++;
            $current = $current->next;
        }

        if ($k >= $size) {
            return null;
        }

        $current = $head;

        $i = 1;

        while ($i != ($size - $k)) {
            $current = $current->next;
            $i++;
        }

        return $current;
    }
}