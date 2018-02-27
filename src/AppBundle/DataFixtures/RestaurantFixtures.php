<?php
/**
 * Created by PhpStorm.
 * User: wabap2-3
 * Date: 12/01/18
 * Time: 12:28
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\restaurant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RestaurantFixtures extends Fixture
{

    private function randRegion()
    {

        $input = ["Paris", "91", "92", "93", "94", "95", "78"];
        $rand_keys = array_rand($input, 1);
        $result = $input[$rand_keys];

        return $result;
    }

    private function randMainFood()
    {

        $input = ["Français", "Italien", "Burger chic", "Burger US", "Indien"];
        $rand_keys = array_rand($input, 1);
        $result = $input[$rand_keys];


        return $result;
    }

    private function randPhoneNumber()
    {

        $rand = sprintf('%05u',rand(0,99999999));
        $result = '01'.$rand;


        return $result;
    }



    public function load(ObjectManager $manager)
    {

        // create 20 products! Bam!
        for ($i = 0; $i < 200; $i++) {

            $entity = new restaurant();


            $faker = \Faker\Factory::create();


            $entity->setName("restaurant$i");
            $entity->setRegion($this->randRegion());
            $entity->setCity("city$i");
            $entity->setAveragePrice($faker->numberBetween(7,50));
            $entity->setMainFood($this->randMainFood());
            $entity->setMetroWay("metro$i");
            $entity->setPhoneNumber($this->randPhoneNumber());

            // stocke les restaurants en mémoire
            $this->addReference("restaurant$i", $entity);

            $manager->persist($entity);
        }

        $manager->flush();
    }

}