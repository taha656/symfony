<?php

namespace TFT\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * resultat
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class resultat
{
    
    function getIdjoueur1() {
        return $this->idjoueur1;
    }

    function getIdjoueur2() {
        return $this->idjoueur2;
    }

    function setIdjoueur1($idjoueur1) {
        $this->idjoueur1 = $idjoueur1;
    }

    function setIdjoueur2($idjoueur2) {
        $this->idjoueur2 = $idjoueur2;
    }

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
     ** @ORM\ManyToOne(targetEntity="User")
     */
    private $idjoueur1;

    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="User")
     */
    private $idjoueur2;

    
    
    /**
     * @var string
     *
     * @ORM\Column(name="nomjoueur1", type="string", length=255,nullable=true)
     */
    private $nomjoueur1;

    /**
     * @var string
     *
     * @ORM\Column(name="nomjoueur2", type="string", length=255,nullable=true)
     */
    private $nomjoueur2;

    /**
     * @var integer
     *
     * @ORM\Column(name="set1joueur1", type="integer",nullable=true)
     */
    private $set1joueur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="set2joueur1", type="integer",nullable=true)
     */
    private $set2joueur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="set3joueur1", type="integer",nullable=true)
     */
    private $set3joueur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="set1joueur2", type="integer",nullable=true)
     */
    private $set1joueur2;

    /**
     * @var integer
     *
     * @ORM\Column(name="set2joueur2", type="integer",nullable=true)
     */
    private $set2joueur2;

    /**
     * @var integer
     *
     * @ORM\Column(name="set3joueur2", type="integer",nullable=true)
     */
    private $set3joueur2;

    /**
     * @var string
     *
     * @ORM\Column(name="gagnant", type="string", length=255,nullable=true)
     */
    private $gagnant;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomjoueur1
     *
     * @param string $nomjoueur1
     * @return resultat
     */
    public function setNomjoueur1($nomjoueur1)
    {
        $this->nomjoueur1 = $nomjoueur1;

        return $this;
    }

    /**
     * Get nomjoueur1
     *
     * @return string 
     */
    public function getNomjoueur1()
    {
        return $this->nomjoueur1;
    }

    /**
     * Set nomjoueur2
     *
     * @param string $nomjoueur2
     * @return resultat
     */
    public function setNomjoueur2($nomjoueur2)
    {
        $this->nomjoueur2 = $nomjoueur2;

        return $this;
    }

    /**
     * Get nomjoueur2
     *
     * @return string 
     */
    public function getNomjoueur2()
    {
        return $this->nomjoueur2;
    }

    /**
     * Set set1joueur1
     *
     * @param integer $set1joueur1
     * @return resultat
     */
    public function setSet1joueur1($set1joueur1)
    {
        $this->set1joueur1 = $set1joueur1;

        return $this;
    }

    /**
     * Get set1joueur1
     *
     * @return integer 
     */
    public function getSet1joueur1()
    {
        return $this->set1joueur1;
    }

    /**
     * Set set2joueur1
     *
     * @param integer $set2joueur1
     * @return resultat
     */
    public function setSet2joueur1($set2joueur1)
    {
        $this->set2joueur1 = $set2joueur1;

        return $this;
    }

    /**
     * Get set2joueur1
     *
     * @return integer 
     */
    public function getSet2joueur1()
    {
        return $this->set2joueur1;
    }

    /**
     * Set set3joueur1
     *
     * @param integer $set3joueur1
     * @return resultat
     */
    public function setSet3joueur1($set3joueur1)
    {
        $this->set3joueur1 = $set3joueur1;

        return $this;
    }

    /**
     * Get set3joueur1
     *
     * @return integer 
     */
    public function getSet3joueur1()
    {
        return $this->set3joueur1;
    }

    /**
     * Set set1joueur2
     *
     * @param integer $set1joueur2
     * @return resultat
     */
    public function setSet1joueur2($set1joueur2)
    {
        $this->set1joueur2 = $set1joueur2;

        return $this;
    }

    /**
     * Get set1joueur2
     *
     * @return integer 
     */
    public function getSet1joueur2()
    {
        return $this->set1joueur2;
    }

    /**
     * Set set2joueur2
     *
     * @param integer $set2joueur2
     * @return resultat
     */
    public function setSet2joueur2($set2joueur2)
    {
        $this->set2joueur2 = $set2joueur2;

        return $this;
    }

    /**
     * Get set2joueur2
     *
     * @return integer 
     */
    public function getSet2joueur2()
    {
        return $this->set2joueur2;
    }

    /**
     * Set set3joueur2
     *
     * @param integer $set3joueur2
     * @return resultat
     */
    public function setSet3joueur2($set3joueur2)
    {
        $this->set3joueur2 = $set3joueur2;

        return $this;
    }

    /**
     * Get set3joueur2
     *
     * @return integer 
     */
    public function getSet3joueur2()
    {
        return $this->set3joueur2;
    }

    /**
     * Set gagnant
     *
     * @param string $gagnant
     * @return resultat
     */
    public function setGagnant($gagnant)
    {
        $this->gagnant = $gagnant;

        return $this;
    }

    /**
     * Get gagnant
     *
     * @return string 
     */
    public function getGagnant()
    {
        return $this->gagnant;
    }
}
