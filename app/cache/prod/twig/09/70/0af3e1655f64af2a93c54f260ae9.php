<?php

/* SMAdminBundle:Default:menu.html.twig */
class __TwigTemplate_09700af3e1655f64af2a93c54f260ae9 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["gkey"] => $context["group"]) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, $this->getContext($context, "group")) > 0)) {
                // line 3
                echo "    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 4
                echo twig_escape_filter($this->env, $this->getContext($context, "gkey"), "html", null, true);
                echo "<span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            ";
                // line 6
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "group"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 7
                    echo "            <li>
                <a href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "action"), 1, array(), "array")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "item"), "label"), array(), "SMAdminBundle"), "html", null, true);
                    echo "</a>
            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        </ul>
    </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['gkey'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 52,  290 => 51,  284 => 36,  280 => 35,  276 => 34,  272 => 33,  268 => 32,  258 => 25,  254 => 24,  240 => 13,  235 => 12,  232 => 11,  226 => 5,  217 => 152,  215 => 145,  204 => 137,  200 => 136,  191 => 130,  184 => 121,  180 => 119,  175 => 117,  173 => 104,  165 => 100,  159 => 98,  156 => 97,  153 => 96,  133 => 93,  125 => 91,  104 => 89,  101 => 88,  96 => 86,  93 => 85,  91 => 80,  82 => 73,  79 => 72,  74 => 66,  71 => 65,  68 => 54,  66 => 51,  51 => 39,  48 => 38,  46 => 11,  37 => 5,  223 => 85,  216 => 81,  211 => 80,  205 => 79,  197 => 77,  189 => 75,  186 => 127,  182 => 73,  178 => 118,  174 => 71,  170 => 103,  168 => 68,  162 => 63,  150 => 59,  143 => 57,  139 => 95,  135 => 53,  131 => 51,  129 => 50,  122 => 90,  117 => 46,  110 => 44,  106 => 43,  103 => 42,  99 => 87,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  76 => 67,  63 => 25,  56 => 23,  50 => 20,  31 => 1,  28 => 2,);
    }
}
