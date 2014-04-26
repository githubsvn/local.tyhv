<?php

namespace SM\Bundle\FrontBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

/**
 * locale listener class
 */
class ExceptionListener {

    public function onKernelException(GetResponseForExceptionEvent $event) {
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
        $templating = $container->get('templating');
        $message = $templating->render('SMFrontBundle:Default:error.html.twig', array());
        // You get the exception object from the received event
        // Customize your response object to display the exception details
        $response = new Response();
        $response->setContent($message);
        
        // Send the modified response object to the event
        $event->setResponse($response);
    }

}
