<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * page type controller
 */
class NewsLanguageType extends AbstractType
{
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder builder
     * @param array                                        $options options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', null, array('required' => false))
                ->add('intro', 'textarea', array(
                    'attr' => array(
                        'class' => 'tinymce',
                        'rows'  => 10,
                        'data-theme' => 'medium',
                    ),
                    'required' => false
                ))
                ->add('description', 'textarea', array(
                    'attr' => array(
                        'class' => 'tinymce',
                        'rows'  => 20,
                        'data-theme' => 'medium',
                    ),
                    'required' => false
                ));

    }

    /**
     * @param \Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\AdminBundle\Entity\NewsLanguage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sm_bundle_adminbundle_newslanguagetype';
    }
}
