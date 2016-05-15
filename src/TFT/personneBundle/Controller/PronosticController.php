<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pronostic
 *
 * @author Taha
 */
namespace TFT\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TFT\personneBundle\Entity\jeu;
use TFT\personneBundle\Entity\pari;
use TFT\personneBundle\Form\jeuForm;
use TFT\personneBundle\Form\pariForm;
class PronosticController extends Controller{
    //put your code here

    public function affichMatchAction(){
        $em=$this->getDoctrine()->getManager();//instantiation du gestionaire des objet
        $matches=$em->getRepository('TFTpersonneBundle:matches')->findAll(); //get repository temchi lel une entité bien determiner
    return $this->render('TFTpersonneBundle:Match:affichMatch.html.twig',array('mds'=>$matches));
        
    }
       public function resultatPronosticAction(){
        $pari=new pari();
       $em=$this->getDoctrine()->getManager();
       $paris=$em->getRepository("TFTpersonneBundle:pari")->findAll();
       $Form=$this->createForm(new pariForm(),$pari);
       $request= $this->get('request_stack')->getCurrentRequest();
       $Form->handleRequest($request);
       if($Form->isValid()){
       
       $paris=$em->getRepository("TFTpersonneBundle:pari")
               ->resultatPronosticDQL($pari->getResultat());
       }
       return $this->render("TFTpersonneBundle:Pronostic:resultatPronostic.html.twig", 
               array('Form'=>$Form->createView(),'mds'=>$paris)); 
    
    
    }
    
    
    
       public function affichPronosticAction(){
    $em1=$this->getDoctrine()->getManager();//instantiation du gestionaire des objet
        $pronostic=$em1->getRepository('TFTpersonneBundle:jeu')->findAll(); //get repository temchi lel une entité bien determiner
   $requet=$this->getRequest('request');
        if($requet->getMethod()=="POST")
        {
            $search=$requet->get('search');
            $pronostic=$em1->getRepository('TFTpersonneBundle:jeu')->findById($search);
        }
        
        $pari =new pari();//instenciation
        $request = $this->get('request_stack')->getCurrentRequest();//recuperer la requete
        
        if($request->getMethod()=='POST'){
$idjeu = $this->getDoctrine()->getManager()->getRepository('TFTpersonneBundle:jeu')->findOneById($search);         //   $idjeu=$request->get('search');
             $choix2=$request->get('choix2');
              $choix3=$request->get('choix3');
               $choix4=$request->get('choix4');
                $choix5=$request->get('choix5');
                  $choix6=$request->get('choix6');
             $choix7=$request->get('choix7');
              $choix8=$request->get('choix8');
               $choix9=$request->get('choix9');
                $choix10=$request->get('choix10');
             $prix=$request->get('prix');
            $choix1=$request->get('choi'
                    . 'x1');
              $pari->setIdjeu($idjeu);
            $pari->setChoix2($choix2);
             $pari->setChoix3($choix3);
            $pari->setChoix4($choix4);
             $pari->setChoix5($choix5);
            $pari->setChoix6($choix6);
             $pari->setChoix7($choix7);
            $pari->setChoix8($choix8);
             $pari->setChoix9($choix9);
            $pari->setChoix10($choix10);
             $pari->setPrix('50');
             $pari->setNbJoke('50');
            $pari->setChoix1($choix1);
            $em=$this->getDoctrine()->getManager();
            $em->persist($pari);//requet SQL
            $em->flush();//execute la requete
           // return $this->redirectToRoute('esprit_parc_list_Modele');
        }
        
    return $this->render('TFTpersonneBundle:Pronostic:affichPronostic.html.twig',array('mds'=>$pronostic)); }
    
    
       public function ajoutJeuDQLAction(){
  
         $jeux = new jeu();
        $form=$this->createForm(new jeuForm(),$jeux);
        $request=$this->get('request');
        $form->handleRequest($request);//handle request tchouf ken el requete fer8a wala lé
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            
             $jeux->setNbGagnant('0');
             $jeux->setCagnotte('50000');
             $jeux->setResultat('');
            $em->persist($jeux);//requet SQL
            $em->flush();//execute la requete
            return $this->redirectToRoute('admin_index_homepage');
        }
        return $this->render('TFTpersonneBundle:Pronostic:ajoutJeu.html.twig'
             ,array('f'=>$form->createView()));
        //createview permet de dessiner un formumaire dans une view
        
    
     
   }
    
           public function recherchePronosticAction()
    {
        $em1=$this->getDoctrine()->getManager();//instantiation du gestionaire des objet
        $pronostic=$em1->getRepository('TFTpersonneBundle:jeu')->findAll(); //get repository temchi lel une entité bien determiner
   $requet=$this->getRequest('request');
        if($requet->getMethod()=="POST")
        {
            $search=$requet->get('search');
            $pronostic=$em1->getRepository('TFTpersonneBundle:jeu')->findById($search);
             return $this->redirect($this->generateUrl('affich_pronostic'));
        }
          return $this->render('TFTpersonneBundle:Pronostic:recherchePronostic.html.twig',array('mds'=>$pronostic)); }
    }    

//mezel dql massitouch