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
        return array (  37 => 7,  72 => 18,  62 => 14,  56 => 13,  50 => 12,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  25 => 4,  87 => 30,  85 => 29,  73 => 23,  69 => 22,  60 => 11,  54 => 10,  47 => 11,  45 => 11,  38 => 8,  34 => 6,  26 => 3,  22 => 2,  19 => 1,  39 => 2,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 84,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 66,  125 => 59,  123 => 58,  117 => 54,  115 => 53,  110 => 50,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 40,  88 => 37,  86 => 36,  77 => 24,  75 => 28,  63 => 12,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 8,  36 => 10,  29 => 5,  20 => 1,  31 => 4,  28 => 2,);
    }
}
