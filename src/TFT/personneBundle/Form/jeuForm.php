<?php

namespace TFT\personneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
class jeuForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('idmatches1', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur1',
                                            'query_builder' => function(EntityRepository $nomjoueur1) {
                                                                   return $nomjoueur1->createQueryBuilder('u')->orderBy('u.nomjoueur1');
                                                                            
                                                               }
                 ))
                                                                    ->add('idmatches2', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur2',
                                            'query_builder' => function(EntityRepository $nomjoueur2) {
                                                                   return $nomjoueur2->createQueryBuilder('u')->orderBy('u.nomjoueur2');
                                                                            
                                                               }
                 ))
                                                               
                                                                       ->add('idmatches3', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur1',
                                            'query_builder' => function(EntityRepository $nomjoueur1) {
                                                                   return $nomjoueur1->createQueryBuilder('u')->orderBy('u.nomjoueur1');
                                                                            
                                                               }
                 ))
                                                                    ->add('idmatches4', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur2',
                                            'query_builder' => function(EntityRepository $nomjoueur2) {
                                                                   return $nomjoueur2->createQueryBuilder('u')->orderBy('u.nomjoueur2');
                                                                            
                                                               }
                 ))
                                                               
                                                                       ->add('idmatches5', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur1',
                                            'query_builder' => function(EntityRepository $nomjoueur1) {
                                                                   return $nomjoueur1->createQueryBuilder('u')->orderBy('u.nomjoueur1');
                                                                            
                                                               }
                 ))
                                                                    ->add('idmatches6', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur2',
                                            'query_builder' => function(EntityRepository $nomjoueur2) {
                                                                   return $nomjoueur2->createQueryBuilder('u')->orderBy('u.nomjoueur2');
                                                                            
                                                               }
                 ))
                                                               
                                                                       ->add('idmatches7', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur1',
                                            'query_builder' => function(EntityRepository $nomjoueur1) {
                                                                   return $nomjoueur1->createQueryBuilder('u')->orderBy('u.nomjoueur1');
                                                                            
                                                               }
                 ))
                                                                    ->add('idmatches8', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur2',
                                            'query_builder' => function(EntityRepository $nomjoueur2) {
                                                                   return $nomjoueur2->createQueryBuilder('u')->orderBy('u.nomjoueur2');
                                                                            
                                                               }
                 ))
                                                               
                                                                       ->add('idmatches9', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur1',
                                            'query_builder' => function(EntityRepository $nomjoueur1) {
                                                                   return $nomjoueur1->createQueryBuilder('u')->orderBy('u.nomjoueur1');
                                                                            
                                                               }
                 ))
                                                                    ->add('idmatches10', 'entity', array('class' => 'TFTpersonneBundle:matches',
                                            'property' => 'getNomjoueur2',
                                            'query_builder' => function(EntityRepository $nomjoueur2) {
                                                                   return $nomjoueur2->createQueryBuilder('u')->orderBy('u.nomjoueur2');
                                                                            
                                                               }
                 ))
                           ->add('Ajouter','submit');

        ;                                            }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TFT\personneBundle\Entity\jeu'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tft_personnebundle_jeu';
    }
}
