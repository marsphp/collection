<?php

namespace Mars\Collection;

use Mars\Collection\Collections\HandlingCollection;
use Mars\Collection\Collections\SearchCollection;
use Mars\Collection\Collections\TransformCollection;

class Kernel
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
        $this->items = $items;
    }
}