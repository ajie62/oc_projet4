<?php

namespace BJ\ReservationBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class MoreThanThousandTickets
 * @Annotation
 * @package BJ\ReservationBundle\Validator\Constraints
 */
class MoreThanThousandTickets extends Constraint
{
    public $message = 'Le nombre de billets vendus a atteint son maximum (1000).';
}
