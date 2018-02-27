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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class SearchByRegionController extends Controller
{
    /**
     * @Route("/searchbyregion", name="searchbyregion.index")
     */
    public function indexAction(ManagerRegistry $doctrine, Request $request, SessionInterface $session)
    {
        // récupération de la saisie. on injecte request dans la fonction
        $search = $request->request->get('search');

        $session = new Session();

        // set session attributes
        $session->set('search', $search);



        //dump($request);exit;
        //dump($fr);dump($it);exit;

        $results = $doctrine->getRepository(restaurant::class)->getRestaurantsBySearchList($search);
        //dump($results);exit;


        return $this->render('searchbyregion/index.html.twig',[
                    'searchresults' => $results,
            'searchkey' => $search

            ]);
    }

}