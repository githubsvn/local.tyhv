<?php

/* SMFrontBundle:Default:support.html.twig */
class __TwigTemplate_ba623fa7bb7dea508856d7da69420b19 extends Twig_Template
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
        echo "<h2 class=\"title-1\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Support", array(), "SMFrontBundle"), "html", null, true);
        echo "</h2>
<div class=\"contact\">
  <img src=\"/web/front/images/img-contact.jpg\" alt=\"\" />
  ";
        // line 4
        if ((!(null === $this->getContext($context, "skypes")))) {
            // line 5
            echo "    <a href=\"skype:plugcreative?";
            echo twig_escape_filter($this->env, $this->getContext($context, "skypes"), "html", null, true);
            echo "\" title=\"Skype\" class=\"btn-skype\">Skype</a>
  ";
        }
        // line 7
        echo "  ";
        if ((!(null === $this->getContext($context, "yahoos")))) {
            // line 8
            echo "    <a href=\"skype:plugcreative?";
            echo twig_escape_filter($this->env, $this->getContext($context, "yahoos"), "html", null, true);
            echo "\" title=\"Yahoo\" class=\"btn-yahoo\">Yahoo</a>
  ";
        }
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  37 => 8,  34 => 7,  28 => 5,  26 => 4,  19 => 1,);
    }
}
