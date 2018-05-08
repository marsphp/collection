<?php

namespace Mars\Collection\Collections;

trait HandlingCollection
{
    /**
     * All items
     * return @all items
     */
    public function all()
    {
        return $this->items;
    }

    /**
     * Items count
     * return @count
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * Check if items is empty or not
     * return @boolean
     */
    public function isEmpty()
    {
        return empty($this->items);
    }
}