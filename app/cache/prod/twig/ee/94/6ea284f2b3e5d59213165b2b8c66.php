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
        echo twig_escape_filter($this->env, (isset($context["metaDes"]) ? $context["metaDes"] : $this->getContext($context, "metaDes")), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["metaKeywords"]) ? $context["metaKeywords"] : $this->getContext($context, "metaKeywords")), "html", null, true);
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
        return array (  39 => 2,  27 => 3,  23 => 2,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 44,  99 => 43,  94 => 40,  92 => 39,  85 => 35,  75 => 28,  63 => 19,  57 => 16,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 34,  110 => 33,  100 => 29,  95 => 26,  87 => 36,  79 => 22,  77 => 29,  68 => 17,  62 => 16,  59 => 15,  54 => 14,  52 => 13,  43 => 7,  38 => 4,  35 => 3,  29 => 8,);
    }
}
