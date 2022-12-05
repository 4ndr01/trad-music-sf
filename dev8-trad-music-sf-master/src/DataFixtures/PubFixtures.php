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
        $pub->setImage('https://www.oldpintpot.com/wp-content/uploads/2019/03/old-pint-pot-1.jpg');
        $manager->persist($pub);
        $this->addReference('pub1', $pub);



        $pub2 = new Pub();
        $pub2->setName('The Old Pint Pot');
        $pub2->setAddress('123 Main Street');
        $pub2->setCity('London');
        $pub2->setZipCode('SW1A 1AA');
        $pub2->setImage('https://www.oldpintpot.com/wp-content/uploads/2019/03/old-pint-pot-1.jpg');
        $manager->persist($pub2);
        $this->addReference('pub2', $pub2);

        $pub3 = new Pub();
        $pub3->setName('The Old Pint Pot');
        $pub3->setAddress('123 Main Street');
        $pub3->setCity('London');
        $pub3->setZipCode('SW1A 1AA');
        $pub3->setImage('https://www.oldpintpot.com/wp-content/uploads/2019/03/old-pint-pot-1.jpg');
        $manager->persist($pub3);
        $this->addReference('pub3', $pub3);

        $manager->flush();

    }

}
{


}