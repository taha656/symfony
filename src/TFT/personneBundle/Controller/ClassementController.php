<?php

namespace TFT\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class ClassementController extends Controller {
    
public function affichageClassementAction(){

        
     $em=$this->getDoctrine()->getManager();
     $query=$em->createQuery('SELECT u.nom , u.rangjoueur FROM  TFTpersonneBundle:User u order by u.rangjoueur desc ');
     $resultat=$query->getResult();  
      return $this->render("TFTpersonneBundle:Classement:affiche.html.twig",array('modeles'=>$resultat));
        
        

  
    
    
    

     }

        
   
}

     
     

