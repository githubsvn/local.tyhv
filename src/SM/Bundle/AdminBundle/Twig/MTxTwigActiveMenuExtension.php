<?php

namespace SM\Bundle\AdminBundle\Twig;
use SM\Bundle\AdminBundle\Utilities\Helper;

/**
 * Twig extendsion for media popup
 */
class MTxTwigActiveMenuExtension extends \Twig_Extension
{

    private $environment;

    /**
     * Return name of extendsion
     *
     * @return string Name of extendsion
     */
    public function getName()
    {
        return 'mtx.twig.active_menu_extension';
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
            'mtxactivemenu' => new \Twig_Function_Method($this, 'getActiveMenu'),
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
    public function getActiveMenu($menu, $currentMenu)
    {
        $menu = Helper::getLastUrlFromUrl($menu);
        if (empty($menu)) {
            $menu = '/';
        }
        $currentMenu = Helper::getLastUrlFromUrl($currentMenu);
        if ($menu == $currentMenu) {
            return 'active';
        }
        return '';
    }
}