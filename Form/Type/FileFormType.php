<?php

/*
 * This file is part of the Engage360d Feedback Bundle
 *
 * (c) Aliocha Ryzhkov <alioch@yandex.ru>
 */

namespace Engage360d\Bundle\FileBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'file')
            ->add('Upload', 'submit')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Engage360d\Bundle\FileBundle\Entity\File',
        ));
    }

    public function getName()
    {
        return 'engage360d_file';
    }
}
