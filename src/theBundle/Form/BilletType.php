<?php

namespace theBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BilletType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('secteurA', 'submit', array('attr' => array(
                'class' => 'col-md-4 secteur btn btn-warning propover-options',
                'title' => '<h2>Title</h2>',
                'data-container' => "body",
                'data-toggle' => "popover",
                'data-placement' => "top",
                'data-content' => "<h4>Some content in Popover-options method</h4>"
            )
        ));
        $builder->add('secteurB', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurC', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurD', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurE', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurF', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurG', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurH', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurI', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurJ', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurK', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
        $builder->add('secteurL', 'submit', array('attr' => array('class' => 'col-md-4 secteur')));
    }

    public function getName() {
        return 'secteur';
    }

}
