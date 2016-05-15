<?php

namespace Proxies\__CG__\TFT\personneBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \TFT\personneBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'nom', 'competencearbitre', 'autorisation', 'experiencearbitre', 'specialitemedecin', 'competencedopage', 'numerocartebanquaire', 'pwdcartebanquaire', 'solde', 'rangjoueur', 'CIN', 'Age', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'locked', 'expired', 'expiresAt', 'roles', 'credentialsExpired', 'credentialsExpireAt'];
        }

        return ['__isInitialized__', 'id', 'nom', 'competencearbitre', 'autorisation', 'experiencearbitre', 'specialitemedecin', 'competencedopage', 'numerocartebanquaire', 'pwdcartebanquaire', 'solde', 'rangjoueur', 'CIN', 'Age', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'locked', 'expired', 'expiresAt', 'roles', 'credentialsExpired', 'credentialsExpireAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getExpuser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpuser', []);

        return parent::getExpuser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCatuser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCatuser', []);

        return parent::getCatuser();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpuser($expuser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpuser', [$expuser]);

        return parent::setExpuser($expuser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCatuser($catuser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCatuser', [$catuser]);

        return parent::setCatuser($catuser);
    }

    /**
     * {@inheritDoc}
     */
    public function getExp_user()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExp_user', []);

        return parent::getExp_user();
    }

    /**
     * {@inheritDoc}
     */
    public function getCat_user()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCat_user', []);

        return parent::getCat_user();
    }

    /**
     * {@inheritDoc}
     */
    public function setExp_user($exp_user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExp_user', [$exp_user]);

        return parent::setExp_user($exp_user);
    }

    /**
     * {@inheritDoc}
     */
    public function setCat_user($cat_user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCat_user', [$cat_user]);

        return parent::setCat_user($cat_user);
    }

    /**
     * {@inheritDoc}
     */
    public function getCIN()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCIN', []);

        return parent::getCIN();
    }

    /**
     * {@inheritDoc}
     */
    public function getAge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAge', []);

        return parent::getAge();
    }

    /**
     * {@inheritDoc}
     */
    public function setCIN($CIN)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCIN', [$CIN]);

        return parent::setCIN($CIN);
    }

    /**
     * {@inheritDoc}
     */
    public function setAge($Age)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAge', [$Age]);

        return parent::setAge($Age);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function getCompetencearbitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompetencearbitre', []);

        return parent::getCompetencearbitre();
    }

    /**
     * {@inheritDoc}
     */
    public function getExperiencearbitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperiencearbitre', []);

        return parent::getExperiencearbitre();
    }

    /**
     * {@inheritDoc}
     */
    public function getRangclub()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRangclub', []);

        return parent::getRangclub();
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialitemedecin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialitemedecin', []);

        return parent::getSpecialitemedecin();
    }

    /**
     * {@inheritDoc}
     */
    public function getCompetencedopage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompetencedopage', []);

        return parent::getCompetencedopage();
    }

    /**
     * {@inheritDoc}
     */
    public function getNumerocartebanquaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumerocartebanquaire', []);

        return parent::getNumerocartebanquaire();
    }

    /**
     * {@inheritDoc}
     */
    public function getPwdcartebanquaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPwdcartebanquaire', []);

        return parent::getPwdcartebanquaire();
    }

    /**
     * {@inheritDoc}
     */
    public function getSolde()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolde', []);

        return parent::getSolde();
    }

    /**
     * {@inheritDoc}
     */
    public function getRangjoueur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRangjoueur', []);

        return parent::getRangjoueur();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function setCompetencearbitre($competencearbitre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompetencearbitre', [$competencearbitre]);

        return parent::setCompetencearbitre($competencearbitre);
    }

    /**
     * {@inheritDoc}
     */
    public function setExperiencearbitre($experiencearbitre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExperiencearbitre', [$experiencearbitre]);

        return parent::setExperiencearbitre($experiencearbitre);
    }

    /**
     * {@inheritDoc}
     */
    public function setRangclub($rangclub)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRangclub', [$rangclub]);

        return parent::setRangclub($rangclub);
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialitemedecin($specialitemedecin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialitemedecin', [$specialitemedecin]);

        return parent::setSpecialitemedecin($specialitemedecin);
    }

    /**
     * {@inheritDoc}
     */
    public function setCompetencedopage($competencedopage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompetencedopage', [$competencedopage]);

        return parent::setCompetencedopage($competencedopage);
    }

    /**
     * {@inheritDoc}
     */
    public function setNumerocartebanquaire($numerocartebanquaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumerocartebanquaire', [$numerocartebanquaire]);

        return parent::setNumerocartebanquaire($numerocartebanquaire);
    }

    /**
     * {@inheritDoc}
     */
    public function setPwdcartebanquaire($pwdcartebanquaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPwdcartebanquaire', [$pwdcartebanquaire]);

        return parent::setPwdcartebanquaire($pwdcartebanquaire);
    }

    /**
     * {@inheritDoc}
     */
    public function setSolde($solde)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSolde', [$solde]);

        return parent::setSolde($solde);
    }

    /**
     * {@inheritDoc}
     */
    public function setRangjoueur($rangjoueur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRangjoueur', [$rangjoueur]);

        return parent::setRangjoueur($rangjoueur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutorisation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutorisation', []);

        return parent::getAutorisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setAutorisation($autorisation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAutorisation', [$autorisation]);

        return parent::setAutorisation($autorisation);
    }

    /**
     * {@inheritDoc}
     */
    public function addRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', [$role]);

        return parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameCanonical', []);

        return parent::getUsernameCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCanonical', []);

        return parent::getEmailCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', []);

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$role]);

        return parent::hasRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsExpired', []);

        return parent::isCredentialsExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isExpired', []);

        return parent::isExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLocked', []);

        return parent::isLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuperAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuperAdmin', []);

        return parent::isSuperAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', [$role]);

        return parent::removeRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical($usernameCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsernameCanonical', [$usernameCanonical]);

        return parent::setUsernameCanonical($usernameCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpireAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpireAt', [$date]);

        return parent::setCredentialsExpireAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpired($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpired', [$boolean]);

        return parent::setCredentialsExpired($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical($emailCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCanonical', [$emailCanonical]);

        return parent::setEmailCanonical($emailCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$boolean]);

        return parent::setEnabled($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setExpired($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpired', [$boolean]);

        return parent::setExpired($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setExpiresAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpiresAt', [$date]);

        return parent::setExpiresAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperAdmin($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuperAdmin', [$boolean]);

        return parent::setSuperAdmin($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$password]);

        return parent::setPlainPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$time]);

        return parent::setLastLogin($time);
    }

    /**
     * {@inheritDoc}
     */
    public function setLocked($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocked', [$boolean]);

        return parent::setLocked($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($confirmationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', [$confirmationToken]);

        return parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', [$date]);

        return parent::setPasswordRequestedAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', []);

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired($ttl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordRequestNonExpired', [$ttl]);

        return parent::isPasswordRequestNonExpired($ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNames', []);

        return parent::getGroupNames();
    }

    /**
     * {@inheritDoc}
     */
    public function hasGroup($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGroup', [$name]);

        return parent::hasGroup($name);
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
