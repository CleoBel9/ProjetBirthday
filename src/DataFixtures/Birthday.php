<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\BirthdayFactory;
use App\Factory\UserFactory;

class Birthday extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        BirthdayFactory::createMany(5);
        //$manager->flush();
        UserFactory::createMany(10, ['password' => '2y$13$YRgc6wH1CBuIqUbgYA9OveLGDO8CtU6WkKyQErR3J/a4TBi.H8pmW']); //générer 10mp avec le mp en hasher
    }
    
}