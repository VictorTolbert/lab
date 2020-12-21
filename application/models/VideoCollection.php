<?php

class VideoCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}
