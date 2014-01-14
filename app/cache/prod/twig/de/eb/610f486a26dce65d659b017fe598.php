<?php

/* SMFrontBundle:Item:view-cat.html.twig */
class __TwigTemplate_deeb610f486a26dce65d659b017fe598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMFrontBundle::layout.news.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMFrontBundle::layout.news.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Market price", array(), "SMFrontBundle"), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"block\">
    <div class=\"title-2\">
      <div class=\"inner\">
        <h2><span><span>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Market price", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
      </div>
    </div>
  <div class=\"price-block\">
        <div class=\"price-content\">
            <table style=\"width: 100%;\">
                <tr>
                  <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Item", array(), "SMFrontBundle"), "html", null, true);
        echo "</th>
                  <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Old price", array(), "SMFrontBundle"), "html", null, true);
        echo "</th>
                  <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New price", array(), "SMFrontBundle"), "html", null, true);
        echo "</th>
                </tr>
                ";
        // line 18
        $context["i"] = 0;
        // line 19
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
            // line 20
            echo "                    ";
            $context["class"] = "style-1";
            // line 21
            echo "                    ";
            $context["c"] = ($this->getContext($context, "i") % 2);
            // line 22
            echo "                    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 23
            echo "                    ";
            if (($this->getContext($context, "c") == 0)) {
                // line 24
                echo "                        ";
                $context["class"] = "";
                // line 25
                echo "                    ";
            }
            // line 26
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
            echo "\">
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ent"), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ent"), "price"), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ent"), "oldprice"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </table>
        </div>
    </div>
    
    ";
        // line 36
        if (($this->getContext($context, "totalPage") > 0)) {
            // line 37
            echo "        <div class=\"paging\">
            <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page", array(), "SMFrontBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "currentPage"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getContext($context, "totalPage"), "html", null, true);
            echo "</span>
            <ul>
                <li class=\"prev-btn\"><a class=\"wi-icon wi-icon-10\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_item_view_all", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\" title=\"<<\"><<</a></li>
                ";
            // line 41
            $context["start"] = (($this->getContext($context, "startPageOfCurrentRange") + $this->getContext($context, "perPage")) - 1);
            // line 42
            echo "                ";
            $context["classActive"] = "";
            // line 43
            echo "                ";
            $context["style"] = "";
            // line 44
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getContext($context, "startPageOfCurrentRange"), $this->getContext($context, "start")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 45
                echo "                    ";
                if (($this->getContext($context, "i") == $this->getContext($context, "currentPage"))) {
                    // line 46
                    echo "                        ";
                    $context["classActive"] = "active";
                    // line 47
                    echo "                    ";
                } else {
                    // line 48
                    echo "                        ";
                    $context["classActive"] = "";
                    // line 49
                    echo "                    ";
                }
                // line 50
                echo "
                    ";
                // line 51
                if (($this->getContext($context, "i") <= $this->getContext($context, "totalPage"))) {
                    // line 52
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "classActive"), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_item_view_all", array("page" => $this->getContext($context, "i"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "<a></li>
                    ";
                }
                // line 54
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                <li class=\"next-btn\"><a class=\"wi-icon wi-icon-11\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_item_view_all", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\" title=\">>\">>></a></li>
            </ul>
        </div>
    ";
        }
        // line 59
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Item:view-cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 59,  186 => 55,  180 => 54,  170 => 52,  168 => 51,  165 => 50,  162 => 49,  159 => 48,  156 => 47,  153 => 46,  150 => 45,  145 => 44,  142 => 43,  139 => 42,  137 => 41,  133 => 40,  124 => 38,  121 => 37,  119 => 36,  113 => 32,  104 => 29,  100 => 28,  96 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  68 => 19,  66 => 18,  61 => 16,  57 => 15,  53 => 14,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
