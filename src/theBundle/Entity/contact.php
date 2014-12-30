<?php

// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace theBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\MaxLength;

class contact {

    protected $nom;
    protected $prenom;
    protected $email;
    protected $sujet;
    protected $corps;

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSujet() {
        return $this->sujet;
    }

    public function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    public function getCorps() {
        return $this->corps;
    }

    public function setCorps($corps) {
        $this->corps = $corps;
    }

//    public static function loadValidatorMetadata(ClassMetadata $metadata) {
//        $metadata->addPropertyConstraint('nom', new NotBlank());
//        $metadata->addPropertyConstraint('prenom', new NotBlank());
//
//        $metadata->addPropertyConstraint('email', new Email());
//
//        $metadata->addPropertyConstraint('sujet', new NotBlank());
////        $metadata->addPropertyConstraint('sujet', new MaxLength(50));
//
////        $metadata->addPropertyConstraint('corps', new MinLength(50));
//    }

}
