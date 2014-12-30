<?php

namespace theBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\MaxLength;

class contactType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom', null, array('label' => 'Votre nom'));
        $builder->add('prenom', null, array('label' => 'Votre prénom'));
        $builder->add('email', 'email', array('label' => 'Votre email'));
        $builder->add('sujet', 'text', array('label' => 'Sujet du message'));
        $builder->add('corps', 'textarea', array('label' => 'Votre message'));
    }

    public function getName() {
        return 'contact';
    }

//    public static function loadValidatorMetadata(ClassMetadata $metadata) {
//        $metadata->addPropertyConstraint('nom', new NotBlank(array(
//    'message' => 'Veuillez entrer votre nom')));
//
//        $metadata->addPropertyConstraint('email', new Email(array(
//    'message' => 'Veuillez entrer un email valide')));
//
//        $metadata->addPropertyConstraint('sujet', new NotBlank(array(
//    'message' => 'Veuillez entrer un sujet à votre message')));
//        $metadata->addPropertyConstraint('sujet', new MaxLength(50));
//
//        $metadata->addPropertyConstraint('corps', new MinLength(50));
//    }

}
