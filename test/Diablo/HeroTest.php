<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Diablo;

class HeroTest extends \PHPUnit_Framework_TestCase
{
    public function testHeroInstance()
    {
        $necromancer = new Necromancer('MPAMPIS');
        $this->assertInstanceOf('Diablo\Hero', $necromancer);
    }


}
