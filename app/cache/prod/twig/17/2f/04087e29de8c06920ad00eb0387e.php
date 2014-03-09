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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "arrImgs"));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 2
            echo "    ";
            if (($this->getContext($context, "img") != "")) {
                // line 3
                echo "        <div style=\"width: 100px; height: 100px; float: bottom\">
            <img width=\"100px;\" height=\"100px;\" src=\"";
                // line 4
                echo twig_escape_filter($this->env, (($this->getContext($context, "imgPath") . "/") . $this->getContext($context, "img")), "html", null, true);
                echo "\" />
            <div style=\"width: 300px;\">
                <input type=\"checkbox\" value=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getContext($context, "img"), "html", null, true);
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
        return array (  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  390 => 150,  386 => 149,  382 => 148,  376 => 144,  370 => 143,  368 => 142,  364 => 140,  358 => 136,  352 => 134,  346 => 132,  344 => 131,  340 => 130,  335 => 128,  329 => 124,  323 => 122,  317 => 120,  315 => 119,  311 => 118,  306 => 116,  300 => 112,  294 => 110,  288 => 108,  286 => 107,  282 => 106,  277 => 104,  274 => 103,  272 => 102,  269 => 101,  263 => 99,  257 => 97,  254 => 96,  248 => 95,  245 => 94,  242 => 93,  239 => 92,  234 => 91,  231 => 90,  226 => 89,  224 => 88,  220 => 86,  214 => 85,  211 => 84,  203 => 82,  195 => 80,  192 => 79,  187 => 78,  185 => 77,  173 => 69,  171 => 68,  167 => 67,  163 => 66,  157 => 63,  149 => 58,  139 => 51,  135 => 50,  130 => 48,  122 => 43,  118 => 42,  113 => 40,  105 => 35,  101 => 34,  96 => 32,  88 => 27,  84 => 26,  79 => 24,  71 => 19,  67 => 18,  62 => 16,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
