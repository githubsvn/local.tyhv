<?php

/* SMFrontBundle:Default:error.html.twig */
class __TwigTemplate_a66cd657c497023fd769c78a63423836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <title>Toi yeu hang viet</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8 \" />
        <meta name=\"description\" content=\"chipquang\" />
        <meta name=\"keywords\" content=\"\" />
    </head>
    <body style=\"background: #FFFFFF;\">
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Oops! An Error Occurred", array(), "SMFrontBundle"), "html", null, true);
        echo "</h1>
        <div>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Something is broken. Please e-mail us at info@toiyeuhangviet.vn and let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.", array(), "SMFrontBundle"), "html", null, true);
        echo "
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  30 => 10,  19 => 1,);
    }
}
