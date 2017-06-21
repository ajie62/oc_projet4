<?php

namespace tests\BJ\ReservationBundle\Entity;

use BJ\ReservationBundle\Entity\Reservation;

class ReservationTest extends \PHPUnit_Framework_TestCase
{
    private $reservation;

    public function __construct()
    {
        parent::__construct();
        $this->reservation = new Reservation();
    }

    public function testBookingName()
    {
        $this->reservation->setBookingName('Test');
        $this->assertNotEquals('Tests', $this->reservation->getBookingName());
        $this->assertEquals('Test', $this->reservation->getBookingName());
    }

    public function testDate()
    {
        $this->reservation->setDate(new \Datetime('07-11-2017'));
        $this->assertNotEquals(new \Datetime('07-11-2016'), $this->reservation->getDate());
        $this->assertEquals(new \Datetime('07-11-2017'), $this->reservation->getDate());
    }

    public function testType()
    {
        $this->reservation->setType('Journée');
        $this->assertNotEquals('Demi-journée', $this->reservation->getType());
        $this->assertEquals('Journée', $this->reservation->getType());
    }

    public function testTicketsNumber()
    {
        $this->reservation->setTicketsNumber(2);
        $this->assertNotEquals(1, $this->reservation->getTicketsNumber());
        $this->assertEquals(2, $this->reservation->getTicketsNumber());
    }
}
