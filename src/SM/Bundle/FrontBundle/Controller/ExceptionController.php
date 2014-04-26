<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;
use SM\Bundle\AdminBundle\Utilities\Helper;
use SM\Bundle\AdminBundle\Utilities\Utilities;

class ExceptionController extends Controller {
    
    public function showAction($page)
    {
        return $this->render('SMFrontBundle:Item:view-cat.html.twig', array(
            
        ));
        
    }
}