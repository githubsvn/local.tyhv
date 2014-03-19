<?php

/* SMAdminBundle:Default:index.html.twig */
class __TwigTemplate_3a91960814fc2fcd5e79308333469432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"span6\" style=\"margin: 0 auto; float: none\">
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["gkey"] => $context["group"]) {
            // line 6
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["group"]) ? $context["group"] : $this->getContext($context, "group"))) > 0)) {
                // line 7
                echo "    <table class=\"table table-bordered table-striped sonata-ba-list\">
        <thead>
            <tr>
                <th colspan=\"3\">";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["gkey"]) ? $context["gkey"] : $this->getContext($context, "gkey")), "html", null, true);
                echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 15
                    echo "            <tr>
                <td>";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"), array(), "SMAdminBundle"), "html", null, true);
                    echo "</td>
                <td style=\"width: 25%; text-align: center;\">
                    <a class=\"btn\" href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "action"), 0, array(), "array")), "html", null, true);
                    echo "\">
                        <i class=\"icon-plus\"></i> ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add new", array(), "SMAdminBundle"), "html", null, true);
                    echo "
                    </a>
                </td>
                <td style=\"width: 20%; text-align: center;\">
                    <a class=\"btn\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "action"), 1, array(), "array")), "html", null, true);
                    echo "\">
                        <i class=\"icon-list\"></i> ";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("List", array(), "SMAdminBundle"), "html", null, true);
                    echo "
                    </a>
                </td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "        </tbody>
    </table>
        ";
            }
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['gkey'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  96 => 32,  91 => 29,  80 => 24,  76 => 23,  69 => 19,  65 => 18,  60 => 16,  57 => 15,  53 => 14,  46 => 10,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
