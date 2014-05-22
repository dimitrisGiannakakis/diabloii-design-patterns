<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Diablo;

abstract class Hero
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}
