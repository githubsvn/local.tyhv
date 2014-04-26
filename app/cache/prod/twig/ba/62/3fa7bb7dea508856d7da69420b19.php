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
        return array (  61 => 13,  123 => 34,  120 => 33,  97 => 26,  93 => 25,  88 => 24,  82 => 22,  76 => 20,  73 => 19,  70 => 16,  65 => 17,  55 => 13,  51 => 12,  42 => 8,  24 => 3,  21 => 2,  60 => 15,  37 => 8,  34 => 7,  22 => 2,  72 => 18,  56 => 12,  47 => 11,  33 => 6,  30 => 5,  25 => 4,  66 => 22,  58 => 17,  50 => 10,  41 => 9,  28 => 5,  26 => 4,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 27,  99 => 43,  94 => 40,  92 => 39,  85 => 23,  75 => 28,  63 => 12,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 7,  36 => 7,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 31,  110 => 30,  100 => 29,  95 => 26,  87 => 36,  79 => 21,  77 => 29,  68 => 23,  62 => 16,  59 => 15,  54 => 10,  52 => 13,  43 => 10,  38 => 8,  35 => 7,  29 => 5,);
    }
}
