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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menuBottom"));
        foreach ($context['_seq'] as $context["_key"] => $context["mnu"]) {
            // line 3
            echo "
    ";
            // line 4
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 5
            echo "    ";
            $context["last"] = "";
            // line 6
            echo "    ";
            if ((twig_length_filter($this->env, $this->getContext($context, "menuBottom")) == $this->getContext($context, "i"))) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('mtx.twig.active_menu_extension')->getActiveMenu($this->getAttribute($this->getContext($context, "mnu"), "url"), $this->getContext($context, "currentUrl")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "last"), "html", null, true);
            echo "\">
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, ($this->getContext($context, "urlHost") . $this->getAttribute($this->getContext($context, "mnu"), "url")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "name"), "html", null, true);
            echo "\">
            <span><span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mnu"), "name"), "html", null, true);
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
        return array (  57 => 12,  51 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  28 => 4,  25 => 3,  21 => 2,  40 => 19,  38 => 18,  19 => 1,);
    }
}
