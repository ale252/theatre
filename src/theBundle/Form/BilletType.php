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
        $builder
                ->add('ajouterCont', 'submit', array('attr' => array('class' => 'btn btn-success')))
                ->add('ajouterRest', 'submit', array('attr' => array('class' => 'btn btn-success')))
                ->add('quant', 'choice', array(
                    'choices' => array(
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                        '10' => '10',
                        '11' => '11',
                        '12' => '12'
                    ),
                    'preferred_choices' => array('1'),
        ));
    }

    public function getName() {
        return $this->text;
    }

}
