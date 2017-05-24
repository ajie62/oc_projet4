<?php

namespace BJ\ReservationBundle\Validator\Constraints;

use BJ\ReservationBundle\Entity\Reservation;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class MoreThanThousandTicketsValidator extends ConstraintValidator
{
    protected $entityManager;
    protected $requestStack;

    public function __construct(EntityManager $em, RequestStack $requestStack)
    {
        $this->entityManager = $em;
        $this->requestStack = $requestStack;
    }

    public function validate($value, Constraint $constraint)
    {
        $request = $this->requestStack->getCurrentRequest();

        $td = new \Datetime();
        $today = $td->format('d/m/Y');

        $ticket = $this->entityManager->getRepository(Reservation::class)->findBy('date');

        // SI à la date du ticket demandé ticketsNumber >= 1000
        if($ticket) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}
