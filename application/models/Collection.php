<?php

class Collection extends CI_Model
{
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        // return array_sum(array_map(function ($item) use ($key) {
        //     return $item->$key;
        // }, $this->items));
        // return array_sum(array_map(fn ($item) => $item->$key, $this->items));
        return array_sum(array_column($this->items, $kay));
    }
}
