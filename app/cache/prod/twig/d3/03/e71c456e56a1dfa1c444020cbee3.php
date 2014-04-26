<?php

/* SMFrontBundle:Default:top-menu.html.twig */
class __TwigTemplate_d303e71c456e56a1dfa1c444020cbee3 extends Twig_Template
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
        echo "<nav>
<ul>
    ";
        // line 3
        $context["i"] = 0;
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuTop"]) ? $context["menuTop"] : $this->getContext($context, "menuTop")));
        foreach ($context['_seq'] as $context["_key"] => $context["mnu"]) {
            // line 5
            echo "        
        ";
            // line 6
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 7
            echo "        ";
            $context["last"] = "";
            // line 8
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["menuTop"]) ? $context["menuTop"] : $this->getContext($context, "menuTop"))) == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 9
                echo "            ";
                $context["last"] = "last";
                // line 10
                echo "        ";
            }
            // line 11
            echo "        
        <li class=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('mtx.twig.active_menu_extension')->getActiveMenu($this->getAttribute((isset($context["mnu"]) ? $context["mnu"] : $this->getContext($context, "mnu")), "url"), (isset($context["currentUrl"]) ? $context["currentUrl"] : $this->getContext($context, "currentUrl"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, ((isset($context["urlHost"]) ? $context["urlHost"] : $this->getContext($context, "urlHost")) . $this->getAttribute((isset($context["mnu"]) ? $context["mnu"] : $this->getContext($context, "mnu")), "url")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mnu"]) ? $context["mnu"] : $this->getContext($context, "mnu")), "name"), "html", null, true);
            echo "\">
                <span><span>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mnu"]) ? $context["mnu"] : $this->getContext($context, "mnu")), "name"), "html", null, true);
            echo "</span></span>
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mnu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:top-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  56 => 13,  47 => 11,  33 => 6,  30 => 5,  25 => 4,  66 => 22,  58 => 17,  50 => 12,  41 => 9,  28 => 5,  26 => 4,  19 => 1,  39 => 2,  27 => 3,  23 => 3,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 44,  99 => 43,  94 => 40,  92 => 39,  85 => 35,  75 => 28,  63 => 19,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 11,  36 => 10,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 34,  110 => 33,  100 => 29,  95 => 26,  87 => 36,  79 => 22,  77 => 29,  68 => 23,  62 => 14,  59 => 15,  54 => 16,  52 => 13,  43 => 7,  38 => 8,  35 => 7,  29 => 8,);
    }
}
