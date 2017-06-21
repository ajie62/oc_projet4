<?php

namespace BJ\ReservationBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * Class ContainsLettersAndAccents
 * @package BJ\ReservationBundle\Validator\Constraints
 */
class ContainsLettersAndAccents extends Constraint
{
    public $message =
        '"{{ string }}" contient un ou plusieurs caractères interdits : 
        ce champ ne peut pas contenir de chiffre.'
    ;
}
