<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Diablo;

abstract class Hero
{
    protected $name;

    protected $strength;

    protected $vitality;

    protected $energy;

    protected $life;

    protected $stamina;

    protected $mana;

    public function __construct($name)
    {
        $this->name = $name;

    }



    /**
     * Gets name.
     *
     * @access public
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param mixed $name the value to set.
     * @access public
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Gets strength.
     *
     * @access public
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Sets strength.
     *
     * @param mixed $strength the value to set.
     * @access public
     * @return void
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    /**
     * Gets vitality.
     *
     * @access public
     * @return mixed
     */
    public function getVitality()
    {
        return $this->vitality;
    }

    /**
     * Sets vitality.
     *
     * @param mixed $vitality the value to set.
     * @access public
     * @return void
     */
    public function setVitality($vitality)
    {
        $this->vitality = $vitality;
    }

    /**
     * Gets life.
     *
     * @access public
     * @return mixed
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Sets life.
     *
     * @param mixed $life the value to set.
     * @access public
     * @return void
     */
    public function setLife($life)
    {
        $this->life = $life;
    }

    /**
     * Gets stamina.
     *
     * @access public
     * @return mixed
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * Sets stamina.
     *
     * @param mixed $stamina the value to set.
     * @access public
     * @return void
     */
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;
    }

    /**
     * Gets mana.
     *
     * @access public
     * @return mixed
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Sets mana.
     *
     * @param mixed $mana the value to set.
     * @access public
     * @return void
     */
    public function setMana($mana)
    {
        $this->mana = $mana;
    }

    /**
     * Gets energy.
     *
     * @access public
     * @return mixed
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Sets energy.
     *
     * @param mixed $energy the value to set.
     * @access public
     * @return void
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }
}
