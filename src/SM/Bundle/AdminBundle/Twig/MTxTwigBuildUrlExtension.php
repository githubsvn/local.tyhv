<?php

namespace SM\Bundle\AdminBundle\Twig;
use SM\Bundle\AdminBundle\Utilities\Helper;

/**
 * Twig extendsion for media popup
 */
class MTxTwigBuildUrlExtension extends \Twig_Extension
{

    private $environment;

    /**
     * Return name of extendsion
     *
     * @return string Name of extendsion
     */
    public function getName()
    {
        return 'mtx.twig.build_url';
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
            'mtxbuildurl' => new \Twig_Function_Method($this, 'buildUrl'),
        );
    }

    /**
     * 
     */
    public function buildUrl($id, $productName)
    {
        $url = '';
        if (!empty($id) && !empty($productName)) {
            $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
            
            $niceUrl = $container->getParameter('ext_nice_url');
            $commaUrl = $container->getParameter('comma_nice_url');
            $string = Helper::cleanString($productName);
            $string = str_replace(' ', $commaUrl, $string);
            $url = $string . "$commaUrl$id.$niceUrl";
        }
        
        return $url;
    }
}