<?php

namespace tests\BJ\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReservationControllerTest extends WebTestCase
{
    private $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = static::createClient();
    }

    public function testIndexAction()
    {
        $crawler = $this->client->request('GET', '/');
        $this->client->followRedirects();

        $form = $crawler->selectButton('Continuer')->form();

        $form['bj_reservationbundle_reservation[bookingName]'] = "Test";
        $form['bj_reservationbundle_reservation[date]'] = "03/05/2018";
        $form['bj_reservationbundle_reservation[type]'] = "journée";
        $form['bj_reservationbundle_reservation[ticketsNumber]'] = 1;

        $crawler = $this->client->submit($form);

        $this->assertContains("Votre réservation", $this->client->getResponse()->getContent());
    }

    public function testInformationAction()
    {
        $this->testIndexAction();

        $crawler = $this->client->request('GET', '/information');
        $form = $crawler->selectButton('Continuer')->form();

        $form['bj_reservationbundle_reservation[clients][0][firstname]'] = 'Jean';
        $form['bj_reservationbundle_reservation[clients][0][lastname]'] = 'Dupont';
        $form['bj_reservationbundle_reservation[clients][0][birthdate][day]'] = 01;
        $form['bj_reservationbundle_reservation[clients][0][birthdate][month]'] = 1;
        $form['bj_reservationbundle_reservation[clients][0][birthdate][year]'] = 1991;
        $form['bj_reservationbundle_reservation[clients][0][country]'] = 'FR';
        $form['bj_reservationbundle_reservation[clients][0][discount]'] = 1;

        $crawler = $this->client->submit($form);

        $this->assertContains('Récapitulatif', $this->client->getResponse()->getContent());
    }
}
