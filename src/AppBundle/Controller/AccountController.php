<?php

namespace AppBundle\Controller;


use AppBundle\Entity\user;

use AppBundle\Form\userType;
use Doctrine\Common\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{
    /**
     * @Route("/register", name="account.register")
     */
    public function registerAction(Request $request, ManagerRegistry $doctrine)
    {

        // création d'un formulaire
        $entity = new user();
        $type = userType::class;

        $form = $this->createForm($type, $entity);

        // handleRequest va récupérer ce qu'il ya dans la saisie précédente / gérer la requête, récupèrer la saisie
        $form->handleRequest($request);

        // formulaire valide
        if ($form->isSubmitted() && $form->isValid()) {
            // récupération de la saisie
            $data = $form->getData();

            //dump($data);
            //exit;

            // insertion
            $em = $doctrine->getManager();
            $em->persist($data);
            $em->flush();


            // redirection
            return $this->redirectToRoute('security.login');

        }

        return $this->render('account/register.html.twig', [
            'form' => $form->createView()
        ]);
    }
}