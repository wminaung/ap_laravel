<?php

namespace App;

class Test
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function execute()
    {
        return $this->name;
    }
}
