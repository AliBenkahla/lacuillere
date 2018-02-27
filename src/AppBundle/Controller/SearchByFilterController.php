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
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class SearchByFilterController extends Controller
{

    /**
     * @Route("/searchbyfilter", name="searchbyfilter.index")
     */
    public function indexFilterAction(ManagerRegistry $doctrine, Request $request, SessionInterface $session)
    {



        $region = $session->get('search');

        $filterpricenote = $request->request->get('filter-price-note');
        //dump($filterpricenote);exit;


        // récupération de la saisie. on injecte request dans la fonction


        $fr = $request->request->get('fr');
        $it = $request->request->get('it');
        $brgus = $request->request->get('brgUS');
        $chic = $request->request->get('brgChic');
        $ind = $request->request->get('Ind');



        if($filterpricenote === 'Note'){

            $filterresults = $doctrine->getRepository(restaurant::class)->getRestaurantsBySearchList($region);

            //dump($filterresults);exit;
            //dump($request);exit;
            //dump('ok');exit;


            if($fr || $it || $brgus || $chic || $ind ) {

                $filterresults = $doctrine->getRepository(restaurant::class)->getRestaurantsByFilterNote($fr, $it, $ind, $chic, $brgus, $region);
                //dump($filterresults);exit;

            }

            return $this->render('searchbyfilter/index.html.twig', [
                'filterresults' => $filterresults,
                'searchkey' => $region


            ]);


        }elseif($filterpricenote === 'Prix'){

            $filterresults = $doctrine->getRepository(restaurant::class)->getRestaurantsBySearchListAscPrice($region);

            //dump($filterresults);exit;

            if($fr || $it) {

                $filterresults = $doctrine->getRepository(restaurant::class)->getRestaurantsByFilterPrice($fr, $it,  $ind, $chic, $brgus, $region);
                //dump($filterresults);exit;
            }

            return $this->render('searchbyfilter/index.html.twig', [
                'filterresults' => $filterresults,
                'searchkey' => $region


            ]);
        }
        if($fr || $it|| $brgus || $chic || $ind ) {

            $filterresults = $doctrine->getRepository(restaurant::class)->getRestaurantsByFilterNote($fr, $it,  $ind, $chic, $brgus, $region);
            //dump($filterresults);exit;

            return $this->render('searchbyfilter/index.html.twig', [
                'filterresults' => $filterresults,
                'searchkey' => $region


            ]);

        }else{

            $filterresults = $doctrine->getRepository(restaurant::class)->getRestaurantsBySearchList($region);

            return $this->render('searchbyfilter/index.html.twig', [
                'filterresults' => $filterresults,
                'searchkey' => $region


            ]);
        }
    }
}