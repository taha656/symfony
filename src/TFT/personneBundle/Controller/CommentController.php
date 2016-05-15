<?php
namespace TFT\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TFT\personneBundle\Entity\Forum;
use TFT\personneBundle\Form\ForumType;


class CommentController extends Controller{
 
    

  public function CommentaireAction()
    {
      
       $em=$this->getDoctrine()->getManager();
       $modeles=$em->getRepository("TFTpersonneBundle:Forum")->findAll();
        return $this->render("TFTpersonneBundle:Comment:Affichage.html.twig",array('modeles'=>$modeles));
    }
    
    public function AjoutForumAction(){
        $Forum =new Forum();
//        $Date->setDate(new \DateTime());
        $Form = $this->createForm(new ForumType(),$Forum);
        $request= $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
            if ($Form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($Forum);
            $em->flush();
            return  $this->redirect($this->generateUrl('comment_article')); 
            }
           
        
        return $this->render("TFTpersonneBundle:Comment:forum.html.twig",
                array('Form'=>$Form->createView()));
    }
    
//    public function repondreAction($titre_du_forum)
//    {
//      
//       $em=$this->getDoctrine()->getManager();
//       $modeles=$em->getRepository("TFTpersonneBundle:Forum")->find($titre_du_forum);
//        return $this->render("TFTpersonneBundle:Comment:Repondre.html.twig",array('modeles'=>$modeles));
//    }

     public function repondreAction($id){
        $em=$this->getDoctrine()->getManager();
        $forum=$em->getRepository('TFTpersonneBundle:Forum')->findOneById($id);
       /* $requet=$this->getRequest('request');
        if($requet->getMethod()=="POST")
        {
            $search=$requet->get('search');*/
            $forum=$em->getRepository('TFTpersonneBundle:Forum')->findById($id);
      //  }
          return $this->render('TFTpersonneBundle:Comment:Repondre.html.twig',array('mds'=>$forum));
    }
     public function rechercherForumAction(){
    $em=$this->getDoctrine()->getManager();
        $forum=$em->getRepository('TFTpersonneBundle:Forum')->findALL();
        $requet=$this->getRequest('request');
        if($requet->getMethod()=="POST")
        {
            $search=$requet->get('search');
            $forum=$em->getRepository('TFTpersonneBundle:Forum')->findById($search);
            
        }
          return $this->render('TFTpersonneBundle:Comment:rechercherForum.html.twig',array('mds'=>$forum));
    }
    public function AdminforumAction(){
        
         $em=$this->getDoctrine()->getManager();
     $query=$em->createQuery('SELECT u.titreDuForum , u.description FROM  TFTpersonneBundle:Forum u ');
     $modeles=$query->getResult();  
      return $this->render("TFTpersonneBundle:Comment:Admin.html.twig",array('modeles'=>$modeles));
        
        
        
    }
     }
    
    
            



