<?php



namespace TFT\personneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
* 
* @ORM\Table()
* @ORM\Entity
*/

class image1 {
    
/**
* @var integer
*
* @ORM\Column(name="id", type="integer", nullable=false)
* @ORM\Id
* @ORM\GeneratedValue(strategy="IDENTITY")
*/
 private $id;
 
/**
* 
* 
* @ORM\Column(name="img", type="blob", nullable=false)
*/
 
 private $img;
 
/**
* @var string
*
* @ORM\Column(name="description", type="string", nullable=false)
*/
 
 private $description;
 
/**
* 
* @Assert\File(maxSize="6000000")
* 
*/
 private $file;
 
 function getId() {
     return $this->id;
 }

 function getImg() {
     return $this->img;
 }

 

 function getFile() {
     return $this->file;
 }

 function setId($id) {
     $this->id = $id;
 }

 function setImg($img) {
     $this->img = $img;
 }

 

 function setFile($file) {
     $this->file = $file;
 }
 
 function getDescription() {
     return $this->description;
 }

 function setDescription($description) {
     $this->description = $description;
 }




    
    
    
    
    
}
