<?php

namespace BJ\ReservationBundle\Services;

use BJ\ReservationBundle\Entity\Reservation;

class PriceManager
{
    private function getPrice($age, $discount) {
        if($age < 4) {
            return 0;
        }
        if($discount) {
            return 10;
        }
        if($age <= 12) {
            return 8;
        }
        if($age <= 60) {
            return 16;
        }

        return 12;
    }

    public function calculate(Reservation $booking)
    {
        $discount = null;
        $total = null;

        // Current date.
        $today = new \Datetime();
        $today->format('d-m-Y');

        // Client
        $clients = $booking->getClients();
        foreach($clients as $client) {
            // Date de naissance du client
            $bd = $client->getBirthdate(); // Datetime object
            $discount = $client->getDiscount(); // Boolean
            // Interval between the client's birthdate and current date.
            $interval = $bd->diff($today);
            // Client's age = year in this interval.
            $clientsAge = $interval->y;

            $total += $this->getPrice($clientsAge, $discount);
        }

        return $total;
    }
}
