<?php

namespace App\DataFixtures;

use App\Entity\Instrument;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InstrumentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $flute = new Instrument();
        $flute->setName('Flute');
        $flute->setIcon('');
        $manager->persist($flute);

        $guitar = new Instrument();
        $guitar->setName('Guitar');
        $guitar->setIcon('');
        $manager->persist($guitar);

        $fiddle = new Instrument();
        $fiddle->setName('Fiddle');
        $fiddle->setIcon('');
        $manager->persist($fiddle);

        $manager->flush();
    }
}
