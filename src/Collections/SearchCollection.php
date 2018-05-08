<?php

namespace Mars\Collection\Collections;

trait SearchCollection
{
    /**
     * return all items
     */
    public function first()
    {
        return $this->items;
    }

    /**
     * Items count
     * return @count
     */
    public function last()
    {
        return count($this->items);
    }

    /**
     * Check if items is empty or not
     * return @boolean
     */
    public function find()
    {
        return empty($this->items);
    }
}