<?php

/* SMFrontBundle:Default:list-comment.html.twig */
class __TwigTemplate_2dc294d4c610bef0f65a4a5861b4d509 extends Twig_Template
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
        echo "<div class=\"view-comments\">
  <h3>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Comment of custommer", array(), "SMFrontBundle"), "html", null, true);
        echo "</h3>
  <ul>
      ";
        // line 4
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 6
                echo "            <li>
                <div class=\"heading-1\">
                  <div class=\"star\">
                    <img src=\"/web/front/images/star-active.png\" alt=\"\" />
                    <img src=\"/web/front/images/star-active.png\" alt=\"\" />
                    <img src=\"/web/front/images/star-active.png\" alt=\"\" />
                    <img src=\"/web/front/images/star-active.png\" alt=\"\" />
                    <img src=\"/web/front/images/star.png\" alt=\"\" />
                  </div>
                  <h4>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "title"), "html", null, true);
                echo "</h4>
                </div>
                <h5>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), "html", null, true);
                echo " <span class=\"time\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "comment"), "getUpdatedAt"), "m/d/Y"), "html", null, true);
                echo "</span></h5>
                <div class=\"desc\">
                  <p>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "content"), "html", null, true);
                echo "</p>
                </div>
              </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      ";
        }
        // line 24
        echo "  </ul>
</div>
    
    ";
        // line 27
        if (((isset($context["totalPage"]) ? $context["totalPage"] : $this->getContext($context, "totalPage")) > (isset($context["perPage"]) ? $context["perPage"] : $this->getContext($context, "perPage")))) {
            // line 28
            echo "        <div class=\"paging\">
            <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page", array(), "SMFrontBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["totalPage"]) ? $context["totalPage"] : $this->getContext($context, "totalPage")), "html", null, true);
            echo "</span>
            <ul>
                <li class=\"prev-btn\"><a class=\"wi-icon wi-icon-10\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_list_comment", array("page" => (isset($context["previousPage"]) ? $context["previousPage"] : $this->getContext($context, "previousPage")))), "html", null, true);
            echo "\" title=\"<<\"><<</a></li>
                ";
            // line 32
            $context["start"] = (((isset($context["startPageOfCurrentRange"]) ? $context["startPageOfCurrentRange"] : $this->getContext($context, "startPageOfCurrentRange")) + (isset($context["perPage"]) ? $context["perPage"] : $this->getContext($context, "perPage"))) - 1);
            // line 33
            echo "                ";
            $context["classActive"] = "";
            // line 34
            echo "                ";
            $context["style"] = "";
            // line 35
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["startPageOfCurrentRange"]) ? $context["startPageOfCurrentRange"] : $this->getContext($context, "startPageOfCurrentRange")), (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "                    ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                    // line 37
                    echo "                        ";
                    $context["classActive"] = "active";
                    // line 38
                    echo "                    ";
                } else {
                    // line 39
                    echo "                        ";
                    $context["classActive"] = "";
                    // line 40
                    echo "                    ";
                }
                // line 41
                echo "
                    ";
                // line 42
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) <= (isset($context["totalPage"]) ? $context["totalPage"] : $this->getContext($context, "totalPage")))) {
                    // line 43
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, (isset($context["classActive"]) ? $context["classActive"] : $this->getContext($context, "classActive")), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_list_comment", array("page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 45
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                <li class=\"next-btn\"><a class=\"wi-icon wi-icon-11\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_list_comment", array("page" => (isset($context["nextPage"]) ? $context["nextPage"] : $this->getContext($context, "nextPage")))), "html", null, true);
            echo "\" title=\">>\">>></a></li>
            </ul>
        </div>
    ";
        }
        // line 50
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:list-comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  142 => 46,  126 => 43,  121 => 41,  118 => 40,  112 => 38,  98 => 34,  95 => 33,  93 => 32,  89 => 31,  80 => 29,  70 => 24,  50 => 17,  45 => 15,  34 => 6,  27 => 4,  22 => 2,  96 => 55,  72 => 37,  52 => 20,  46 => 17,  39 => 13,  28 => 5,  23 => 3,  19 => 1,  217 => 64,  190 => 92,  185 => 90,  177 => 88,  161 => 81,  156 => 79,  151 => 76,  149 => 75,  145 => 73,  143 => 72,  132 => 64,  124 => 42,  122 => 57,  116 => 53,  114 => 52,  107 => 48,  101 => 35,  99 => 43,  92 => 39,  87 => 49,  85 => 35,  77 => 28,  75 => 27,  63 => 19,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  31 => 9,  20 => 1,  287 => 98,  284 => 97,  277 => 95,  271 => 92,  264 => 90,  256 => 88,  250 => 85,  243 => 83,  235 => 81,  233 => 80,  230 => 79,  225 => 78,  223 => 77,  209 => 99,  205 => 98,  198 => 94,  196 => 65,  194 => 93,  187 => 59,  181 => 89,  175 => 54,  173 => 87,  167 => 84,  164 => 48,  158 => 80,  152 => 45,  144 => 43,  141 => 42,  136 => 45,  134 => 65,  131 => 39,  125 => 37,  117 => 35,  115 => 39,  109 => 37,  106 => 36,  100 => 56,  94 => 40,  84 => 24,  81 => 23,  76 => 22,  73 => 21,  67 => 23,  57 => 19,  55 => 16,  43 => 7,  38 => 4,  35 => 3,  29 => 5,);
    }
}
