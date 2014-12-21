<?php

namespace theBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteurs
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="theBundle\Entity\placesRepository")
 */
class Secteurs
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
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;
    /**
     * @var string
     *
     * @ORM\Column(name="secteur", type="string")
     */
    private $secteurs;


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
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
    /**
     * Set secteurs
     *
     * @param string $secteur
     * @return secteurs
     */
    public function setSecteurs($secteurs)
    {
        $this->secteurs = $secteurs;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getsecteurs()
    {
        return $this->secteurs;
    }
}
