<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SM\Bundle\AdminBundle\Repository\ProductsRepository;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('products', 'entity', array(
                'required' => true,
                'class' => 'SMAdminBundle:Products',
                'query_builder' => function (ProductsRepository $pRe) {
                    return $pRe->createQueryBuilder('c')
                        ->orderBy('c.id', 'ASC')
                        ->where('c.status = 1');
                }
            ))
            ->add('status', 'checkbox', array(
                'required' => false
            ))
            ->add('comment_languages', 'collection', array('type' => new CommentLanguageType()))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\AdminBundle\Entity\Comment'
        ));
    }

    public function getName()
    {
        return 'sm_bundle_adminbundle_commenttype';
    }
}
