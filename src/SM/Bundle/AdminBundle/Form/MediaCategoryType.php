<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SM\Bundle\AdminBundle\Repository\MediaCategoryRepository;

class MediaCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parent', 'entity', array(
                'required' => false,
                'class' => 'SMAdminBundle:MediaCategory',
                'query_builder' => function (MediaCategoryRepository $pRe) {
                    return $pRe->createQueryBuilder('c')
                        ->orderBy('c.lft', 'ASC')
                        ->where('c.status = 1');
                }
            ))
            ->add('status', 'checkbox', array(
                'required' => false
            ))
            ->add('mediacategory_languages', 'collection', array('type' => new MediaCategoryLanguageType()))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\AdminBundle\Entity\MediaCategory'
        ));
    }

    public function getName()
    {
        return 'sm_bundle_adminbundle_mediacategorytype';
    }
}
