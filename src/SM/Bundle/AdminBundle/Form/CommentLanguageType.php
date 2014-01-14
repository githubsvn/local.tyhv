<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * page type controller
 */
class CommentLanguageType extends AbstractType
{
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder builder
     * @param array                                        $options options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', null, array('required' => false))
                ->add('name', null, array('required' => false))
                ->add('email', null, array('required' => false))
                ->add('content', 'textarea', array(
                    'attr' => array(
                        'rows'  => 10,
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
            'data_class' => 'SM\Bundle\AdminBundle\Entity\CommentLanguage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sm_bundle_adminbundle_commentlanguagetype';
    }
}
