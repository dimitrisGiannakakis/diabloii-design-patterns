<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Diablo;

use Diablo\Weapon;

class Necromancer extends HeroVisitor
{

    public function __construct($name)
    {
        parent::__construct($name);

        $this->setStrength(15);
        $this->setVitality(15);
        $this->setEnergy(25);
        $this->setMana(25);
        $this->setStamina(79);
        $this->setLIfe(45);
    }

    protected function level_up_attributes()
    {
        $this->life += 1.5;
        $this->stamina += 1;
        $this->mana += 2;
    }

}
