<?php

namespace Mars\Collection\Collections;

trait SearchCollection
{
    /**
     * return all items
     * @param null $default
     * @return array
     */
    public function first($default = null)
    {
        return isset($this->items[0]) ? $this->items[0] : $default;
    }

    /**
     * Items count
     * @param null $default
     * @return int
     */
    public function last($default = null)
    {
        $reverse = array_reverse($this->items);
        return isset($reverse[0]) ? $reverse[0] : $default;
    }

    /**
     * Check if items is empty or not
     * @param null $default
     * @return bool
     */
    public function find($default = null)
    {
        return empty($this->items);
    }
}