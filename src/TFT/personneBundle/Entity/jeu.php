<?php
namespace TFT\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * jeu
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class jeu {
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
     * @ORM\Column(name="resultat", type="integer")
     */
    private $resultat;

    /**
     * @var integer
     *
     * @ORM\Column(name="cagnotte", type="integer")
     */
    private $cagnotte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbGagnant", type="integer")
     */
    private $nbGagnant;
    
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches1;
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches2; 
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches3; 
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches4; 
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches5; 
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches6; 
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches7; 
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches8; 
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches9;
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches10;
    
    
    


    /**
     * Get id
     *
     * @return integer 
     */function getIdmatches1() {
        return $this->idmatches1;
    }
    function getIdmatches2() {
        return $this->idmatches2;
    }

    function getIdmatches3() {
        return $this->idmatches3;
    }

    function getIdmatches4() {
        return $this->idmatches4;
    }

    function getIdmatches5() {
        return $this->idmatches5;
    }

    function getIdmatches6() {
        return $this->idmatches6;
    }

    function getIdmatches7() {
        return $this->idmatches7;
    }

    function getIdmatches8() {
        return $this->idmatches8;
    }

    function getIdmatches9() {
        return $this->idmatches9;
    }

    function getIdmatches10() {
        return $this->idmatches10;
    }

    function setIdmatches2($idmatches2) {
        $this->idmatches2 = $idmatches2;
    }

    function setIdmatches3($idmatches3) {
        $this->idmatches3 = $idmatches3;
    }

    function setIdmatches4($idmatches4) {
        $this->idmatches4 = $idmatches4;
    }

    function setIdmatches5($idmatches5) {
        $this->idmatches5 = $idmatches5;
    }

    function setIdmatches6($idmatches6) {
        $this->idmatches6 = $idmatches6;
    }

    function setIdmatches7($idmatches7) {
        $this->idmatches7 = $idmatches7;
    }

    function setIdmatches8($idmatches8) {
        $this->idmatches8 = $idmatches8;
    }

    function setIdmatches9($idmatches9) {
        $this->idmatches9 = $idmatches9;
    }

    function setIdmatches10($idmatches10) {
        $this->idmatches10 = $idmatches10;
    }

    
    function setIdmatches1($idmatches1) {
        $this->idmatches1 = $idmatches1;
    }


        public function getId()
    {
        return $this->id;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     * @return jeu
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }
    function setId($id) {
        $this->id = $id;
    }

        /**
     * Get resultat
     *
     * @return string 
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set cagnotte
     *
     * @param integer $cagnotte
     * @return jeu
     */
    public function setCagnotte($cagnotte)
    {
        $this->cagnotte = $cagnotte;

        return $this;
    }

    /**
     * Get cagnotte
     *
     * @return integer 
     */
    public function getCagnotte()
    {
        return $this->cagnotte;
    }

    /**
     * Set nbGagnant
     *
     * @param integer $nbGagnant
     * @return jeu
     */
    public function setNbGagnant($nbGagnant)
    {
        $this->nbGagnant = $nbGagnant;

        return $this;
    }

    /**
     * Get nbGagnant
     *
     * @return integer 
     */
    public function getNbGagnant()
    {
        return $this->nbGagnant;
    }
   
}
