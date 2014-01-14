<?php

/* SMFrontBundle:Company:view-all.html.twig */
class __TwigTemplate_ddcaa7c21e9ff8a59d06b655fb9238dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMFrontBundle::layout.company.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMFrontBundle::layout.company.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logo Company", array(), "SMFrontBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logo Company", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
  </div>
</div>
    
<div class=\"thumbnails-1\">
  <ul>
      ";
        // line 13
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 14
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 15
                echo "            <li>
                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_company_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "company"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\">
                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_company_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "company"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\">
                    <span class=\"wi-frame wi-frame-1\">
                        <span>
                            <span>
                                ";
                // line 21
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "company"), "thumb") != "")) {
                    // line 22
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "company"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "\"/>
                                ";
                } else {
                    // line 24
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "\"/>
                                ";
                }
                // line 26
                echo "                            </span>
                        </span>
                    </span>
                    <h3>";
                // line 29
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                echo "</h3>
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "      ";
        } else {
            // line 34
            echo "            <div class=\"noProduct\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data was be found", array(), "SMFrontBundle"), "html", null, true);
            echo "</div>
      ";
        }
        // line 36
        echo "  </ul>
</div>
    
    ";
        // line 39
        if (($this->getContext($context, "totalPage") > 0)) {
            // line 40
            echo "        <div class=\"paging\">
            <span>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page", array(), "SMFrontBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "currentPage"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getContext($context, "totalPage"), "html", null, true);
            echo "</span>
            <ul>
                <li class=\"prev-btn\"><a class=\"wi-icon wi-icon-10\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_company_view_all", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\" title=\"<<\"><<</a></li>
                ";
            // line 44
            $context["start"] = (($this->getContext($context, "startPageOfCurrentRange") + $this->getContext($context, "perPage")) - 1);
            // line 45
            echo "                ";
            $context["classActive"] = "";
            // line 46
            echo "                ";
            $context["style"] = "";
            // line 47
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getContext($context, "startPageOfCurrentRange"), $this->getContext($context, "start")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 48
                echo "                    ";
                if (($this->getContext($context, "i") == $this->getContext($context, "currentPage"))) {
                    // line 49
                    echo "                        ";
                    $context["classActive"] = "active";
                    // line 50
                    echo "                    ";
                } else {
                    // line 51
                    echo "                        ";
                    $context["classActive"] = "";
                    // line 52
                    echo "                    ";
                }
                // line 53
                echo "
                    ";
                // line 54
                if (($this->getContext($context, "i") <= $this->getContext($context, "totalPage"))) {
                    // line 55
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "classActive"), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_company_view_all", array("page" => $this->getContext($context, "i"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 57
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                <li class=\"next-btn\"><a class=\"wi-icon wi-icon-11\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_company_view_all", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\" title=\">>\">>></a></li>
            </ul>
        </div>
    ";
        }
        // line 62
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Company:view-all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 53,  167 => 52,  164 => 51,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 46,  144 => 45,  142 => 44,  138 => 43,  129 => 41,  126 => 40,  124 => 39,  119 => 36,  113 => 34,  110 => 33,  100 => 29,  95 => 26,  87 => 24,  79 => 22,  77 => 21,  68 => 17,  62 => 16,  59 => 15,  54 => 14,  52 => 13,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
