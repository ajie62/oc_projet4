<?php

namespace BJ\ReservationBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BJ\ReservationBundle\Entity\Type;

class LoadTypeData implements FixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $firstType = new Type();
        $firstType->setName('Journée');
        $secondType = new Type();
        $secondType->setName('Demi-journée');

        $manager->persist($firstType);
        $manager->persist($secondType);

        $manager->flush();
    }
}