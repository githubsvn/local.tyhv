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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menuTop"));
        foreach ($context['_seq'] as $context["_key"] => $context["mnu"]) {
            // line 5
            echo "        
        ";
            // line 6
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 7
            echo "        ";
            $context["last"] = "";
            // line 8
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "menuTop")) == $this->getContext($context, "i"))) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('mtx.twig.active_menu_extension')->getActiveMenu($this->getAttribute($this->getContext($context, "mnu"), "url"), $this->getContext($context, "currentUrl")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "last"), "html", null, true);
            echo "\">
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, ($this->getContext($context, "urlHost") . $this->getAttribute($this->getContext($context, "mnu"), "url")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "name"), "html", null, true);
            echo "\">
                <span><span>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "name"), "html", null, true);
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
        return array (  72 => 18,  62 => 14,  56 => 13,  44 => 10,  38 => 8,  33 => 6,  25 => 4,  23 => 3,  68 => 23,  66 => 22,  58 => 17,  54 => 16,  50 => 12,  41 => 9,  35 => 7,  26 => 4,  19 => 1,  251 => 77,  243 => 129,  239 => 128,  233 => 125,  229 => 124,  225 => 123,  221 => 122,  215 => 119,  209 => 116,  201 => 110,  199 => 109,  195 => 107,  193 => 106,  183 => 98,  181 => 97,  176 => 94,  174 => 93,  169 => 90,  167 => 89,  158 => 82,  156 => 81,  151 => 78,  149 => 77,  143 => 73,  141 => 72,  132 => 65,  130 => 64,  124 => 60,  122 => 59,  117 => 56,  115 => 55,  109 => 51,  107 => 50,  102 => 47,  100 => 46,  95 => 43,  93 => 42,  84 => 35,  82 => 34,  70 => 25,  64 => 22,  60 => 21,  55 => 19,  51 => 18,  47 => 11,  43 => 16,  39 => 15,  30 => 5,  20 => 1,  31 => 3,  28 => 5,);
    }
}
