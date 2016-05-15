<?php

namespace TFT\personneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResultatForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                       ->add('set1joueur1', 'choice', array(
    'choices' => array(1 => 1, 2 => 2,3 => 3,3 => 3,4 => 4,4 => 4,5 =>5,6 => 6,7 => 7),
    
))
                ->add('set2joueur1', 'choice', array(
    'choices' => array(1 => 1, 2 => 2,3 => 3,3 => 3,4 => 4,4 => 4,5 =>5,6 => 6,7 => 7),
    
))
                ->add('set3joueur1', 'choice', array(
    'choices' => array(1 => 1, 2 => 2,3 => 3,3 => 3,4 => 4,4 => 4,5 =>5,6 => 6,7 => 7),
    
))
                                ->add('set1joueur2', 'choice', array(
    'choices' => array(1 => 1, 2 => 2,3 => 3,3 => 3,4 => 4,4 => 4,5 =>5,6 => 6,7 => 7),
    
))
                                ->add('set2joueur2', 'choice', array(
    'choices' => array(1 => 1, 2 => 2,3 => 3,3 => 3,4 => 4,4 => 4,5 =>5,6 => 6,7 => 7),
    
))
                                ->add('set3joueur2', 'choice', array(
    'choices' => array(1 => 1, 2 => 2,3 => 3,3 => 3,4 => 4,4 => 4,5 =>5,6 => 6,7 => 7),
    
))
                       ->add('idjoueur1','entity',
        array('class'=>'TFTpersonneBundle:User','property'=>'nom')
        
        )
                             
                  
            
        
        
                  
             ->add('idjoueur1','entity',
        array('class'=>'TFTpersonneBundle:User','property'=>'nom')
        
        )
                     ->add('idjoueur2','entity',
        array('class'=>'TFTpersonneBundle:User','property'=>'nom')
        
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
            'data_class' => 'TFT\personneBundle\Entity\resultat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tft_personnebundle_resultat';
    }
}
