<?php

/* SMFrontBundle:Default:feedback.html.twig */
class __TwigTemplate_8ed47b8caa8a3592e333f503c8bbc197 extends Twig_Template
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
        echo "<a id=\"feedback\" title=\"Feedback\" class=\"feedback\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/img-feedback.png"), "html", null, true);
        echo "\" alt=\"Feedback\" />
</a>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:feedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,  248 => 77,  240 => 129,  236 => 128,  230 => 125,  226 => 124,  222 => 123,  218 => 122,  212 => 119,  206 => 116,  198 => 110,  196 => 109,  192 => 107,  190 => 106,  180 => 98,  178 => 97,  173 => 94,  171 => 93,  166 => 90,  164 => 89,  155 => 82,  153 => 81,  148 => 78,  146 => 77,  140 => 73,  138 => 72,  129 => 65,  127 => 64,  121 => 60,  119 => 59,  114 => 56,  112 => 55,  106 => 51,  104 => 50,  99 => 47,  97 => 46,  92 => 43,  90 => 42,  81 => 35,  79 => 34,  67 => 25,  61 => 22,  57 => 21,  52 => 19,  48 => 18,  44 => 17,  40 => 16,  36 => 15,  20 => 1,);
    }
}
