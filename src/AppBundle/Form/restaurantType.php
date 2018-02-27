<?php

namespace AppBundle\Form;

use AppBundle\Entity\comment;
use AppBundle\Entity\photo;
use AppBundle\Entity\restaurant;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class restaurantType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            //champ name
            ->add("name", TextType::class, [
            ])

            //champ name
            ->add("region", ChoiceType::class, [
                'choices'  => array(
                    '92' => '92',
                    '93' => '93',
                    '94' => '94',
                    '95' => '95',
                    '78' => '93',
                    'Paris' => '93',
                    )
            ])

            //champ name
            ->add("city", TextType::class, [
            ])

            //champ name
            ->add("averagePrice", IntegerType::class, [
            ])

            //champ name
            ->add("mainFood", TextType::class, [

            ])

            //champ name
            ->add("phoneNumber", IntegerType::class, [
            ])


            //champ name
            ->add("photos", CollectionType::class, [
                'entry_type'   => photoType::class,
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false

            ])


            //->add('photos', FileType::class, [
              //  'data_class' => null,


  //  ])
        ;



    }



    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\restaurant'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_restaurant';
    }


}
