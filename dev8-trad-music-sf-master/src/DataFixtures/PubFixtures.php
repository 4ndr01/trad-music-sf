<?php

namespace App\DataFixtures;

use App\Entity\Pub;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PubFixtures extends Fixture
{
    public function load(ObjectManager|\Doctrine\Persistence\ObjectManager $manager): void
    {
        $pub = new Pub();
        $pub->setName('The Old Pint Pot');
        $pub->setAddress('123 Main Street');
        $pub->setCity('London');
        $pub->setPostcode('SW1A 1AA');
        $pub->setCountry('United Kingdom');
        $pub->setLatitude(51.507351);
        $pub->setLongitude(-0.127758);
        $manager->persist($pub);
        $this->addReference('pub1', $pub);

        $manager->flush();


        $pub2 = new Pub();
        $pub2->setName('The Old Pint Pot');
        $pub2->setAddress('123 Main Street');
        $pub2->setCity('London');
        $pub2->setPostcode('SW1A 1AA');
        $pub2->setCountry('United Kingdom');
        $pub2->setLatitude(51.507351);
        $pub2->setLongitude(-0.127758);
        $manager->persist($pub2);
        $this->addReference('pub2', $pub2);

        $pub3 = new Pub();
        $pub3->setName('The Old Pint Pot');
        $pub3->setAddress('123 Main Street');
        $pub3->setCity('London');
        $pub3->setPostcode('SW1A 1AA');
        $pub3->setCountry('United Kingdom');
        $manager->persist($pub3);
        $this->addReference('pub3', $pub3);
    }

}
{


}