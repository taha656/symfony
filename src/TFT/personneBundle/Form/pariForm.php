<?php

namespace TFT\personneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class pariForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prix')
           // ->add('nbJoke')
           // ->add('choix')
           // ->add('idjeu')
          //  ->add('idutilisateur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TFT\personneBundle\Entity\pari'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tft_personnebundle_pari';
    }
}
