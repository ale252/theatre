<?php

// src/Acme/UserBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     *  )
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=255)
     *
     *  )
     */
    protected $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     *
     *  )
     */
    protected $adresse;

    /**
     * @ORM\Column(type="integer")
     *
     *  )
     */
    protected $npa;

    /**
     * @ORM\Column(type="string", length=255)
     *
     *  )
     */
    protected $localite;

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Nom
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set prénom
     *
     * @param string $prenom
     * @return Prénom
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Adresse
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get npa
     *
     * @return string 
     */
    public function getNpa() {
        return $this->npa;
    }

    /**
     * Set npa
     *
     * @param string $npa
     * @return NPA
     */
    public function setNpa($npa) {
        $this->npa = $npa;

        return $this;
    }

    /**
     * Get localite
     *
     * @return string 
     */
    public function getLocalite() {
        return $this->localite;
    }

    /**
     * Set localite
     *
     * @param string $localite
     * @return localite
     */
    public function setLocalite($localite) {
        $this->localite = $localite;

        return $this;
    }

    public function __construct() {
        parent::__construct();
        // your own logic
    }

}
