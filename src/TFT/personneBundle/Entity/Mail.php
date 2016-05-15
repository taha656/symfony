<?php
namespace TFT\personneBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Mail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Mail {
    
/**
 * @var integer
 *
 * @ORM\Column(name="id", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */    
    
     
   private $id;
    
/**
 * @var string
 *
 * @ORM\Column(name="nom", type="string", length=255)
 */  
    
 private $nom;
 
/**
 * @var string
 *
 * @ORM\Column(name="prenom", type="string", length=255)
 */

 private $prenom;
 
/**
 * @var integer
 *
 * @ORM\Column(name="tel", type="integer")
 */
 
 private $tel;
 
/**
 * @var string
 *
 * @ORM\Column(name="from", type="string", length=255)
 */
 
 private $from;
 
/**
 * @var string
 *
 * @ORM\Column(name="text", type="string", length=255)
 */

 private $text;
 
 function setId($id) {
     $this->id = $id;
 }

 function setNom($nom) {
     $this->nom = $nom;
 }

 function setPrenom($prenom) {
     $this->prenom = $prenom;
 }

 function setTel($tel) {
     $this->tel = $tel;
 }

 function setFrom($from) {
     $this->from = $from;
 }

 function setText($text) {
     $this->text = $text;
 }

 function getId() {
     return $this->id;
 }

 function getNom() {
     return $this->nom;
 }

 function getPrenom() {
     return $this->prenom;
 }

 function getTel() {
     return $this->tel;
 }

 function getFrom() {
     return $this->from;
 }

 function getText() {
     return $this->text;
 }


}
