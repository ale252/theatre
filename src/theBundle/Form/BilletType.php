<?php

namespace theBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BilletType extends AbstractType {

    private $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('add', 'submit');
    }

    public function getName() {
        return $this->text;
    }

}