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
        if ((!(null === (isset($context["skypes"]) ? $context["skypes"] : $this->getContext($context, "skypes"))))) {
            // line 5
            echo "    <a href=\"skype:plugcreative?";
            echo twig_escape_filter($this->env, (isset($context["skypes"]) ? $context["skypes"] : $this->getContext($context, "skypes")), "html", null, true);
            echo "\" title=\"Skype\" class=\"btn-skype\">Skype</a>
  ";
        }
        // line 7
        echo "  ";
        if ((!(null === (isset($context["yahoos"]) ? $context["yahoos"] : $this->getContext($context, "yahoos"))))) {
            // line 8
            echo "    <a href=\"skype:plugcreative?";
            echo twig_escape_filter($this->env, (isset($context["yahoos"]) ? $context["yahoos"] : $this->getContext($context, "yahoos")), "html", null, true);
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
        return array (  43 => 10,  61 => 13,  120 => 33,  113 => 31,  101 => 27,  97 => 26,  82 => 22,  79 => 21,  76 => 20,  70 => 16,  65 => 17,  55 => 13,  51 => 12,  42 => 8,  24 => 3,  21 => 2,  37 => 8,  72 => 18,  62 => 16,  56 => 12,  50 => 10,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  25 => 4,  87 => 30,  85 => 23,  73 => 19,  69 => 22,  60 => 15,  54 => 10,  47 => 11,  45 => 11,  38 => 8,  34 => 7,  26 => 4,  22 => 2,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 84,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 66,  125 => 59,  123 => 34,  117 => 54,  115 => 53,  110 => 30,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 25,  88 => 24,  86 => 36,  77 => 24,  75 => 28,  63 => 12,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 7,  36 => 7,  29 => 5,  20 => 1,  31 => 4,  28 => 5,);
    }
}
