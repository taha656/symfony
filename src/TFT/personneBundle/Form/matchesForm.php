<?php

namespace TFT\personneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class matchesForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('types')
            ->add('dateMatch')
        //    ->add('resultat')
          //  ->add('idjoueur1')
      //      ->add('idjoueur2')
       //     ->add('idaritre')
        ->add('types', 'choice', array(
    'choices' => array('amateur' => 'amateur', 'professionnel' => 'professionnel'),
    
))
                     ->add('resultat', 'choice', array(
    'choices' => array('2-0' => '2-0', '2-1' => '2-1','0-2' => '0-2','1-2' => '1-2'),
    
))
                

                  
              ->add('idjoueur1','entity',
        array('class'=>'TFTpersonneBundle:User','property'=>'nom')
        
        ) 
                     ->add('idjoueur2','entity',
        array('class'=>'TFTpersonneBundle:User','property'=>'nom')
        
        ) 
                ->add('idstade','entity',
        array('class'=>'TFTpersonneBundle:stade','property'=>'nom','label'=>'le nom du stade est :')
        
        )  

        
                                 ->add('Ajouter','submit');

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TFT\personneBundle\Entity\matches'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tft_personnebundle_matches';
    }
}
