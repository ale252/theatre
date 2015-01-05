<?php

namespace theBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * theBundle\Entity\Interet
 *
 * @ORM\Table(name="Interet")
 * @ORM\Entity
 */
class Interet {

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
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    public function getId() {
        return $this->id;
    }

   
    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu) {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu() {
        return $this->contenu;
    }

    
}
