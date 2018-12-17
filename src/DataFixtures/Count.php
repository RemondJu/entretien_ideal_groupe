<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Counter;

class Count extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $count = new Counter();
        $count-> setCount(0);
        $manager->persist($count);
        $manager->flush();
    }
}
