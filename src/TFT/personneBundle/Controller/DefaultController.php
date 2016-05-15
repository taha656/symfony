<?php

namespace TFT\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TFTpersonneBundle:Default:index.html.twig');
    }
 public function dopAction()
    {
        return $this->render('TFTpersonneBundle:Default:dop.html.twig');
    }
 public function medAction()
    {
        return $this->render('TFTpersonneBundle:Default:med.html.twig');
    }    
 public function userAction()
    {
        return $this->render('TFTpersonneBundle:Default:user.html.twig');
    } 
 public function admAction()
    {
        return $this->render('TFTpersonneBundle:Default:admin.html.twig');
    } 
 public function arbAction()
    {
     
     
     return $this->render('TFTpersonneBundle:Default:arbitre.html.twig');
    } 
    public function fanAction()
    {
       return $this->render('TFTpersonneBundle:Default:fan.html.twig');
    } 
 function listuserAction(){
           $em=$this->getDoctrine()->getManager();
        /*getRespository  prendre le nom de l'entité */
        $modeles=$em->getRepository('TFTpersonneBundle:User')->findAll();
        
        
        return $this->render('TFTpersonneBundle:Default:Listuser.html.twig',array('m'=>$modeles));
    
        
        
 }
//     function afficheuserAction(){
//           $em=$this->getDoctrine()->getManager();
//        /*getRespository  prendre le nom de l'entité */
//         if (getrole()=='ROLE_JOUEUR')
//        $modeles=$em->getRepository('TFTpersonneBundle:User')->findAll();
//        
//        
//        return $this->render('TFTpersonneBundle:Default:ListDemandeEnCours.html.twig',array('m'=>$modeles));
//    }
//    public function mailAction($id) {
//   
//       $em = $this->getDoctrine()->getManager(); //instantiation du gestionaire des objet
//        $commande = $em->getRepository("TFTpersonneBundle:User")
//                ->find($id);
//              
//      
//    
//              
//         $message = \Swift_Message::newInstance()
//                 
//                 ->setSubject('Invitation à un test de dopage')
//                 ->setFrom(array('tftjungle@gmail.com' => "Federation De Tennis ") )
//                 ->setTo($commande->getEmail())
//                 ->setCharset('utf-8')
//                 ->setContentType('text/html')
//                 ->setBody($this->renderView('ProjetMedecinBundle:Medecin:mail.html.twig',array('md' => $commande)));
//         $this->get('mailer')->send($message);
//        // return new Response('Bon');
//           $Clas = $em->getRepository("TFTPersonneBundle:User")
//                
//           
//    
//        
//       
//    
////        return $this->redirect($this->generateUrl("afficherListEncours"));
//}
 public function adminAction()
    { 
      
        return $this->render("TFTpersonneBundle:Default:Inscription.html.twig",array());
}
       }
    

