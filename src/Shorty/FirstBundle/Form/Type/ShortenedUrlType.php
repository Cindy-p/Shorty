<?php

namespace Shorty\FirstBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ShortenedUrlType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ancienne_url', 'text',array('label' => 'Ancienne URL','attr' => array('class' => '', 'placeholder' => "Entrez l'ancienne URL")));
        $builder->add('nouvelle_url', 'text',array('label' => 'Nouvelle URL','attr' => array('class' => '', 'placeholder' => "Entrez la nouvelle URL")));
        $builder->add('valider', 'submit',array('attr' => array('class' => 'btn btn-default')));
    }

    public function getName()
    {
        return 'createur_url';
    }

}