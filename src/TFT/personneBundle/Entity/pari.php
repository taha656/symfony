<?php

namespace TFT\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * pari
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class pari {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbJoke", type="integer")
     */
    private $nbJoke;

    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="jeu")
     */
    public $idjeu;

    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="User")
     */
    private $idutilisateur;

    /**
     * Get id
     *
     * @return integer 
     */
    function getIdjeu() {
        return $this->idjeu;
    }

    function getIdutilisateur() {
        return $this->idutilisateur;
    }

    function getChoix1() {
        return $this->choix1;
    }

    function setIdjeu($idjeu) {
        $this->idjeu = $idjeu;
    }

    function setIdutilisateur($idutilisateur) {
        $this->idutilisateur = $idutilisateur;
    }

    function setChoix1($choix1) {
        $this->choix1 = $choix1;
    }

            
    
    /**
     * @var integer
     *
     * @ORM\Column(name="choix1", type="integer")
     */
    private $choix1;
        /**
     * @var integer
     *
     * @ORM\Column(name="choix2", type="integer")
     */
    private $choix2;
        /**
     * @var integer
     *
     * @ORM\Column(name="choix3", type="integer")
     */
    private $choix3;
        /**
     * @var integer
     *
     * @ORM\Column(name="choix4", type="integer")
     */
    private $choix4;
        /**
     * @var integer
     *
     * @ORM\Column(name="choix5", type="integer")
     */
    private $choix5;
        /**
     * @var integer
     *
     * @ORM\Column(name="choix6", type="integer")
     */
    private $choix6;
        /**
     * @var integer
     *
     * @ORM\Column(name="choix7", type="integer")
     */
    private $choix7;
        /**
     * @var integer
     *
     * @ORM\Column(name="choix8", type="integer")
     */
    private $choix8;
        /**
     * @var integer
     *
     * @ORM\Column(name="choix9", type="integer")
     */
    private $choix9;
        /**
     * @var integer
     *
     * @ORM\Column(name="choix10", type="integer")
     */
    private $choix10;
    function getChoix2() {
        return $this->choix2;
    }

    function getChoix3() {
        return $this->choix3;
    }

    function getChoix4() {
        return $this->choix4;
    }

    function getChoix5() {
        return $this->choix5;
    }

    function getChoix6() {
        return $this->choix6;
    }

    function getChoix7() {
        return $this->choix7;
    }

    function getChoix8() {
        return $this->choix8;
    }

    function getChoix9() {
        return $this->choix9;
    }

    function getChoix10() {
        return $this->choix10;
    }

    function setChoix2($choix2) {
        $this->choix2 = $choix2;
    }

    function setChoix3($choix3) {
        $this->choix3 = $choix3;
    }

    function setChoix4($choix4) {
        $this->choix4 = $choix4;
    }

    function setChoix5($choix5) {
        $this->choix5 = $choix5;
    }

    function setChoix6($choix6) {
        $this->choix6 = $choix6;
    }

    function setChoix7($choix7) {
        $this->choix7 = $choix7;
    }

    function setChoix8($choix8) {
        $this->choix8 = $choix8;
    }

    function setChoix9($choix9) {
        $this->choix9 = $choix9;
    }

    function setChoix10($choix10) {
        $this->choix10 = $choix10;
    }

        public function getId()
    {
        return $this->id;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return pari
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nbJoke
     *
     * @param integer $nbJoke
     * @return pari
     */
    public function setNbJoke($nbJoke)
    {
        $this->nbJoke = $nbJoke;

        return $this;
    }

    /**
     * Get nbJoke
     *
     * @return integer 
     */
    public function getNbJoke()
    {
        return $this->nbJoke;
    
   
}}
