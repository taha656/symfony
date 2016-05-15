<?php

namespace TFT\personneBundle\Controller;

use Html2Pdf_Html2Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use TFT\personneBundle\Entity\stade;
use TFT\personneBundle\Form\StadeForm;
use TFT\personneBundle\Entity\session ;
use TFT\personneBundle\Form\SessionForm ;

class PersonneController extends Controller{
    //put your code here
    
    
         public function GoogleMapAction(){
      return $this->render('TFTpersonneBundle::GoogleMap.html.twig');   
    }
       public function affichStadeAction(){
        $em=$this->getDoctrine()->getManager();//instantiation du gestionaire des objet
        $stades=$em->getRepository('TFTpersonneBundle:stade')->findAll(); //get repository temchi lel une entité bien determiner
    return $this->render('TFTpersonneBundle:Stade:affichStade.html.twig',array('mds'=>$stades));
        
    }
          public function redirigerStadeAction(){
        $em=$this->getDoctrine()->getManager();//instantiation du gestionaire des objet
        $stades=$em->getRepository('TFTpersonneBundle:stade')->findAll(); //get repository temchi lel une entité bien determiner
    return $this->render('TFTpersonneBundle:Stade:redirigerStade.html.twig',array('mds'=>$stades));
        
    }
   
    public function modifierStadeAction($id){
        $em =$this->getDoctrine()->getManager();//instencier objet doctrine mel orm//manager les entités
        $stade = $em ->getRepository('TFTpersonneBundle:stade')
                ->find($id);//cherche id
        $form=$this->createForm(new StadeForm(),$stade);
        $request=$this->get('request');
        if($form->handleRequest($request)->isValid()){
            $em->persist($stade);
        $em->flush();
         return $this->redirectToRoute('affich_admin_stade');
       }
       return $this->render('TFTpersonneBundle:Stade:modifierStade.html.twig'
                ,array('f'=>$form->createView()));
        }
    public function supprimerStadeAction($id){
        $em =$this->getDoctrine()->getManager();
        $stade = $em ->getRepository('TFTpersonneBundle:stade')
                ->findOneById($id);//cherche id
        $em->remove($stade);
        $em->flush();
         return $this->redirectToRoute('affich_admin_stade');
        
    }
            public function rechercherStadeAction()
    {
        $em=$this->getDoctrine()->getManager();
        $stade=$em->getRepository('TFTpersonneBundle:stade')->findALL();
        $requet=$this->getRequest('request');
        if($requet->getMethod()=="POST")
        {
            $search=$requet->get('search');
            $stade=$em->getRepository('TFTpersonneBundle:stade')->findByNom($search);
        }
          return $this->render('TFTpersonneBundle:Stade:rechercherStade.html.twig',array('mds'=>$stade));
    }
           public function exporterStadeAction()
    {
                $em=$this->getDoctrine()->getManager();
        $stade=$em->getRepository('TFTpersonneBundle:stade')->findALL();
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('TFTpersonneBundle:Stade:redirigerStade.html.twig',array('mds'=>$stade));
        
        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new Html2Pdf_Html2Pdf('P','A4','fr');
        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : 
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);
        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
         
        $html2pdf->Output('Facture.pdf');
        
      var_dump($html); die();
        return new Response();
    }
          public function ajoutStadeAction(){
             
        $stade = new stade();
        $form=$this->createForm(new StadeForm(),$stade);
        $request=$this->get('request');
        $form->handleRequest($request);//handle request tchouf ken el requete fer8a wala lé
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            
            
            $em->persist($stade);//requet SQL
            $em->flush();//execute la requete
            return $this->redirectToRoute('affich_admin_stade');
        }
        return $this->render('TFTpersonneBundle:Stade:ajouterStade.html.twig'
             ,array('f'=>$form->createView()));
        //createview permet de dessiner un formumaire dans une view
        
    
     
          
    }
    public function adminIndexAction(){
     return $this->render('TFTpersonneBundle::adminIndex.html.twig');
          
    }
    public function listeAction(){
       $em=$this->getDoctrine()->getManager();
       $sessions=$em->getRepository("TFTpersonneBundle:session")->findAll();
       return $this->render("TFTpersonneBundle:Session:liste.html.twig",array("sessions"=>$sessions));
    }
      public function ajoutAction(){
      $session=new Session();
        $Form= $this->createForm(new SessionForm(),$session);
        $request= $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
            if ($Form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($session);
                $em->flush();
                return $this->redirect($this->generateUrl('tft_personne_aff')); 
            }
            
      
        return $this->render("TFTpersonneBundle:Session:ajouter.html.twig",
                array('Form'=>$Form->createView()));
    }
    public function supprimerAction($id){
         $em = $this->getDoctrine()->getManager();
         $session=$em->getRepository('TFTpersonneBundle:session')->find($id);
         $em->remove($session);
         $em->flush();
         return $this->redirect($this->generateUrl('tft_personne_listsup'));
         return $this->render("TFTpersonneBundle:Session:listsup.html.twig",
                array('Form'=>$Form->createView()));
     }
}
