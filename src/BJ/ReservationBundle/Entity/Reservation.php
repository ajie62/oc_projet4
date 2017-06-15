<?php

namespace BJ\ReservationBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use BJ\ReservationBundle\Validator\Constraints as MyAssert;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="BJ\ReservationBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bookingName", type="string", length=255, nullable=false)
     */
    private $bookingName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="ticketsNumber", type="integer")
     * @MyAssert\MoreThanThousandTickets()
     */
    private $ticketsNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @ORM\OneToMany(targetEntity="Client", mappedBy="reservation", cascade={"persist", "remove"})
     */
    private $clients;

    /**
     * @var string
     *
     * @ORM\Column(name="reservationNumber", type="string", length=255, nullable=true)
     */
    private $reservationNumber;

    public function __construct()
    {
        $this->dateReservation = new \Datetime();
        $this->clients = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Reservation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set ticketsNumber
     *
     * @param integer $ticketsNumber
     *
     * @return Reservation
     */
    public function setTicketsNumber($ticketsNumber)
    {
        $this->ticketsNumber = $ticketsNumber;

        return $this;
    }

    /**
     * Get ticketsNumber
     *
     * @return int
     */
    public function getTicketsNumber()
    {
        return $this->ticketsNumber;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Add client
     *
     * @param \BJ\ReservationBundle\Entity\Client $client
     *
     * @return Reservation
     */
    public function addClient(\BJ\ReservationBundle\Entity\Client $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \BJ\ReservationBundle\Entity\Client $client
     */
    public function removeClient(\BJ\ReservationBundle\Entity\Client $client)
    {
        $this->clients->removeElement($client);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Set bookingName
     *
     * @param string $bookingName
     *
     * @return Reservation
     */
    public function setBookingName($bookingName)
    {
        $this->bookingName = $bookingName;

        return $this;
    }

    /**
     * Get bookingName
     *
     * @return string
     */
    public function getBookingName()
    {
        return $this->bookingName;
    }

    /**
     * Set reservationNumber
     *
     * @param string $reservationNumber
     *
     * @return Reservation
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->reservationNumber = $reservationNumber;

        return $this;
    }

    /**
     * Get reservationNumber
     *
     * @return string
     */
    public function getReservationNumber()
    {
        return $this->reservationNumber;
    }
}
