<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TFT\personneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationDopageType extends AbstractType
{
   

    /**
     * @param string $class The User class name
     */
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('nom')
           ->add('age')
           ->add('cin')
           ->add('competencedopage')
        
            
            
            
            
            
            
            
            ;
    }

   
    
    public function getName()
    {
        return 'tft_dopage_registration';
    }

    public function getParent
            ()
    {
        return 'fos_user_registration';
    }
}

