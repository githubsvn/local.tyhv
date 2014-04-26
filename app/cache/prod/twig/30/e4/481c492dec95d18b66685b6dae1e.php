<?php

/* SMFrontBundle:Default:advertisement.html.twig */
class __TwigTemplate_30e4481c492dec95d18b66685b6dae1e extends Twig_Template
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
        echo "<div class=\"block advertise-block\">
<h2 class=\"title-1\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Advertisement", array(), "SMFrontBundle"), "html", null, true);
        echo "</h2>
<ul>
    ";
        // line 4
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 6
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "getLink"), "html", null, true);
                echo "\" title=\"\" target=\"_blank\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "getName"))), "html", null, true);
                echo "\" alt=\"\" width=\"190\" height=\"130\"/></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:advertisement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  45 => 8,  78 => 26,  71 => 22,  64 => 18,  61 => 13,  123 => 34,  120 => 33,  97 => 26,  93 => 25,  88 => 24,  82 => 22,  76 => 20,  73 => 19,  70 => 19,  65 => 16,  55 => 13,  51 => 12,  42 => 7,  24 => 4,  21 => 2,  60 => 15,  37 => 7,  34 => 6,  22 => 2,  72 => 18,  56 => 12,  47 => 11,  33 => 6,  30 => 9,  25 => 4,  66 => 22,  58 => 17,  50 => 10,  41 => 9,  28 => 8,  26 => 4,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 27,  99 => 43,  94 => 40,  92 => 34,  85 => 30,  75 => 28,  63 => 12,  57 => 14,  53 => 15,  48 => 9,  44 => 12,  40 => 7,  36 => 6,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 31,  110 => 30,  100 => 29,  95 => 26,  87 => 36,  79 => 21,  77 => 29,  68 => 23,  62 => 16,  59 => 14,  54 => 12,  52 => 13,  43 => 10,  38 => 11,  35 => 10,  29 => 5,);
    }
}
