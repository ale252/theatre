<?php

namespace theBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CartType extends AbstractType {

    private $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('plus', 'submit', array('attr' => array('class' => 'boutonRondPlus')));
        $builder->add('moins', 'submit', array('attr' => array('class' => 'boutonRondMoins')));
        $builder->add('effacer', 'submit', array('attr' => array('class' => 'boutonEffacer')));
        
    }

    public function getName() {
        return $this->text;
    }

}