<?php

/* SMFrontBundle:Default:footer-menu.html.twig */
class __TwigTemplate_5caeecd0755addbc1bfedafcf2c54af8 extends Twig_Template
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
        $context["i"] = 0;
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuBottom"]) ? $context["menuBottom"] : $this->getContext($context, "menuBottom")));
        foreach ($context['_seq'] as $context["_key"] => $context["mnu"]) {
            // line 3
            echo "
    ";
            // line 4
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 5
            echo "    ";
            $context["last"] = "";
            // line 6
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["menuBottom"]) ? $context["menuBottom"] : $this->getContext($context, "menuBottom"))) == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 7
                echo "        ";
                $context["last"] = "last";
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <li class=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('mtx.twig.active_menu_extension')->getActiveMenu($this->getAttribute((isset($context["mnu"]) ? $context["mnu"] : $this->getContext($context, "mnu")), "url"), (isset($context["currentUrl"]) ? $context["currentUrl"] : $this->getContext($context, "currentUrl"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "html", null, true);
            echo "\">
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, ((isset($context["urlHost"]) ? $context["urlHost"] : $this->getContext($context, "urlHost")) . $this->getAttribute((isset($context["mnu"]) ? $context["mnu"] : $this->getContext($context, "mnu")), "url")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mnu"]) ? $context["mnu"] : $this->getContext($context, "mnu")), "name"), "html", null, true);
            echo "\">
            <span><span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mnu"]) ? $context["mnu"] : $this->getContext($context, "mnu")), "name"), "html", null, true);
            echo "</span></span>
        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mnu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:footer-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  111 => 46,  90 => 33,  84 => 31,  81 => 30,  45 => 10,  78 => 26,  71 => 22,  64 => 18,  61 => 20,  123 => 34,  120 => 33,  97 => 26,  93 => 34,  88 => 24,  82 => 22,  76 => 20,  73 => 27,  70 => 19,  65 => 16,  55 => 13,  51 => 11,  42 => 9,  24 => 4,  21 => 2,  60 => 15,  37 => 7,  34 => 6,  22 => 2,  72 => 18,  56 => 12,  47 => 12,  33 => 6,  30 => 5,  25 => 3,  66 => 22,  58 => 17,  50 => 10,  41 => 11,  28 => 4,  26 => 4,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 27,  99 => 36,  94 => 40,  92 => 34,  85 => 30,  75 => 28,  63 => 12,  57 => 12,  53 => 15,  48 => 9,  44 => 12,  40 => 7,  36 => 7,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 49,  124 => 58,  119 => 36,  113 => 31,  110 => 30,  100 => 29,  95 => 26,  87 => 36,  79 => 21,  77 => 29,  68 => 25,  62 => 16,  59 => 19,  54 => 12,  52 => 13,  43 => 10,  38 => 11,  35 => 10,  29 => 9,);
    }
}
