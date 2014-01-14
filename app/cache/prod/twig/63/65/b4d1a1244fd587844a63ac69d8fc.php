<?php

/* SMAdminBundle::layout.html.twig */
class __TwigTemplate_6365b4d1a1244fd587844a63ac69d8fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  96 => 32,  91 => 29,  80 => 24,  76 => 23,  69 => 19,  65 => 18,  60 => 16,  57 => 15,  53 => 14,  46 => 10,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
