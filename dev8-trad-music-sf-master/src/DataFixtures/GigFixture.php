<?php

namespace App\DataFixtures;

use App\Entity\Gig;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class GigFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $today = new \DateTimeImmutable();
        $gig1 = new Gig();
        $gig1->setDateStart($today->modify('+2 day'));
        $gig1->setDateEnd($today->modify('+2 day'));
        $gig1->setPub($this->getReference('pub1'));


        $gig2 = new Gig();
        $gig2->setDateStart($today->modify('+3 day'));
        $gig2->setDateEnd($today->modify('+3 day'));
        $gig2->setPub($this->getReference('pub2'));

        $gig3 = new Gig();
        $gig3->setDateStart($today->modify('-1 month'));
        $gig3->setDateEnd($today->modify('-1 month'));
        $gig3->setPub($this->getReference('pub3'));




        $manager->flush();
    }

    public function getDependencies()
    {
        // TODO: Implement getDependencies() method.
        return [
            PubFixtures::class,
        ];
    }
}
