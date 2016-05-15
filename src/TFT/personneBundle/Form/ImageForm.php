<?php


namespace TFT\personneBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of ImageForm
 *
 * @author lenovo
 */
class ImageForm extends AbstractType {
    
     public function buildForm(FormBuilderInterface $builder, array $options) {

 $builder

 ->add('description')
 ->add('file');

 
         
     }

  public function getName() {

 return 'image1';

 }  
    
}
