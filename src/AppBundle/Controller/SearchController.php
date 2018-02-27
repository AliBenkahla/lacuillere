<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 31/01/2018
 * Time: 14:30
 */

namespace AppBundle\Controller;



use AppBundle\Entity\restaurant;
use AppBundle\Repository\restaurantRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class SearchController extends Controller
{
    /**
     * @Route("/search/{slugRestaurant}", name="search.index", defaults={"slugRestaurant"=null})
     */
    public function indexAction(ManagerRegistry $doctrine, Request $request, $slugRestaurant)
    {

        $request->getSession()->set('referer', $request->headers->get('referer'));

        //dump($slugRestaurant);exit;


        $session = new Session();




        // récupération de la saisie. on injecte request dans la fonction
        $restaurantname = $request->request->get('restaurantname');
        //dump($search);exit; /*quuand on tape kkch dans la barre de recherche, apparait dans ce dump*/

        if ($slugRestaurant) {
            $results = $doctrine->getRepository(restaurant::class)->getRestaurantsBySearchBar($slugRestaurant);

            // set session attributes
            $session->set('restaurant', $slugRestaurant);
           // dump($results);exit;


            return $this->render('search/index.html.twig', [
                'results' => $results
            ]);
        }

        elseif($restaurantname) {
            $results = $doctrine->getRepository(restaurant::class)->getRestaurantsBySearchBar($restaurantname);
            //dump($results);exit;

            $session->set('restaurant', $restaurantname);


            return $this->render('search/index.html.twig', [
                'results' => $results
            ]);
        }
    }
}