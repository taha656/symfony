<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TFT\personneBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of ArticleForm
 *
 * @author lenovo
 */
class ArticleForm extends AbstractType {

    
    public function buildForm(FormBuilderInterface 
            $builder,array $options){
        $builder
            ->add('sujet')
            ->add('date')   
                
                                ->add('valider','submit');
 
                
                
            }
            
    public function getName() {
                return 'article';

        
    }         
            
            
            
}
