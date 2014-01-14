<?php

/* SMFrontBundle:News:view-cat.html.twig */
class __TwigTemplate_d77396481b196af46a6a2835e7d63d8b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News", array(), "SMFrontBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
  </div>
</div>
    
<div class=\"highlight\">
";
        // line 12
        if ((!(null === $this->getContext($context, "topEnt")))) {
            // line 13
            echo "    <article>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "topEnt"), "news"), "id"), $this->getAttribute($this->getContext($context, "topEnt"), "name")))), "html", null, true);
            echo "\" title=\"\" class=\"img-thumb\">
            <span>
                ";
            // line 16
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "topEnt"), "news"), "image") != "")) {
                // line 17
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "dir") . $this->getAttribute($this->getAttribute($this->getContext($context, "topEnt"), "news"), "image"))), "html", null, true);
                echo "\" alt=\"\" class=\"sizeNewsImage\" width=\"250\" height=\"196\"/>
                ";
            } else {
                // line 19
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                echo "\" alt=\"#\" width=\"250\" height=\"196\"/>
                ";
            }
            // line 21
            echo "            </span>
        </a>
        <div class=\"content\">
          <h3><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_news_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "topEnt"), "news"), "id"), $this->getAttribute($this->getContext($context, "topEnt"), "name")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topEnt"), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topEnt"), "name"), "html", null, true);
            echo "</a></h3>
          <div class=\"desc\">
            <p>";
            // line 26
            echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "topEnt"), "description"));
            echo "</p>
          </div>
        </div>
    </article>
";
        }
        // line 31
        echo "</div>
    
<div class=\"thumbnails\">
  <ul>
      ";
        // line 35
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 36
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 37
                echo "            <li>
                ";
                // line 38
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "news"), "image") != "")) {
                    // line 39
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_news_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "news"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "\">
                         <span>
                             <img src=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "news"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitleList"));
                    echo "\"/>
                         </span>
                        <strong class=\"title\">
                            ";
                    // line 44
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitleList"));
                    echo "
                        </strong>
                    </a>
                ";
                } else {
                    // line 48
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_news_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "news"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "\">
                         <span>
                            <img src=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"157\" height=\"104\"/>
                         </span>
                        <strong class=\"title\">
                            ";
                    // line 53
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitleList"));
                    echo "
                        </strong>
                    </a>
                ";
                }
                // line 57
                echo "            </li> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "      ";
        } else {
            // line 60
            echo "            <div class=\"noProduct\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data was be found", array(), "SMFrontBundle"), "html", null, true);
            echo "</div>
      ";
        }
        // line 62
        echo "  </ul>
</div>
    
    ";
        // line 65
        if (($this->getContext($context, "totalPage") > 0)) {
            // line 66
            echo "        <div class=\"paging\">
            <span>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page", array(), "SMFrontBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "currentPage"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getContext($context, "totalPage"), "html", null, true);
            echo "</span>
            <ul>
                <li class=\"prev-btn\"><a class=\"wi-icon wi-icon-10\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_news_cat", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "category"), "category"), "id"), $this->getAttribute($this->getContext($context, "category"), "name")), "page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\" title=\"<<\"><<</a></li>
                ";
            // line 70
            $context["start"] = (($this->getContext($context, "startPageOfCurrentRange") + $this->getContext($context, "perPage")) - 1);
            // line 71
            echo "                ";
            $context["classActive"] = "";
            // line 72
            echo "                ";
            $context["style"] = "";
            // line 73
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getContext($context, "startPageOfCurrentRange"), $this->getContext($context, "start")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 74
                echo "                    ";
                if (($this->getContext($context, "i") == $this->getContext($context, "currentPage"))) {
                    // line 75
                    echo "                        ";
                    $context["classActive"] = "active";
                    // line 76
                    echo "                    ";
                } else {
                    // line 77
                    echo "                        ";
                    $context["classActive"] = "";
                    // line 78
                    echo "                    ";
                }
                // line 79
                echo "
                    ";
                // line 80
                if (($this->getContext($context, "i") <= $this->getContext($context, "totalPage"))) {
                    // line 81
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "classActive"), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_news_cat", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "category"), "category"), "id"), $this->getAttribute($this->getContext($context, "category"), "name")), "page" => $this->getContext($context, "i"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 83
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                <li class=\"next-btn\"><a class=\"wi-icon wi-icon-11\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_news_cat", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "category"), "category"), "id"), $this->getAttribute($this->getContext($context, "category"), "name")), "page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\" title=\">>\">>></a></li>
            </ul>
        </div>
    ";
        }
        // line 88
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:News:view-cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 88,  247 => 84,  241 => 83,  231 => 81,  229 => 80,  226 => 79,  223 => 78,  220 => 77,  217 => 76,  214 => 75,  211 => 74,  206 => 73,  203 => 72,  200 => 71,  198 => 70,  194 => 69,  185 => 67,  182 => 66,  180 => 65,  175 => 62,  169 => 60,  166 => 59,  159 => 57,  152 => 53,  146 => 50,  138 => 48,  131 => 44,  123 => 41,  115 => 39,  113 => 38,  110 => 37,  105 => 36,  103 => 35,  97 => 31,  89 => 26,  80 => 24,  75 => 21,  69 => 19,  63 => 17,  61 => 16,  56 => 14,  53 => 13,  51 => 12,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
