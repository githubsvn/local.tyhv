<?php

/* SMAdminBundle::layout.login.html.twig */
class __TwigTemplate_b8f2c8c5d408e0496677ef668c51a3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.login.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::admin.login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::layout.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  49 => 11,  43 => 8,  40 => 7,  38 => 6,  31 => 3,  28 => 2,);
    }
}
