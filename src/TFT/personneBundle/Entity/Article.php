<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TFT\personneBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Article {
    
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
     * @ORM\Column(name="duree", type="string")
     */
    private $sujet;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string")
     */
    private $date;
    
    
    function setId($id) {
        $this->id = $id;
    }

    

    function setDate($date) {
        $this->date = $date;
    }

    function getId() {
        return $this->id;
    }

    function getSujet() {
        return $this->sujet;
    }

    function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    
    function getDate() {
        return $this->date;
    }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
