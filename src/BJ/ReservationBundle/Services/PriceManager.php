<?php

namespace BJ\ReservationBundle\Services;

use BJ\ReservationBundle\Entity\Reservation;

class PriceManager
{
    private function getPrice($age, $discount) {
        if($age >= 0 && $age <= 4) {
            return 0;
        }
        if($discount) {
            return 10;
        }
        if($age > 4 && $age < 12) {
            return 8;
        }
        if($age >= 12 && $age <= 60) {
            return 16;
        }

        return 12;
    }

    public function calculate(Reservation $booking)
    {
        $total = null;

        // Current date.
        $today = new \Datetime();
        $today->format('d-m-Y');

        // Array containing the different clients
        $clients = $booking->getClients();

        foreach($clients as $client) {
            // Useful variables
            $birthdate = $client->getBirthdate(); // Datetime object
            $discount = $client->getDiscount(); // Boolean

            // Interval between the client's birthdate and current date.
            $interval = $birthdate->diff($today);

            // Client's age = year in this interval.
            $clientsAge = $interval->y;

            $price = $this->getPrice($clientsAge, $discount);

            if($booking->getType() == "demi-journée") {
                $price = $price / 2;
            }
            $client->setPrice($price);
            $total += $price;
        }

        return $total;
    }
}
