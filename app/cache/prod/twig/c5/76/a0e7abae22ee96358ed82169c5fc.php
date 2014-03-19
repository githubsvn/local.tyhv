<?php

/* SMFrontBundle:Default:slide.html.twig */
class __TwigTemplate_c576a0e7abae22ee96358ed82169c5fc extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 2
            echo "    <article class=\"banner\">          \t
        <ul class=\"slides\">
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 5
                echo "    <li><a href=\"#\" title=\"\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "getName"))), "html", null, true);
                echo "\" alt=\"Banner\" width=\"779\" height=\"210\"/></a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        </ul>
    </article>
";
        }
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  43 => 10,  61 => 13,  120 => 33,  113 => 31,  101 => 27,  97 => 26,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 16,  65 => 17,  55 => 13,  51 => 12,  42 => 16,  24 => 2,  21 => 2,  60 => 15,  37 => 8,  34 => 6,  22 => 2,  72 => 18,  62 => 16,  56 => 24,  47 => 11,  38 => 7,  33 => 6,  30 => 5,  25 => 4,  68 => 23,  66 => 22,  58 => 17,  54 => 10,  50 => 10,  41 => 9,  35 => 12,  26 => 4,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 84,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 66,  125 => 59,  123 => 34,  117 => 54,  115 => 53,  110 => 30,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 25,  88 => 24,  86 => 36,  77 => 29,  75 => 28,  63 => 28,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 7,  36 => 7,  29 => 5,  20 => 1,  31 => 4,  28 => 8,);
    }
}
