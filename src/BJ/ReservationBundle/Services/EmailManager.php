<?php

namespace BJ\ReservationBundle\Services;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class EmailManager
{
    private $mailer;
    private $templating;

    public function __construct(\Swift_Mailer $mailer, EngineInterface $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }

    public function sendEmail($booking, $email, $bookingPrice)
    {
        $message = \Swift_Message::newInstance()
            ->setContentType("text/html")
            ->setSubject('Votre réservation pour visiter le musée du Louvre')
            ->setFrom('contact@jeromebutel.fr')
            ->setTo($email)
            ->setBody($this->templating->render('Emails/reservation.html.twig', array(
                'booking' => $booking,
                'bookingPrice' => $bookingPrice,
            ))
            )
        ;

        $this->mailer->send($message);
    }
}
