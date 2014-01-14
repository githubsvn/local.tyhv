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
        return array (  72 => 18,  62 => 14,  56 => 13,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  33 => 6,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
