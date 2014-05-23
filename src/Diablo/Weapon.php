<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Diablo;

class Weapon extends Item
{
    protected $weapon;

    public function getStrength()
    {
        return 10;
    }

    public function getStamina()
    {
        return 40;
    }

    public function getLIfe()
    {
        return 3;
    }

    public function getMana()
    {
        return 67;
    }

    public function __construct()
    {
        $this->weapon='Weapon';
    }

    /**
     * Gets weapon.
     *
     * @access public
     * @return mixed
     */
    public function getWeapon()
    {
        return $this->weapon;
    }
}
