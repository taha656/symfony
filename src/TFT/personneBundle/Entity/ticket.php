<?php

namespace TFT\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ticket
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ticket
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
     ** @ORM\ManyToOne(targetEntity="matches")
     */
    private $idmatches;

    function getIdmatches() {
        return $this->idmatches;
    }

    function setIdmatches($idmatches) {
        $this->idmatches = $idmatches;
    }

        
    /**
     * @var string
     *
     * @ORM\Column(name="joueurs", type="string", length=255,nullable=true)
     */
    private $joueurs;

    
    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer",nullable=true)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreTotal", type="integer",nullable=true)
     */
    private $nombreTotal;


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
     * Set joueurs
     *
     * @param string $joueurs
     * @return ticket
     */
    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }

    /**
     * Get joueurs
     *
     * @return string 
     */
    public function getJoueurs()
    {
        return $this->joueurs;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return ticket
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
     * Set nombreTotal
     *
     * @param integer $nombreTotal
     * @return ticket
     */
    public function setNombreTotal($nombreTotal)
    {
        $this->nombreTotal = $nombreTotal;

        return $this;
    }

    /**
     * Get nombreTotal
     *
     * @return integer 
     */
    public function getNombreTotal()
    {
        return $this->nombreTotal;
    }
}
