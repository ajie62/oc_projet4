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
     * @param Request $request
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
     * @Route("/information", name="information")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function informationAction(Request $request)
    {
        $booking = $this->get('session')->get('booking');

        $form = $this->createForm(InfoStepType::class, $booking);
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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function paymentAction()
    {
        $booking = $this->get('session')->get('booking');
        $price = $this->get('bj_reservation_pricemanager')->calculate($booking);
        $this->get('session')->set('price', $price);

        return $this->render('Reservation/payment.html.twig', array(
            'booking' => $booking,
            'price' => $price,
        ));
    }

    /**
     * @Route("/checkout", name="checkout", methods="POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function checkoutAction(Request $request)
    {
        $session = $request->getSession();
        $price = $this->get('session')->get('price');

        \Stripe\Stripe::setApiKey("sk_test_qI870E4LjW8jwvJHEpJ3z2Om");
        // Get the credit card details submitted by the form
        $token = $_POST['stripeToken'];
        // Create a charge: this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => $price."00",
                "currency" => "eur",
                "source" => $token,
                "description" => "Paiement Stripe - Musée du Louvre"
            ));
            $em = $this->getDoctrine()->getManager();
            $em->persist($session->get('booking'));
            $em->flush();
            $session->invalidate(); // Clears all session data and regenerates session ID.

            $name = 'Jérôme';
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('send@example.com')
                ->setTo('buteljerome@yahoo.fr')
                ->setBody(
                    $this->renderView(
                        'Reservation/email.txt.twig',
                        array('name' => $name)
                    )
                )
            ;

            $this->get('mailer')->send($message);

            return $this->redirectToRoute("success");
        } catch(\Stripe\Error\Card $e) {
            $session->getFlashBag()->add("error", "Le paiement a échoué. Veuillez recommencer.");
            return $this->redirectToRoute("payment");
            // The card has been declined
        }
    }

    /**
     * @Route("/success", name="success")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function successAction()
    {
        return $this->render('Reservation/success.html.twig');
    }
}
