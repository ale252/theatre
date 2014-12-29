<?php
namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('nom', null, array('label' => 'Votre nom:'));
        $builder->add('prenom', null, array('label' => 'Votre prénom:'));
        $builder->add('adresse', null, array('label' => 'Votre adresse:'));
        $builder->add('npa', 'text', array('label' => 'Votre code postal:'));
        $builder->add('localite', null, array('label' => 'Votre localité:'));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'acme_user_registration';
    }
}