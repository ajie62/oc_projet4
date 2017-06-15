<?php

namespace tests\ReservationBundle\Services;

use BJ\ReservationBundle\Services\PriceManager;
use BJ\ReservationBundle\Entity\Reservation;
use BJ\ReservationBundle\Entity\Client;

class PriceManagerTest extends \PHPUnit_Framework_TestCase
{
    private $client;
    private $booking;
    private $priceManager;
    private $format = 'd/m/Y';

    public function __construct()
    {
        parent::__construct();
        $this->client = new Client();
        $this->booking = new Reservation();
        $this->priceManager = new PriceManager();
    }

    private function getPreviousYears($years)
    {
        $time = new \DateTime('now');
        $newTime = $time->modify($years)->format('d/m/Y');
        return $newTime;
    }

    /**
     * Asserts that a toddler under 4 pays nothing
     */
    public function testCalculateReturnsGoodPriceForToddler()
    {
        $this->client->setBirthdate(\DateTime::createFromFormat($this->format, $this->getPreviousYears("-2 years")))->setDiscount(false);
        $this->booking->addClient($this->client)->setType('journée');
        $result = $this->priceManager->calculate($this->booking);
        $this->assertEquals(0, $result);
    }

    /**
     * Asserts that a child between 4 and 12 pays 8 euros
     */
    public function testCalculateReturnsGoodPriceForChild()
    {
        $this->client->setBirthdate(\DateTime::createFromFormat($this->format, $this->getPreviousYears("-5 years")))->setDiscount(false);
        $this->booking->addClient($this->client)->setType('journée');
        $result = $this->priceManager->calculate($this->booking);
        $this->assertEquals(8, $result);
    }

    /**
     * Asserts that a person between 12 and 60 pays 16 euros
     */
    public function testCalculateReturnsGoodPriceForRegularClient()
    {
        $this->client->setBirthdate(\DateTime::createFromFormat($this->format, $this->getPreviousYears("-13 years")))->setDiscount(false);
        $this->booking->addClient($this->client)->setType('journée');
        $result = $this->priceManager->calculate($this->booking);
        $this->assertEquals(16, $result);
    }

    /**
     * Asserts that a person older than 60 pays 12 euros
     */
    public function testCalculateReturnsGoodPriceForOldClient()
    {
        $this->client->setBirthdate(\DateTime::createFromFormat($this->format, $this->getPreviousYears("-61 years")))->setDiscount(false);
        $this->booking->addClient($this->client)->setType('journée');
        $result = $this->priceManager->calculate($this->booking);
        $this->assertEquals(12, $result);
    }

    /**
     * Asserts that a person with a discount pays 10 euros
     */
    public function testCalculateReturnsGoodPriceForClientWithDiscount()
    {
        $this->client->setBirthdate(\DateTime::createFromFormat($this->format, $this->getPreviousYears("-26 years")))->setDiscount(true);
        $this->booking->addClient($this->client)->setType('journée');
        $result = $this->priceManager->calculate($this->booking);
        $this->assertEquals(10, $result);
    }

    /**
     * Asserts that the booking price is divided by 2 when type is "demi-journée"
     */
    public function testCalculateReturnsGoodPriceForDemiJournee()
    {
        $this->client->setBirthdate(\DateTime::createFromFormat($this->format, $this->getPreviousYears("-13 years")))->setDiscount(false);
        $this->booking->addClient($this->client)->setType('demi-journée');
        $result = $this->priceManager->calculate($this->booking);
        $this->assertEquals(8, $result);
    }
}
