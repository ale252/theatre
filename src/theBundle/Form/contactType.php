<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace theBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class contactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder->add('nom', null, array('label' => 'Votre nom:'));
        $builder->add('prenom', null, array('label' => 'Votre prénom:'));
        $builder->add('email', 'email', array('label' => 'Votre adresse email:'));
        $builder->add('sujet', null, array('label' => 'Sujet du message:'));
        $builder->add('corps', 'genemu_tinymce', array('label' => 'Message:'));
        
    }

    public function getName()
    {
        return 'contact';
    }
}