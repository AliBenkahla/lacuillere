<?php
/**
 * Created by PhpStorm.
 * User: wabap2-3
 * Date: 12/01/18
 * Time: 12:28
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class CommentFixtures extends Fixture implements DependentFixtureInterface
{


    public function load(ObjectManager $manager)
    {

        // create 20 products! Bam!
        for ($i = 0; $i < 500; $i++) {

            $entity = new comment();


            $faker = \Faker\Factory::create();


            $comment = $faker->realText();

            $entity->setComment($comment);
            $entity->setRate($faker->numberBetween(0,5));
            $entity->setDate($faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null));

            // associer le commentaire à un restaurant
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