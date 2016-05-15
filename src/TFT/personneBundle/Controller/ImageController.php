<?php
namespace TFT\personneBundle\Controller;
use TFT\personneBundle\Entity\image1; 
use TFT\personneBundle\Form\ImageForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;





/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of ImageController
 *
 * @author lenovo
 */
class ImageController extends Controller {
    
    public function uploadAction()

 {

 $im=new image1();

 $form = $this->createForm(new ImageForm(), $im);

 $request = $this->get('request_stack')->getCurrentRequest();

 $form->handleRequest($request);

 if ($form->isValid()) 

 {

 $em = $this->getDoctrine()->getManager();

 $stream = fopen($im->getFile(),'rb');

 $im->setImg(stream_get_contents($stream));

 $em->persist($im);

 $em->flush();

 return $this->render('TFTpersonneBundle:image:index.html.twig', array());

 }

 return $this->render('TFTpersonneBundle:image:upload.html.twig', array('Form'=>$form->createView()));

}

public function listAction()

 {

 $em = $this->getDoctrine()->getManager();

 $image=$em->getRepository('TFTpersonneBundle:image1')->findAll();

 return $this->render('TFTpersonneBundle:image:list.html.twig', 

array('images'=>$image));

 }
 public function afficheAction($id)

 {

 $em = $this->getDoctrine()->getManager();

 $image=$em->getRepository('TFTpersonneBundle:image1')->find($id);

 return $this->render('TFTpersonneBundle:image:affiche.html.twig',array('images'=>$image));

 }
 
 public function photoAction($id)

 {

 $em = $this->getDoctrine()->getManager();

 $image_obj = $em->getRepository('TFTpersonneBundle:image1')->find($id);

 $photo=$image_obj->getImg();

 $response = new StreamedResponse(function () use ($photo) {

 echo stream_get_contents($photo);

 });

 $response->headers->set('Content-Type', 'image/jpeg');

 return $response;

 }


    
    
    
    
    
}
