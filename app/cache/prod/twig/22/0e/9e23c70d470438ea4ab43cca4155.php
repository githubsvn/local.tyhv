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
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 6
                echo "            ";
                if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage")))) {
                    // line 7
                    echo "                ";
                    $context["mnu"] = (((isset($context["urlHost"]) ? $context["urlHost"] : $this->getContext($context, "urlHost")) . "/product/view-branch/1/") . $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getName")));
                    // line 8
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('mtx.twig.active_menu_extension')->getActiveMenu((isset($context["mnu"]) ? $context["mnu"] : $this->getContext($context, "mnu")), (isset($context["currentUrl"]) ? $context["currentUrl"] : $this->getContext($context, "currentUrl"))), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["urlHost"]) ? $context["urlHost"] : $this->getContext($context, "urlHost")), "html", null, true);
                    echo "/product/view-branch/1/";
                    echo twig_escape_filter($this->env, $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getName")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getName"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getName"), "html", null, true);
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
        return array (  60 => 11,  37 => 7,  34 => 6,  22 => 2,  72 => 18,  56 => 13,  47 => 11,  33 => 6,  30 => 5,  25 => 4,  66 => 22,  58 => 17,  50 => 12,  41 => 9,  28 => 5,  26 => 4,  19 => 1,  39 => 2,  27 => 4,  23 => 3,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 44,  99 => 43,  94 => 40,  92 => 39,  85 => 35,  75 => 28,  63 => 12,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 8,  36 => 10,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 34,  110 => 33,  100 => 29,  95 => 26,  87 => 36,  79 => 22,  77 => 29,  68 => 23,  62 => 14,  59 => 15,  54 => 10,  52 => 13,  43 => 7,  38 => 8,  35 => 7,  29 => 5,);
    }
}
