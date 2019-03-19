<?php

namespace LinkedLists;

class MyLinkedListNode {

    public $data;

    public $next = null;

    /**
     * MyLinkedListNode constructor.
     * @param $data
     * @param $next
     */
    public function __construct($data, MyLinkedListNode $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }

    public function __toString()
    {
        $s = $this->data;
        $current = $this;

        while (!is_null($current->next)) {
            $s .= '->' . $current->next->data;
            $current = $current->next;
        }

        return (string) $s;
    }


}