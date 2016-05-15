<?php
namespace TFT\personneBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class ModeleForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface 
            $builder,array $options){
        $builder
               
                
               
                ->add('Fonction', 'choice', array( 
                    'choices' => array(
                        'Medecin' => 'Medecin',
                        'Arbitre' => 'Arbitre',
                        'Responsable anti dopage' => 'Responsable anti dopage',
                        'Utilisateur' => 'Utilisateur'
                      
                       
                       
                        
                    
                        
                        
                        ),
                    'multiple' => false, 'expanded' => true, 
                    'required' => true )) 
    
                ->add('valider','submit');
               // ->setMethod("GET");
    }
    
    public function getName(){
        return 'ModeleName';
    }
}
