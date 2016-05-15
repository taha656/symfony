<?php


namespace TFT\personneBundle\Controller;
use TFT\personneBundle\Entity\Article; 
use TFT\personneBundle\Form\ArticleForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Description of ArticleController
 *
 * @author lenovo
 */
class ArticleController  extends Controller {
    
    public function ajoutAction(){
      $article=new article();
        $Form= $this->createForm(new ArticleForm(),$article);
        $request= $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
            if ($Form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                return $this->redirect($this->generateUrl('tft_aff_article')); 
            }
      
        return $this->render("TFTpersonneBundle:Article:ajouter.html.twig",
                array('Form'=>$Form->createView()));
    }
    
    public function listeAction(){
       $em=$this->getDoctrine()->getManager();
       $articles=$em->getRepository("TFTpersonneBundle:Article")->findAll();
       return $this->render("TFTpersonneBundle:Article:liste.html.twig",array("articles"=>$articles));
    } 
    
    
    public function supprimerAction($id){
         $em = $this->getDoctrine()->getManager();
         $article=$em->getRepository('TFTpersonneBundle:Article')->find($id);
         $em->remove($article);
         $em->flush();
         return $this->redirect($this->generateUrl('tft_listsup_article'));
         return $this->render("TFTpersonneBundle:Article:listsup.html.twig",
                array('Form'=>$Form->createView()));
     }
     
    public function listsupAction(){
       $em=$this->getDoctrine()->getManager();
       $articles=$em->getRepository("TFTpersonneBundle:Article")->findAll();
       return $this->render("TFTpersonneBundle:Article:listsup.html.twig",array("articles"=>$articles));
    }
    
    public function modifierAction($id){
         $em = $this->getDoctrine()->getManager();
         $article=$em->getRepository('TFTpersonneBundle:Article')->find($id);
         $Form= $this->createForm(new ArticleForm(),$article);
         $request= $this->get('request_stack')->getCurrentRequest();
         $Form->handleRequest($request);
         
         if ($Form->isValid()){
             
           $em->persist($article);
           $em->flush();
          return $this->redirect($this->generateUrl('tft_listup_article'));
         }
         return $this->render("TFTpersonneBundle:Article:mod.html.twig",array('Form'=>$Form->createView()));
     }
     
    public function listupAction(){
       $em=$this->getDoctrine()->getManager();
       $articles=$em->getRepository("TFTpersonneBundle:Article")->findAll();
       return $this->render("TFTpersonneBundle:Article:listup.html.twig",array("articles"=>$articles));
    }
    
    public function listeClientAction(){
       $em=$this->getDoctrine()->getManager();
       $articles=$em->getRepository("TFTpersonneBundle:Article")->findAll();
       return $this->render("TFTpersonneBundle:Article:listeclient.html.twig",array("articles"=>$articles));
    }
    
    public function listeClient2Action($id){
       $em=$this->getDoctrine()->getManager();
       $articles=$em->getRepository("TFTpersonneBundle:Article")->find($id);
       return $this->render("TFTpersonneBundle:Article:listeclient2.html.twig",array("articles"=>$articles));
    }
    
    
    
    

}
