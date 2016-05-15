<?php
namespace TFT\personneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionForm
 *
 * @author lenovo
 */
class SessionForm extends AbstractType {
    
public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
              
                
            ->add('duree')                                   
            ->add('dateDebut')
            ->add('dateFin')
            ->add('type')
            ->add('lieu')
            ->add('nomarbitre')

                

              ->add('idarbitre','entity',
        array('class'=>'TFTpersonneBundle:User','property'=>'nom'))
        
    

            

                  
                  
            
        
        
        

            
                 ->add('valider','submit');
        ;
        
        
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TFT\personneBundle\Entity\session'
        ));
    }
    
    public function getName() {
                return 'sessionName';

        
    }
}
