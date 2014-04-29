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
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["gkey"] => $context["group"]) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["group"]) ? $context["group"] : $this->getContext($context, "group"))) > 0)) {
                // line 3
                echo "    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 4
                echo twig_escape_filter($this->env, (isset($context["gkey"]) ? $context["gkey"] : $this->getContext($context, "gkey")), "html", null, true);
                echo "<span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            ";
                // line 6
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 7
                    echo "            <li>
                <a href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "action"), 1, array(), "array")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"), array(), "SMAdminBundle"), "html", null, true);
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
        return array (  52 => 11,  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  468 => 151,  464 => 150,  460 => 149,  456 => 148,  451 => 147,  448 => 146,  440 => 122,  437 => 121,  432 => 118,  428 => 116,  422 => 115,  419 => 114,  410 => 111,  405 => 110,  400 => 109,  397 => 108,  394 => 107,  391 => 106,  386 => 105,  383 => 104,  379 => 84,  373 => 82,  370 => 81,  367 => 80,  361 => 72,  357 => 71,  354 => 70,  351 => 69,  348 => 68,  345 => 67,  339 => 66,  329 => 61,  322 => 59,  313 => 57,  309 => 55,  306 => 54,  297 => 52,  294 => 51,  288 => 36,  284 => 35,  280 => 34,  276 => 33,  262 => 25,  258 => 24,  244 => 13,  239 => 12,  236 => 11,  221 => 153,  219 => 146,  208 => 138,  204 => 137,  200 => 136,  186 => 127,  184 => 121,  180 => 119,  175 => 117,  170 => 103,  165 => 100,  156 => 97,  153 => 96,  139 => 95,  133 => 93,  125 => 91,  122 => 90,  101 => 88,  99 => 87,  96 => 86,  93 => 85,  91 => 80,  79 => 72,  76 => 67,  71 => 65,  68 => 54,  66 => 51,  51 => 39,  48 => 38,  46 => 11,  37 => 5,  279 => 103,  272 => 32,  267 => 98,  261 => 97,  253 => 95,  245 => 93,  242 => 92,  238 => 91,  234 => 90,  230 => 5,  226 => 87,  224 => 86,  218 => 81,  206 => 77,  199 => 75,  195 => 73,  191 => 130,  187 => 69,  185 => 68,  178 => 118,  173 => 104,  166 => 62,  162 => 61,  159 => 98,  155 => 59,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  117 => 39,  113 => 38,  110 => 37,  104 => 89,  98 => 33,  89 => 32,  86 => 31,  82 => 73,  78 => 29,  74 => 66,  70 => 27,  62 => 24,  56 => 23,  50 => 20,  31 => 1,  28 => 2,);
    }
}
