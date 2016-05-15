<?php

namespace TFT\personneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StadeForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
            ->add('nom')
            ->add('capacite')
            ->add('typeDeTerrain')
            ->add('surface')
                 ->add('valider','submit');
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TFT\personneBundle\Entity\stade'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tft_personnebundle_stade';
    }
}
