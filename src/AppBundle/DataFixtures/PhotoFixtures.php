<?php
/**
 * Created by PhpStorm.
 * User: wabap2-3
 * Date: 12/01/18
 * Time: 12:28
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\photo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;



class PhotoFixtures extends Fixture implements DependentFixtureInterface
{


    public function load(ObjectManager $manager)
    {

        // create 20 products! Bam!
        for ($i = 0; $i < 2000; $i++) {

            $entity = new photo();


            $faker = \Faker\Factory::create();


            $entity->setPhoto(
                $faker->image('web/img/restaurant', 400, 400, 'abstract', false)
            );

            // associer la photo à un restaurant
            $randomCategory = $faker->numberBetween(0,199);


            $entity->setRestaurant(
                $this->getReference("restaurant" . $randomCategory)

            );

            $manager->persist($entity);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            RestaurantFixtures::class,
        ];
    }

}