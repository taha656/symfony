<?php

namespace TFT\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * stade
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class stade
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDeTerrain", type="string", length=255)
     */
    private $typeDeTerrain;

    /**
     * @var integer
     *
     * @ORM\Column(name="surface", type="integer")
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob")
     */
    private $image;


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
     * Set nom
     *
     * @param string $nom
     * @return stade
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     * @return stade
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set typeDeTerrain
     *
     * @param string $typeDeTerrain
     * @return stade
     */
    public function setTypeDeTerrain($typeDeTerrain)
    {
        $this->typeDeTerrain = $typeDeTerrain;

        return $this;
    }

    /**
     * Get typeDeTerrain
     *
     * @return string 
     */
    public function getTypeDeTerrain()
    {
        return $this->typeDeTerrain;
    }

    /**
     * Set surface
     *
     * @param integer $surface
     * @return stade
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return integer 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return stade
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}
