<?php
/**
 * Created by PhpStorm.
 * User: wabap2-3
 * Date: 16/01/18
 * Time: 14:25
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security.login")
     */
    public function login(AuthenticationUtils $authUtils)
    {

        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // lastusername entered by the user
        $lastUsername = $authUtils->getLastUsername();

        //dump($lastUsername);exit;


        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));

    }

    /**
     * @Route("/logout", name="security.logout")
     */
    public function logout()
    {

        // méthode non appelée par symfony
    }

    /**
     * @Route("/redirect-by-role", name="security.redirect.by.role")
     * */
    public function redirectByRole()
    {
        // récupération de l'utilisateur
        $user = $this->getUser();

        //récupération du rôle
        $roles = $user->getRoles();

        //renvoie un tableau
        //dump($roles); exit;

        //test sur le rôle
        if (in_array('ROLE_ADMIN', $roles)) {
            return $this->redirectToRoute('admin.homepage.index');
        }else {
            return $this->redirectToRoute('homepage.index');
        }



    }

}