<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace theBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class contactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('email', 'email');
        $builder->add('sujet');
        $builder->add('corps', 'genemu_tinymce');
        $builder->add('envo', 'submit');
        
    }

    public function getName()
    {
        return 'contact';
    }
}