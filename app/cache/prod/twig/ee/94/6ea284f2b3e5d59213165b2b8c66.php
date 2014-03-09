<?php

/* SMFrontBundle:Default:meta.html.twig */
class __TwigTemplate_ee946ea284f2b3e5d59213165b2b8c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"utf-8\">
<title>";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "metaDes"), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "metaKeywords"), "html", null, true);
        echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"author\" content=\"\">
<meta name=\"viewport\" content=\"width=1300\">";
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Toi Yeu Hang Viet", array(), "SMFrontBundle"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  31 => 4,  27 => 3,  23 => 2,  20 => 1,);
    }
}
