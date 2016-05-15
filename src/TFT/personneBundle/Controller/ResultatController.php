<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TFT\personneBundle\Controller;
use Symfony\Component\HttpFoundation\Request;

use Html2Pdf_Html2Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use TFT\personneBundle\Entity\stade;
use TFT\personneBundle\Entity\matches;
use TFT\personneBundle\Entity\resultat;

use TFT\personneBundle\Form\StadeForm;
use TFT\personneBundle\Form\matchesForm;
use TFT\personneBundle\Form\ResultatForm;
class ResultatController extends Controller {

    
         public function ajoutresultatAction() {

              $resultat = new resultat();
        $form = $this->createForm(new ResultatForm(), $resultat);
        $request = $this->get('request');
        $form->handleRequest($request); //handle request tchouf ken el requete fer8a wala lé
        if ($form->isValid()) {
            
            
            $em = $this->getDoctrine()->getManager();


            $em->persist($resultat); //requet SQL
            $em->flush(); //execute la requete
            return $this->redirectToRoute('afficher_admin_resultat');

                               }
                               
        return $this->render('TFTpersonneBundle:Resultat:ajouterresultat.html.twig'
                        , array('f' => $form->createView()));
        //createview permet de dessiner un formumaire dans une view
        

    }
    
    
      public function afficheruserresultatAction(Request $request) {
            
                $em    = $this->get('doctrine.orm.entity_manager');
    $dql   = "SELECT a FROM TFTpersonneBundle:resultat a";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
       3/*limit per page*/
    );

    
    // parameters to template
    return $this->render('TFTpersonneBundle:Resultat:afficheruserresultat.html.twig', array('pagination' => $pagination));

        }
    
    
    
    
    
    
    
    
       public function afficheradminresultatAction(Request $request) {
            
                $em    = $this->get('doctrine.orm.entity_manager');
    $dql   = "SELECT a FROM TFTpersonneBundle:resultat a";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
       3/*limit per page*/
    );

    
    // parameters to template
    return $this->render('TFTpersonneBundle:Resultat:afficheradminresultat.html.twig', array('pagination' => $pagination));

        }
        
        
        
          public function rechercherresultatAction() {
        $em = $this->getDoctrine()->getManager();
        $resultat = $em->getRepository('TFTpersonneBundle:resultat')->findALL();
        $requet = $this->getRequest('request');
        if ($requet->getMethod() == "POST") {
            $search = $requet->get('search');
            $resultat = $em->getRepository('TFTpersonneBundle:resultat')->findById($search);
        }
        return $this->render('TFTpersonneBundle:Resultat:rechercherresultat.html.twig', array('mds' => $resultat));

        }  
    

          
          
        
          public function supprimerresultatAction($id) {
        $em = $this->getDoctrine()->getManager();
        $resultat = $em->getRepository('TFTpersonneBundle:resultat')
                ->findOneById($id); //cherche id
        $em->remove($resultat);
        $em->flush();
        return $this->redirectToRoute('afficher_admin_resultat');
    }
    
      public function modifierresultatAction($id) {
        $em = $this->getDoctrine()->getManager(); //instencier objet doctrine mel orm//manager les entités
        $resultat = $em->getRepository('TFTpersonneBundle:resultat')
                ->find($id); //cherche id
        $form = $this->createForm(new ResultatForm(), $resultat);
        $request = $this->get('request');
        if ($form->handleRequest($request)->isValid()) {
            $em->persist($resultat);
            $em->flush();
        return $this->redirectToRoute('afficher_admin_resultat');
        }
        return $this->render('TFTpersonneBundle:Resultat:modifierresultat.html.twig'
                        , array('f' => $form->createView()));
    }

}
























