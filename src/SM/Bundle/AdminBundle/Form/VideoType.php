<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', 'checkbox', array(
                'required' => false
            ))
            ->add('url', 'url', array(
                    'required' => false,
                    'data_class' => null
                ))
            ->add('video_languages', 'collection', array('type' => new VideoLanguageType()))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\AdminBundle\Entity\Video'
        ));
    }

    public function getName()
    {
        return 'sm_bundle_adminbundle_videotype';
    }
}
