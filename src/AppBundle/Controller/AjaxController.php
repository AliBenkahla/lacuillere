<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 31/01/2018
 * Time: 15:48
 */

namespace AppBundle\Controller;

use AppBundle\Entity\restaurant;
use AppBundle\Repository\restaurantRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/ajax")
 *
 */

class AjaxController extends Controller
{

    /**
     * @Route("/datalist", name="ajax.datalist")
     * */

    public function datalistAction(Request $request, ManagerRegistry $doctrine)
    {

        $searchValue = $request->get('searchValue');

        $restaurants = $doctrine->getRepository(restaurant::class)->getNameBySearchResults($searchValue);
        //dump($restaurants);exit;

        $response = new JsonResponse($restaurants);

        return $response;

    }

}