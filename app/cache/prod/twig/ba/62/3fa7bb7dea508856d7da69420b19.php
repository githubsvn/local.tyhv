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
        return array (  61 => 13,  123 => 34,  120 => 33,  113 => 31,  110 => 30,  101 => 27,  97 => 26,  88 => 24,  85 => 23,  79 => 21,  76 => 20,  73 => 19,  65 => 17,  42 => 8,  36 => 7,  24 => 3,  21 => 2,  63 => 12,  40 => 7,  37 => 8,  34 => 7,  29 => 5,  27 => 4,  22 => 2,  72 => 18,  62 => 16,  56 => 12,  44 => 10,  38 => 8,  33 => 6,  25 => 4,  23 => 3,  68 => 23,  66 => 22,  58 => 17,  54 => 10,  50 => 10,  41 => 9,  35 => 7,  26 => 4,  19 => 1,  251 => 77,  243 => 129,  239 => 128,  233 => 125,  229 => 124,  225 => 123,  221 => 122,  215 => 119,  209 => 116,  201 => 110,  199 => 109,  195 => 107,  193 => 106,  183 => 98,  181 => 97,  176 => 94,  174 => 93,  169 => 90,  167 => 89,  158 => 82,  156 => 81,  151 => 78,  149 => 77,  143 => 73,  141 => 72,  132 => 65,  130 => 64,  124 => 60,  122 => 59,  117 => 56,  115 => 55,  109 => 51,  107 => 50,  102 => 47,  100 => 46,  95 => 43,  93 => 25,  84 => 35,  82 => 22,  70 => 16,  64 => 22,  60 => 15,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 8,  30 => 5,  20 => 1,  31 => 3,  28 => 5,);
    }
}
