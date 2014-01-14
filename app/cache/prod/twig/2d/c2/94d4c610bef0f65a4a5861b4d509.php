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
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
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
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ent"), "title"), "html", null, true);
                echo "</h4>
                </div>
                <h5>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ent"), "name"), "html", null, true);
                echo " <span class=\"time\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "comment"), "getUpdatedAt"), "m/d/Y"), "html", null, true);
                echo "</span></h5>
                <div class=\"desc\">
                  <p>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ent"), "content"), "html", null, true);
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
        if (($this->getContext($context, "totalPage") > $this->getContext($context, "perPage"))) {
            // line 28
            echo "        <div class=\"paging\">
            <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page", array(), "SMFrontBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "currentPage"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getContext($context, "totalPage"), "html", null, true);
            echo "</span>
            <ul>
                <li class=\"prev-btn\"><a class=\"wi-icon wi-icon-10\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_list_comment", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\" title=\"<<\"><<</a></li>
                ";
            // line 32
            $context["start"] = (($this->getContext($context, "startPageOfCurrentRange") + $this->getContext($context, "perPage")) - 1);
            // line 33
            echo "                ";
            $context["classActive"] = "";
            // line 34
            echo "                ";
            $context["style"] = "";
            // line 35
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getContext($context, "startPageOfCurrentRange"), $this->getContext($context, "start")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "                    ";
                if (($this->getContext($context, "i") == $this->getContext($context, "currentPage"))) {
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
                if (($this->getContext($context, "i") <= $this->getContext($context, "totalPage"))) {
                    // line 43
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "classActive"), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_list_comment", array("page" => $this->getContext($context, "i"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_list_comment", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
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
        return array (  150 => 50,  142 => 46,  136 => 45,  126 => 43,  124 => 42,  118 => 40,  115 => 39,  112 => 38,  109 => 37,  106 => 36,  101 => 35,  98 => 34,  95 => 33,  93 => 32,  89 => 31,  80 => 29,  77 => 28,  75 => 27,  70 => 24,  67 => 23,  50 => 17,  45 => 15,  34 => 6,  27 => 4,  22 => 2,  19 => 1,  283 => 98,  280 => 97,  273 => 95,  267 => 92,  260 => 90,  252 => 88,  246 => 85,  239 => 83,  231 => 81,  229 => 80,  226 => 79,  221 => 78,  219 => 77,  205 => 72,  201 => 71,  194 => 66,  192 => 65,  190 => 64,  183 => 59,  177 => 56,  171 => 54,  169 => 53,  163 => 49,  160 => 48,  154 => 47,  148 => 45,  140 => 43,  137 => 42,  132 => 41,  130 => 40,  127 => 39,  121 => 41,  113 => 35,  111 => 34,  105 => 30,  102 => 29,  96 => 28,  90 => 26,  82 => 24,  79 => 23,  74 => 22,  71 => 21,  65 => 19,  57 => 19,  55 => 16,  43 => 7,  38 => 4,  35 => 3,  29 => 5,);
    }
}
