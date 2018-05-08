<?php

namespace Mars\Collection\Collections;

trait TransformCollection
{
    /**
     * @param callable|null $callback
     * @return TransformCollection
     */
    public function filter(callable $callback = null)
    {
        if ($callback) {
            return new static(array_filter($this->items, $callback));
        }

        return new static(array_filter($this->items));
    }

    /**
     * get collection keys
     * @return static
     */
    public function keys()
    {
        return new static(array_keys($this->items));
    }

    /**
     * Map items
     * @param callable $callback
     * @return static
     */
    public function map(callable $callback)
    {
        $keys = $this->keys()->all();
        $items = array_map($callback, $this->items, $keys);

        return new static(array_combine($keys, $items));
    }

    /**
     * Transform collection to json
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->items);
    }

    /**
     * Magic method convert to string
     * @return string
     */
    public function __toString()
    {
        return $this->toJson();
    }

    /**
     * Merge method
     * @param array $items
     * @return static
     */
    public function merge($items)
    {
        return new static(array_merge($this->items, $this->getArraybleItems($items)));
    }
}