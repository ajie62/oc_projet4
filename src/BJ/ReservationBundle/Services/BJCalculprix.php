<?php

namespace BJ\ReservationBundle\Calculprix;

class BJCalculprix
{
    /**
     * array[0] = Normal: 16€
     * array[1] = Enfant: 8€
     * array[2] = Senior: 12€
     * array[3] = Réduit: 10€
     */
    public function calculerPrix($array)
    {
        $prix = 0;
        $prix += $array[0]*16;
        $prix += $array[0]*8;
        $prix += $array[0]*12;
        $prix += $array[0]*10;
        return $prix;
    }
}