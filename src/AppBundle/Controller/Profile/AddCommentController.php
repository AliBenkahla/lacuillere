<?php

namespace AppBundle\Controller\Profile;


use AppBundle\Entity\comment;
use AppBundle\Entity\restaurant;
use AppBundle\Form\commentType;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * @Route("/profile")
 */

class AddCommentController extends Controller
{
    /**
     * @Route("/addcomment", name="addcomment.index")
     */
    public function indexAction(Request $request, ManagerRegistry $doctrine, SessionInterface $session)
    {


        $em = $doctrine->getManager();


        //dump($restaurant);exit;

        $restaurantname = $session->get('restaurant');

        $restaurant = $doctrine->getRepository(restaurant::class)->findOneBy(
            array('name' => $restaurantname)

        );
        //dump($restaurant);exit;



        // création d'un formulaire
        $entity = new comment();

        $type = commentType::class;

        $form = $this->createForm($type, $entity);

        // handleRequest va récupérer ce qu'il ya dans la saisie précédente / gérer la requête, récupèrer la saisie
        $form->handleRequest($request);

        // formulaire valide
        if ($form->isSubmitted() && $form->isValid()) {
            // récupération de la saisie
            $data = $form->getData();

            //dump($data);
            //exit;

            $now = new \DateTime();
            $entity->setDate($now);


            $entity->setRestaurant($restaurant);


            // insertion
            //$em = $doctrine->getManager();
            //$em->persist($restaurant);

            $em->persist($data);
            $em->flush();

            return $this->redirect($session->get('referer'));

        }

        return $this->render('profile/addcomment/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}