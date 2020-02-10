<?php

namespace App\DataFixtures;

use App\Entity\CardTemplate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i =0; $i<50 ; $i++){
            $cardTemplate = new CardTemplate;
            $cardTemplate->setName($faker->sentence(3))
                ->setDescription($faker->text(1000))
                ->setActive($faker->boolean(60))
                ->setPrenium($faker->boolean(40))
                ->setPreview('https://source.unsplash.com/random/250x250');
                $manager->persist($cardTemplate);
        }
        $manager->flush();
    }
}
