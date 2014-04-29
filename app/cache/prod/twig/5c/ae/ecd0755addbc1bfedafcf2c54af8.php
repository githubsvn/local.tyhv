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
        return array (  119 => 48,  107 => 38,  98 => 35,  67 => 21,  81 => 29,  89 => 32,  52 => 14,  46 => 13,  209 => 78,  206 => 77,  199 => 75,  191 => 70,  184 => 68,  179 => 66,  172 => 62,  168 => 61,  156 => 56,  148 => 51,  141 => 49,  127 => 43,  111 => 37,  109 => 36,  106 => 35,  99 => 33,  94 => 30,  83 => 30,  59 => 14,  49 => 13,  92 => 33,  78 => 26,  71 => 22,  64 => 18,  43 => 12,  61 => 18,  120 => 33,  113 => 31,  101 => 36,  97 => 26,  82 => 22,  79 => 23,  76 => 27,  70 => 19,  65 => 16,  55 => 14,  51 => 11,  42 => 9,  24 => 4,  21 => 2,  37 => 11,  72 => 18,  62 => 16,  56 => 12,  50 => 10,  41 => 9,  35 => 10,  33 => 6,  30 => 5,  25 => 3,  87 => 30,  85 => 30,  73 => 19,  69 => 22,  60 => 15,  54 => 12,  47 => 11,  45 => 10,  38 => 11,  34 => 6,  26 => 4,  22 => 2,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 60,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 51,  125 => 59,  123 => 49,  117 => 41,  115 => 53,  110 => 30,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 25,  88 => 24,  86 => 28,  77 => 24,  75 => 28,  63 => 12,  57 => 12,  53 => 15,  48 => 9,  44 => 12,  40 => 7,  36 => 7,  29 => 5,  20 => 1,  31 => 4,  28 => 4,);
    }
}
