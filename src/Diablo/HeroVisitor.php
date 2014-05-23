<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Diablo;

class HeroVistitor extends Hero
{
    public function calculate()
    {
        $total_strength = 0;
        $total_vitality = 0;
        $total_energy = 0;
        $total_mana = 0;
        $total_stamina = 0;
        $total_life = 0;
        foreach($this->items as $item) {
            $total_strength += $item->getStrength();
            $total_vitality += $item->getVitality();
            $total_energy += $item->getEnergy();
            $total_mana += $item->getMana();
            $total_stamina += $item->getStamina();
            $total_life += $item->getLife();
        }


        $stats = array (
            'strength' => $this->setStrength($this->strength + $total_strength),
            'vitality' => $this->setVitality($this->vitality + $total_vitality),

        );

        return $stats;

    }
}
