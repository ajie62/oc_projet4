<?php

namespace BJ\ReservationBundle\Services;

class CodeReservationManager
{
    public function generateCode($booking)
    {
        $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $shuffledLetters = str_shuffle($letters);

        $code = substr($shuffledLetters, 0, 4) .
        $booking->getId() .
        $booking->getDate()->format('dmY') .
        substr($booking->getBookingName(), 0, 3) .
        $booking->getTicketsNumber() .
        $booking->getDateReservation()->format('dmy');

        return $code;
    }
}
