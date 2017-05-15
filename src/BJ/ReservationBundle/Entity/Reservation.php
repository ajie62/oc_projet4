<?php

namespace BJ\ReservationBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

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
     */
    private $ticketsNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @var bool
     *
     * @ORM\Column(name="reduction", type="boolean")
     */
    private $reduction;

    /**
     * @ORM\OneToMany(targetEntity="Client", mappedBy="reservation", cascade={"persist", "remove"})
     */
    private $clients;

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
     * Set reduction
     *
     * @param boolean $reduction
     *
     * @return Reservation
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return boolean
     */
    public function getReduction()
    {
        return $this->reduction;
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
}
