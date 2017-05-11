<?php

namespace BJ\ReservationBundle\Controller;

use BJ\ReservationBundle\Entity\Client;
use BJ\ReservationBundle\Form\InfoStepType;
use Symfony\Component\HttpFoundation\Request;
use BJ\ReservationBundle\Entity\Reservation;
use BJ\ReservationBundle\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReservationController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $booking = new Reservation();

        $form = $this->createForm(ReservationType::class, $booking);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            for($i = 0; $i<$booking->getTicketsNumber(); $i++) {
                $client = new Client();
                $booking->addClient($client);
            }
            $this->get('session')->set('booking', $booking);
            return $this->redirectToRoute('information');
        }

        return $this->render('Reservation/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/information", name="information")
     */
    public function informationAction(Request $request)
    {
        $booking = $this->get('session')->get('booking');

        $form = $this->createForm(InfoStepType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->get('session')->set('booking', $booking);
            return $this->redirectToRoute('payment');
        }

        return $this->render('Reservation/information.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/payment", name="payment")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function paymentAction()
    {
        return $this->render('Reservation/payment.html.twig');
    }
}
