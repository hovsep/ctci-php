<?php
/**
 * Created by PhpStorm.
 * User: hovsep
 * Date: 20.03.19
 * Time: 19:03
 */

declare(strict_types=1);

namespace StackAndQueue;


class StackOfPlates
{

    private $capacity;

    private $stacks = [];

    /**
     * StackOfPlates constructor.
     */
    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function push(int $item): void
    {
        /* @var $last \SplStack*/
        $last = end($this->stacks);

        if (empty($last) || (count($last) == $this->capacity)) {
            $newStack = new \SplStack();
            $newStack->push($item);
            $this->stacks[] = $newStack;
        } else {
            $last->push($item);
        }
    }

    public function pop(): int
    {
        $last = end($this->stacks);

        if ($last instanceof \SplStack) {

            $item = $last->pop();

            if ($last->isEmpty()) {
                array_pop($this->stacks);
            }

            return $item;
        }

    }

    public function popAt(int $stackIndex)
    {
        if (array_key_exists($stackIndex, $this->stacks)) {
            return $this->stacks[$stackIndex]->pop();
        }
    }
}
