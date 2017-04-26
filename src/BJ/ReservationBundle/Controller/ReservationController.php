<?php

namespace BJ\ReservationBundle\Controller;

use BJ\ReservationBundle\Entity\Client;
use BJ\ReservationBundle\Form\ClientType;
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
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $request->getSession()->set('reservation', $reservation);

            $request->getSession()->getFlashBag()->add('notice', "Passons maintenant aux informations vous concernant.");

            return $this->redirectToRoute('information');
        }

        return $this->render('Reservation/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/information", name="information")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function informationAction(Request $request)
    {
        if(null == $request->getSession()->get('reservation')) {
            return $this->redirectToRoute('homepage');
        }
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $request->getSession()->set('client', $client);

            $request->getSession()->getFlashBag()->add('notice', "D'accord. Pour terminer, entrez vos informations de paiement.");

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
