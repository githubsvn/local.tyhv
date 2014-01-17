<?php

/* SMFrontBundle:Default:left-menu.html.twig */
class __TwigTemplate_220e9e23c70d470438ea4ab43cca4155 extends Twig_Template
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
<h2 class=\"title-1\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Product", array(), "SMFrontBundle"), "html", null, true);
        echo "</h2>
<ul>
    ";
        // line 4
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 6
                echo "            ";
                if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                    // line 7
                    echo "                ";
                    $context["mnu"] = (($this->getContext($context, "urlHost") . "/product/view-branch/1/") . $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getContext($context, "entity"), "id"), $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getName")));
                    // line 8
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('mtx.twig.active_menu_extension')->getActiveMenu($this->getContext($context, "mnu"), $this->getContext($context, "currentUrl")), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "urlHost"), "html", null, true);
                    echo "/product/view-branch/1/";
                    echo twig_escape_filter($this->env, $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getContext($context, "entity"), "id"), $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getName")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getName"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getName"), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 10
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        // line 12
        echo "</ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:left-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  40 => 8,  37 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  72 => 18,  62 => 14,  56 => 13,  44 => 10,  38 => 8,  33 => 6,  25 => 4,  23 => 3,  68 => 23,  66 => 22,  58 => 17,  54 => 10,  50 => 12,  41 => 9,  35 => 7,  26 => 4,  19 => 1,  251 => 77,  243 => 129,  239 => 128,  233 => 125,  229 => 124,  225 => 123,  221 => 122,  215 => 119,  209 => 116,  201 => 110,  199 => 109,  195 => 107,  193 => 106,  183 => 98,  181 => 97,  176 => 94,  174 => 93,  169 => 90,  167 => 89,  158 => 82,  156 => 81,  151 => 78,  149 => 77,  143 => 73,  141 => 72,  132 => 65,  130 => 64,  124 => 60,  122 => 59,  117 => 56,  115 => 55,  109 => 51,  107 => 50,  102 => 47,  100 => 46,  95 => 43,  93 => 42,  84 => 35,  82 => 34,  70 => 25,  64 => 22,  60 => 11,  55 => 19,  51 => 18,  47 => 11,  43 => 16,  39 => 15,  30 => 5,  20 => 1,  31 => 3,  28 => 5,);
    }
}
