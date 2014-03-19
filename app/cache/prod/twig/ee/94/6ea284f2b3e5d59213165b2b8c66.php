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
        return array (  39 => 2,  27 => 3,  23 => 2,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 84,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 66,  125 => 59,  123 => 58,  117 => 54,  115 => 53,  110 => 50,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 40,  88 => 37,  86 => 36,  77 => 29,  75 => 28,  63 => 19,  57 => 16,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  29 => 8,  20 => 1,  31 => 4,  28 => 2,);
    }
}
