<?php
/**
 * Created by PhpStorm.
 * User: wabap2-3
 * Date: 23/01/18
 * Time: 11:51
 */

namespace AppBundle\Controller\Admin;


use AppBundle\Entity\comment;
use AppBundle\Entity\restaurant;
use AppBundle\Form\restaurantType;
use Doctrine\Common\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin")
 */

class RestaurantController extends Controller
{
    /**
     *
     * @Route("/restaurant", name="admin.restaurant.index")
     */
    public function indexAction(ManagerRegistry $doctrine)
    {
        // sélection des catégories
        $rc = $doctrine->getRepository(restaurant::class);
        $results = $rc->findAll();


        return $this->render('admin/restaurant/index.html.twig', [
            'results' => $results
        ]);

    }

    /**
     * @Route("/restaurant/form", name="admin.restaurant.form", defaults={"id"=null})
     * @Route("/restaurant/update/{id}", name="admin.restaurant.update")

     */
    public function formAction(ManagerRegistry $doctrine, Request $request, $id)
    {

        //dump($id);exit;

        //doctrine
        $em = $doctrine->getManager();
        $rc = $doctrine->getRepository(restaurant::class);


        //formulaire
        $entityrst = $id ? $rc->find($id) :  new restaurant();


        $type = restaurantType::class;




        //dump($entity);exit;
        $entityrst->imageDB = $entityrst->getPhotos();
        //dump($entityphoto);exit;

       // $arrayphotos = $entityphoto->map(function($entity)  {
         //   return $entity->getPhoto();
        //})->toArray();


       // dump($arrayphotos);exit;

        //for($i = 0; $i < count($arrayphotos); $i++) {
          //  $photo = $arrayphotos[$i];

        //}
        //dump($photo);exit;

        //dump($rstphotos);exit;




        $form = $this->createForm($type, $entityrst);

        // handleRequest va récupérer ce qu'il ya dans la saisie précédente / gére la requête, récupère la saisie
        $form->handleRequest($request);

        // formulaire valide
        if($form->isSubmitted() && $form->isValid()) {
            // récupération de la saisie
            $data = $form->getData();
            //dump($data);exit;


            $arrayphotos = $data->getPhotos();
            //dump($array);exit;



            if($arrayphotos) {
                //  dump($uploadedFile);exit;
                for ($i = 0; $i < count($arrayphotos); $i++) {

                    $uploadedFile = $arrayphotos->get($i)->getPhoto();

                    $imgName = $uploadedFile->getClientOriginalName();
                    //dump($uploadedFile);exit;

                    $uploadedFile->move('img/restaurant', $imgName);


                    $arrayphotos->get($i)->setPhoto($imgName);
                }
            }
            else{
                $data->addPhoto($data->imageDB);
            }

            //$data->setPhoto($imgName);



            $em->persist($data);
            $em->flush();

            return $this->redirectToRoute('admin.homepage.index');
        }

        return $this->render('admin/restaurant/form.html.twig', [
            'form' => $form->createView()

        ]);
    }
}