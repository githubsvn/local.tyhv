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
        return array (  63 => 12,  60 => 11,  54 => 10,  40 => 8,  37 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
