<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TFT\personneBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TFT\personneBundle\Entity\matches;
use TFT\personneBundle\Form\matchesForm;


class matchController extends Controller{

    
            /*
         $em = $this->getDoctrine()->getManager(); //instantiation du gestionaire des objet
        $resultats = $em->getRepository('TFTpersonneBundle:resultat')->findAll(); //get repository temchi lel une entité bien determiner
        return $this->render('TFTpersonneBundle:Resultat:afficheradminresultat.html.twig', array('mds' => $resultats));

    }*/
    
    
    
   public function afficherMatchadminAction() {
 $em = $this->getDoctrine()->getManager(); //instantiation du gestionaire des objet
        $matches = $em->getRepository('TFTpersonneBundle:matches')->findAll(); //get repository temchi lel une entité bien determiner

        return $this->render('TFTpersonneBundle:Match:affichMatchadmin.html.twig', array(
            'mds' => $matches,
                
                ));
                                      } 
    
       public function supprimermatchAction($id) {
     
        $em = $this->getDoctrine()->getManager();
        $resultat = $em->getRepository('TFTpersonneBundle:matches')
                ->findOneById($id); //cherche id
        $em->remove($resultat);
        $em->flush();
        return $this->redirectToRoute('afficher_admin_match');
        
    }
    
      public function recherchermatchAction() {
          
        $em = $this->getDoctrine()->getManager();
        $resultat = $em->getRepository('TFTpersonneBundle:matches')->findALL();
        $requet = $this->getRequest('request');
        if ($requet->getMethod() == "POST") {
            $search = $requet->get('search');
            $resultat = $em->getRepository('TFTpersonneBundle:matches')->findById($search);
        }
        return $this->render('TFTpersonneBundle:Match:recherchermatch.html.twig', array('mds' => $resultat));

        }  
    
    
    
    
                     public function modifiermatchAction($id) {
        $em = $this->getDoctrine()->getManager(); //instencier objet doctrine mel orm//manager les entités
        $resultat = $em->getRepository('TFTpersonneBundle:matches')
                ->find($id); //cherche id
        $form = $this->createForm(new matchesForm(), $resultat);
        $request = $this->get('request');
        
        
        if ($form->handleRequest($request)->isValid()) {
            $em->persist($resultat);
            $em->flush();
        return $this->redirectToRoute('afficher_admin_match');
        }
        
        return $this->render('TFTpersonneBundle:Match:modifiermatch.html.twig'
                        , array('f' => $form->createView()));
    }

                  
    
 public function afficherMatchuserAction() {
 $em = $this->getDoctrine()->getManager(); //instantiation du gestionaire des objet
        $matches = $em->getRepository('TFTpersonneBundle:matches')->findAll(); //get repository temchi lel une entité bien determiner
       $ticket = $em->getRepository('TFTpersonneBundle:ticket')->findAll(); //get repository temchi lel une entité bien determiner

        return $this->render('TFTpersonneBundle:Match:affichMatchuser.html.twig', array(
            'mds' => $matches,
            'ticket'=>$ticket,
                
                ));
                                      }
    
   
    public function affecterarbitreAction() {

        $em = $this->getDoctrine()->getManager(); //instantiation du gestionaire des objet
        $matches = $em->getRepository('TFTpersonneBundle:matches')->findAll(); //get repository temchi lel une entité bien determiner
        $AllArbitre = $em->getRepository('TFTpersonneBundle:User')->findAll();
        $request = $this->get('request');


        if ($request->getMethod() == 'POST') {

            // data is an array with "name", "email", and "message" keys
            $idArbi = $request->request->get('arbi');
            $idMatch = $request->request->get('match');
           
            $monMatch = $em->getRepository('TFTpersonneBundle:matches')->findOneById($idMatch);
            $monArbi = $em->getRepository('TFTpersonneBundle:User')->findOneById($idArbi);
        
             $monMatch->setIdarbitre($monArbi);
          
            $em->persist($monMatch); //requet SQL
            $em->flush(); //execute la requete
        }



        return $this->render('TFTpersonneBundle:Match:affecterarbitre.html.twig', array(
                    'mds' => $matches,
                    'arbitter' => $AllArbitre,
        ));
    }

    
    
    
    public function ajoutmatchAction() {

        $matches = new matches();
        $form = $this->createForm(new matchesForm(), $matches);
        $request = $this->get('request');
        $form->handleRequest($request); //handle request tchouf ken el requete fer8a wala lé
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();


            $em->persist($matches); //requet SQL
            $em->flush(); //execute la requete
            return $this->redirectToRoute('afficher_admin_match');
        }
        return $this->render('TFTpersonneBundle:Match:ajoutermatch.html.twig'
                        , array('f' => $form->createView()));
        //createview permet de dessiner un formumaire dans une view
    }
         
          
    }