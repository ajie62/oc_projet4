<?php

namespace BJ\ReservationBundle\Validator\Constraints;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class MoreThanThousandTicketsValidator extends ConstraintValidator
{
    protected $entityManager;
    protected $request;

    public function __construct(EntityManager $em, RequestStack $request)
    {
        $this->entityManager = $em;
        $this->request = $request;
    }

    public function validate($value, Constraint $constraint)
    {
        // Fetching the request
        $request = $this->request->getCurrentRequest();

        // Fetching the selected date in jQuery UI datepicker
        $selectedDate = $request->request->get('bj_reservationbundle_reservation')['date'];

        // Number of tickets required by the user
        $nbOfTickets = $request->request->get('bj_reservationbundle_reservation')['ticketsNumber'];

        // Entity Manager
        $em = $this->entityManager;

        // Fetching every 'Reservation' object which date is equal to the selected date
        $totalTickets = $em->getRepository('BJReservationBundle:Reservation')->findTotalTickets(\DateTime::createFromFormat('d/m/Y', $selectedDate));

        // Remaining tickets
        $remainingTickets = 1000 - $totalTickets;

        /*
         * If the number of tickets required by the user is more than
         * the number of remaining tickets, then the booking isn't allowed.
         */
        if($nbOfTickets > $remainingTickets) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}
