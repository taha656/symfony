<?php

namespace TFT\personneBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**

* @ORM\Entity

* @ORM\Table(name="utilisateurs")

*/


class User extends BaseUser

{

 /**

 * @ORM\Id

 * @ORM\Column(type="integer")

 * @ORM\GeneratedValue(strategy="AUTO")

 */

 protected $id;

/**

*

* @ORM\Column(type="string", length=255,  nullable=true)

* 

*/

protected $nom;


  
/**

*

* @ORM\Column(type="string", length=255, nullable=true)

* 

*/

protected $competencearbitre;




  
/**

*

* @ORM\Column(type="string", length=255, nullable=true)

* 

*/

protected $autorisation;

/**

*

* @ORM\Column(type="string", length=255, nullable=true)

* 

*/

protected $experiencearbitre;

  


/**

*

* @ORM\Column(type="string", length=255, nullable=true)

* 

*/

    
protected $specialitemedecin;
     
/**

*

* @ORM\Column(type="string", length=255, nullable=true)

* 

*/

protected $competencedopage;

/**

*

* @ORM\Column(type="integer", nullable=true)

* 

*/

protected  $numerocartebanquaire;

   
  
/**

*

* @ORM\Column(type="string", length=255,  nullable=true)

* 

*/

protected $pwdcartebanquaire;
/**

*

* @ORM\Column(type="integer", nullable=true)

* 

*/

protected $solde;


     
/**

*

* @ORM\Column(type="integer", nullable=true)

* 

*/

protected $rangjoueur;

     
/**

*

* @ORM\Column(type="integer", nullable=true)

* 

*/

protected $CIN;
     
/**

*

* @ORM\Column(type="integer", nullable=true)

* 

*/

protected $Age;





function getCIN() {
        return $this->CIN;
    }

    function getAge() {
        return $this->Age;
    }

    function setCIN($CIN) {
        $this->CIN = $CIN;
    }

    function setAge($Age) {
        $this->Ae = $Age;
    }

function getNom() {
    return $this->nom;
}

function getPrenom() {
    return $this->prenom;
}

function getCompetencearbitre() {
    return $this->competencearbitre;
}

function getExperiencearbitre() {
    return $this->experiencearbitre;
}

function getRangclub() {
    return $this->rangclub;
}

function getSpecialitemedecin() {
    return $this->specialitemedecin;
}

function getCompetencedopage() {
    return $this->competencedopage;
}

function getNumerocartebanquaire() {
    return $this->numerocartebanquaire;
}

function getPwdcartebanquaire() {
    return $this->pwdcartebanquaire;
}

function getSolde() {
    return $this->solde;
}

function getRangjoueur() {
    return $this->rangjoueur;
}

function setNom($nom) {
    $this->nom = $nom;
}

function setPrenom($prenom) {
    $this->prenom = $prenom;
}

function setCompetencearbitre($competencearbitre) {
    $this->competencearbitre = $competencearbitre;
}

function setExperiencearbitre($experiencearbitre) {
    $this->experiencearbitre = $experiencearbitre;
}

function setRangclub($rangclub) {
    $this->rangclub = $rangclub;
}

function setSpecialitemedecin($specialitemedecin) {
    $this->specialitemedecin = $specialitemedecin;
}

function setCompetencedopage($competencedopage) {
    $this->competencedopage = $competencedopage;
}

function setNumerocartebanquaire($numerocartebanquaire) {
    $this->numerocartebanquaire = $numerocartebanquaire;
}

function setPwdcartebanquaire($pwdcartebanquaire) {
    $this->pwdcartebanquaire = $pwdcartebanquaire;
}

function setSolde($solde) {
    $this->solde = $solde;
}

function setRangjoueur($rangjoueur) {
    $this->rangjoueur = $rangjoueur;
}

function getAutorisation() {
    return $this->autorisation;
}

function setAutorisation($autorisation) {
    $this->autorisation = $autorisation;
}

 
 public function __construct()

 {

 parent::__construct();

 // your own logic

 }

}

?>