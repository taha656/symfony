<?php

namespace TFT\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * matches
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class matches
{
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
    
    function getIdjoueur1() {
        return $this->idjoueur1;
    }

    function getIdjoueur2() {
        return $this->idjoueur2;
    }

    function getIdarbitre() {
        return $this->idarbitre;
    }

    function getIdStade() {
        return $this->idStade;
    }

    function setIdjoueur1($idjoueur1) {
        $this->idjoueur1 = $idjoueur1;
    }

    function setIdjoueur2($idjoueur2) {
        $this->idjoueur2 = $idjoueur2;
    }

    function setIdarbitre($idarbitre) {
        $this->idarbitre = $idarbitre;
    }

    function setIdStade($idStade) {
        $this->idStade = $idStade;
    }
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="User")
     */
    private $idarbitre;
    
    /**
     * @var integer
     *
     ** @ORM\ManyToOne(targetEntity="stade")
     */
    private $idStade;

    
    
    
    
    
    
    
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
     * @var string
     *
     * @ORM\Column(name="nomstade", type="string", length=255,nullable=true)
     */
    private $nomstade;

    /**
     * @var string
     *
     * @ORM\Column(name="types", type="string", length=255,nullable=true)
     */
    private $types;

    /**
     * @var string
     *
     * @ORM\Column(name="resultat", type="string", length=255,nullable=true)
     */
    private $resultat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_match", type="date",nullable=true)
     */
    private $dateMatch;

    /**
     * @var string
     *
     * @ORM\Column(name="nomarbitre", type="string", length=255,nullable=true)
     */
    private $nomarbitre;


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
     * @return matches
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
     * @return matches
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
     * Set nomstade
     *
     * @param string $nomstade
     * @return matches
     */
    public function setNomstade($nomstade)
    {
        $this->nomstade = $nomstade;

        return $this;
    }

    /**
     * Get nomstade
     *
     * @return string 
     */
    public function getNomstade()
    {
        return $this->nomstade;
    }

    /**
     * Set types
     *
     * @param string $types
     * @return matches
     */
    public function setTypes($types)
    {
        $this->types = $types;

        return $this;
    }

    /**
     * Get types
     *
     * @return string 
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     * @return matches
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
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
     * Set dateMatch
     *
     * @param \DateTime $dateMatch
     * @return matches
     */
    public function setDateMatch($dateMatch)
    {
        $this->dateMatch = $dateMatch;

        return $this;
    }

    /**
     * Get dateMatch
     *
     * @return \DateTime 
     */
    public function getDateMatch()
    {
        return $this->dateMatch;
    }

    /**
     * Set nomarbitre
     *
     * @param string $nomarbitre
     * @return matches
     */
    public function setNomarbitre($nomarbitre)
    {
        $this->nomarbitre = $nomarbitre;

        return $this;
    }

    /**
     * Get nomarbitre
     *
     * @return string 
     */
    public function getNomarbitre()
    {
        return $this->nomarbitre;
    }

    
    
    }
