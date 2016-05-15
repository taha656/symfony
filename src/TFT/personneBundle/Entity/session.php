<?php

namespace TFT\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * stade
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class session {
    
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
     * @ORM\Column(name="nomarbitre", type="string", length=255)
     */
    private $nomarbitre;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string")
     */
    private $dateDebut;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string")
     */
    
    private $dateFin;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string")
     */
    
    private $lieu;
    
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     * 
     */
    
    
    private $idarbitre;
    
    
    function getId() {
        return $this->id;
    }

    function getNomarbitre() {
        return $this->nomarbitre;
    }

    function getDuree() {
        return $this->duree;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getDateFin() {
        return $this->dateFin;
    }

    function getType() {
        return $this->type;
    }

    function getLieu() {
        return $this->lieu;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomarbitre($nomarbitre) {
        $this->nomarbitre = $nomarbitre;
    }

    function setDuree($duree) {
        $this->duree = $duree;
    }

    function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function setDateFin($dateFin) {
        $this->dateFin = $dateFin;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setLieu($lieu) {
        $this->lieu = $lieu;
    }
    
    function getIdarbitre() {
        return $this->idarbitre;
    }

    function setIdarbitre($idarbitre) {
        $this->idarbitre = $idarbitre;
    }




    
    
    
    
    
    
    
    

    
    
    
    
    

    
    
    
    
    
    
    
    
    
}
