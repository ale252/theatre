<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace theBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ComiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder->add('contenu', 'genemu_tinymce', array('label' => 'Le contenur de la page:'));
        
    }

    public function getName()
    {
        return 'comite';
    }
}