<?php

/* SMAdminBundle:Twig:showimg.html.twig */
class __TwigTemplate_172f04087e29de8c06920ad00eb0387e extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrImgs"]) ? $context["arrImgs"] : $this->getContext($context, "arrImgs")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 2
            echo "    ";
            if (((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")) != "")) {
                // line 3
                echo "        <div style=\"width: 100px; height: 100px; float: bottom\">
            <img width=\"100px;\" height=\"100px;\" src=\"";
                // line 4
                echo twig_escape_filter($this->env, (((isset($context["imgPath"]) ? $context["imgPath"] : $this->getContext($context, "imgPath")) . "/") . (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img"))), "html", null, true);
                echo "\" />
            <div style=\"width: 300px;\">
                <input type=\"checkbox\" value=\"";
                // line 6
                echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
                echo "\" name=\"delImgs[]\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Checked if you want to delete this image", array(), "SMAdminBundle"), "html", null, true);
                echo "
            </div>
        </div>
        <div style=\"clear: both;\"></div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Twig:showimg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  406 => 154,  402 => 153,  398 => 152,  392 => 148,  386 => 147,  384 => 146,  380 => 144,  375 => 141,  369 => 139,  363 => 137,  361 => 136,  357 => 135,  352 => 133,  347 => 130,  341 => 128,  335 => 126,  333 => 125,  329 => 124,  324 => 122,  319 => 119,  313 => 117,  307 => 115,  305 => 114,  301 => 113,  296 => 111,  290 => 107,  284 => 105,  278 => 103,  276 => 102,  272 => 101,  267 => 99,  264 => 98,  262 => 97,  259 => 96,  253 => 94,  247 => 92,  244 => 91,  238 => 90,  235 => 89,  232 => 88,  229 => 87,  224 => 86,  221 => 85,  216 => 84,  214 => 83,  210 => 81,  204 => 80,  201 => 79,  193 => 77,  185 => 75,  182 => 74,  177 => 73,  175 => 72,  165 => 65,  161 => 64,  156 => 62,  148 => 57,  138 => 50,  134 => 49,  129 => 47,  121 => 42,  117 => 41,  112 => 39,  105 => 35,  101 => 34,  96 => 32,  88 => 27,  84 => 26,  79 => 24,  71 => 19,  67 => 18,  62 => 16,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
