<?php

namespace BJ\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationController extends Controller
{
    public function indexAction()
    {
        return $this->render('Reservation/index.html.twig');
    }
}
