<?php

namespace SM\Bundle\AdminBundle\Twig;
use SM\Bundle\AdminBundle\Utilities\Helper;

/**
 * Twig extendsion for media popup
 */
class MTxTwigTeaserExtension extends \Twig_Extension
{

    private $environment;

    /**
     * Return name of extendsion
     *
     * @return string Name of extendsion
     */
    public function getName()
    {
        return 'mtx.twig.teaser_extension';
    }

    /**
     * Init environment
     *
     * @param \Twig_Environment $environment
     */
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }
    
    /**
     * Get Functions
     *
     * @return type
     */
    public function getFunctions()
    {
        return array(
            'mtxgetteaser' => new \Twig_Function_Method($this, 'getTeaser'),
        );
    }

    /**
     * Generate options for render new template
     *
     * @param type $optMedias      $selectedMedias
     * @param type $selectedMedias $selectedMedias
     * @param type $selectName     $selectedMedias
     * @param type $multiple       $selectedMedias
     * @param type $required       $selectedMedias
     * @param type $mediaPath      $selectedMedias
     *
     * @return type
     */
    public function getTeaser($string, $wordCount = 100)
    {
        return Helper::getTeaser($string, $wordCount);
    }
}