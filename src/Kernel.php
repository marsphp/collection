<?php

namespace Mars\Collection;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use Mars\Collection\Collections\HandlingCollection;
use Mars\Collection\Collections\SearchCollection;
use Mars\Collection\Collections\TransformCollection;

class Kernel implements Countable, IteratorAggregate
{
    use HandlingCollection, TransformCollection, SearchCollection;

    /**
     * @var array
     */
    private $items;

    /**
     * Collections constructor.
     * @param array $items
     */
    public function __construct($items = [])
    {
        $this->items = is_array($items) ? $items : $this->getArraybleItems($items);
    }

    /**
     * Implement iterator interface
     * @return ArrayIterator|\Traversable
     */
    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    /**
     * @param $items
     * @return mixed
     */
    protected function getArraybleItems($items)
    {
        if ($items instanceof Kernel) {
            return $this->all();
        }

        return $items;
    }
}