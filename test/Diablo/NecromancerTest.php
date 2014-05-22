<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Diablo;

class NecromancerTest extends \PHPUnit_Framework_TestCase
{
    public function testHeroAttributes()
    {
        $necromancer = new Necromancer('MPAMPIS');
        $this->assertEquals($necromancer->getStrength(),15);
        $this->assertEquals($necromancer->getVitality(),15);
        $this->assertEquals($necromancer->getEnergy(),25);
        $this->assertEquals($necromancer->getMana(),25);
        $this->assertEquals($necromancer->getStamina(),79);
        $this->assertEquals($necromancer->getLIfe(),45);
    }

    public function testLevelUp()
    {

        $necromancer = new Necromancer('MPAMPIS');
        $necromancer->levelUp();
        $this->assertEquals($necromancer->getLevel(),2);
        $this->assertEquals($necromancer->getLife(),46.5);
        $this->assertEquals($necromancer->getStamina(),80);
        $this->assertEquals($necromancer->getMana(),27);



    }
}
