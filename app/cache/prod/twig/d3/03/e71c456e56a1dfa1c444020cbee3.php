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
        return array (  72 => 18,  62 => 14,  56 => 13,  47 => 11,  38 => 8,  33 => 6,  30 => 5,  25 => 4,  68 => 23,  66 => 22,  58 => 17,  54 => 16,  50 => 12,  41 => 9,  35 => 7,  26 => 4,  19 => 1,  39 => 2,  27 => 3,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 84,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 66,  125 => 59,  123 => 58,  117 => 54,  115 => 53,  110 => 50,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 40,  88 => 37,  86 => 36,  77 => 29,  75 => 28,  63 => 19,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 11,  36 => 10,  29 => 8,  20 => 1,  31 => 4,  28 => 5,);
    }
}
