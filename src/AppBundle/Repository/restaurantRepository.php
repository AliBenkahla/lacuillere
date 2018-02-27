<?php

namespace AppBundle\Repository;

/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 30/01/2018
 * Time: 23:20
 */
class restaurantRepository extends \Doctrine\ORM\EntityRepository
{

    public function getSearchResults(\Doctrine\Common\Persistence\ManagerRegistry $doctrine)
    {

        // $results = $this->createQueryBuilder('product')
        //   ->join('product.')

    }

    public function getNameBySearchResults($search)
    {
        $results = $this->createQueryBuilder('restaurant')
            ->select('restaurant.name')/*car on veut un champ et pas toute l'entité*/
            ->where('restaurant.name LIKE :search')
            ->setParameters([
                'search' => "%$search%"
            ])
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;

        return $results;
    }

    public function getRestaurantsBySearchBar($search)
    {
        $results = $this->createQueryBuilder('restaurant')
            ->leftJoin('restaurant.comments','comments')
            ->leftJoin('restaurant.photos', 'photos')
            ->where('restaurant.name LIKE :search')
            ->setParameters([
                'search' => "%$search%"
            ])
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();


        return $results;
    }

    public function getRestaurantsBySearchList($search)
    {
        $results = $this->createQueryBuilder('restaurant')
            ->select('restaurant.name, restaurant.region, AVG(comment.rate) AS avgRate, restaurant.averagePrice, 
            restaurant.mainFood, restaurant.slug, photos.photo')
            ->join('restaurant.comments','comment')
            ->join('restaurant.photos','photos')
            ->where('restaurant.region LIKE :search')
            ->groupBy('restaurant')

            ->setParameters([
                'search' => "%$search%"
            ])

            ->orderBy('avgRate', 'DESC')


            ->getQuery()
            ->getResult();
        ;

        return $results;
    }

    public function getRestaurantsBySearchListAscPrice($search)
    {
        $results = $this->createQueryBuilder('restaurant')
            ->select('restaurant.name, restaurant.region, AVG(comment.rate) AS avgRate, restaurant.averagePrice, 
            restaurant.mainFood, restaurant.slug')
            ->join('restaurant.comments','comment')
            ->where('restaurant.region LIKE :search')
            ->groupBy('restaurant')

            ->setParameters([
                'search' => "%$search%"
            ])

            ->orderBy('restaurant.averagePrice','ASC')


            ->getQuery()
            ->getResult();
        ;

        return $results;
    }


    public function getRestaurantsByFilterNote($it, $fr, $ind, $chic, $brgus, $region)
    {
        $results = $this->createQueryBuilder('restaurant')
            ->select('restaurant.name, restaurant.region, AVG(comment.rate) AS avgRate, restaurant.averagePrice, 
            restaurant.mainFood, restaurant.slug, photos.photo')

            ->join('restaurant.comments','comment')
            ->join('restaurant.photos','photos')

            ->where('restaurant.mainFood LIKE :it OR restaurant.mainFood LIKE :fr OR restaurant.mainFood 
            LIKE :ind OR restaurant.mainFood LIKE :chic OR restaurant.mainFood LIKE :brgUS')

            ->andWhere('restaurant.region LIKE :region')

            ->groupBy('restaurant')

            ->setParameters([
                'region' => $region,
                'it' => $it,
                'fr' => $fr,
                'ind' => $ind,
                'chic' => $chic,
                'brgUS' => $brgus

            ])


            ->orderBy('avgRate','DESC')

            ->getQuery()
            ->getResult();
        ;

        return $results;
    }

    public function getRestaurantsByFilterPrice($fr, $it, $ind, $chic, $brgus, $region)
    {
        $results = $this->createQueryBuilder('restaurant')
            ->select('restaurant.name, restaurant.region, AVG(comment.rate) AS avgRate, restaurant.averagePrice, 
            restaurant.mainFood, restaurant.slug, photos.photo')

            ->join('restaurant.comments','comment')
            ->join('restaurant.photos','photos')


            ->where('restaurant.mainFood LIKE :it OR restaurant.mainFood LIKE :fr OR restaurant.mainFood 
            LIKE :ind OR restaurant.mainFood LIKE :chic OR restaurant.mainFood LIKE :brgUS')

            ->andWhere('restaurant.region LIKE :region')
            ->groupBy('restaurant')

            ->setParameters([
                'region' => $region,
                'it' => $it,
                'fr' => $fr,
                'ind' => $ind,
                'chic' => $chic,
                'brgUS' => $brgus
            ])


            ->orderBy('restaurant.averagePrice', 'ASC')

            ->getQuery()
            ->getResult();
        ;

        return $results;
    }



}

