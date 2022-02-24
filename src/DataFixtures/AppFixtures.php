<?php

namespace App\DataFixtures;

use App\Entity\Students;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $generator = Factory::create("fr_FR");
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i <= 100; $i++) {
            $student = new Students();
            $student->setName($generator->name)
                    ->setUsername($generator->userName)
                    ->setAdress($generator->address)
                    ->setPhone($generator->phoneNumber)
                    ->setSex("M")
                    ->setDateBirth($generator->dateTime)
                    ->setFatherName($generator->name)
                    ->setProfessionFather($generator->company)
                    ->setMotherName($generator->name)
                    ->setProfessionMother($generator->company)
                    ->setTutorName($generator->name)
                    ->setProfessionTutor($generator->userAgent)
                    ->setAdressTutor($generator->address)
                    ->setContactMother($generator->phoneNumber)
                    ->setContactFather($generator->phoneNumber)
                    ->setContactTutor($generator->phoneNumber)
                    ->setAdressParents($generator->address);
            $manager->persist($student);

        }

        $manager->flush();
    }
}
