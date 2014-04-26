<?php

/* SMFrontBundle:Product:view-cat.html.twig */
class __TwigTemplate_755876f77256b6ff0aeac787345bc861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMFrontBundle::layout.product.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMFrontBundle::layout.product.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "getName"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "getName"), "html", null, true);
        echo "</span></span></h2>
  </div>
</div>
    
<div class=\"highlight\">
";
        // line 12
        if ((!(null === (isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt"))))) {
            // line 13
            echo "    <article>
    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "product"), "id"), $this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "name")))), "html", null, true);
            echo "\" title=\"\" class=\"img-thumb\">
        <span>
        ";
            // line 16
            if (($this->getAttribute($this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "product"), "thumb") > 0)) {
                // line 17
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "product"), "thumb"))), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                echo "\" width=\"250\" height=\"196\"/>
            ";
            } else {
                // line 19
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                echo "\" alt=\"#\" width=\"250\" height=\"196\"/>
            ";
            }
            // line 21
            echo "        </span>
    </a>
    <div class=\"content\">
      <h3><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "product"), "id"), $this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "name")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "name"), "html", null, true);
            echo "</a></h3>
      <div class=\"desc\">
        <p>";
            // line 26
            echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "description"));
            echo "
<!--            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "product"), "id"), $this->getAttribute((isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")), "name")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View more", array(), "SMFrontBundle"), "html", null, true);
            echo "\">[...]</a>-->
            
        </p>
      </div>
    </div>
    </article>
";
        }
        // line 34
        echo "</div>
    
<div class=\"thumbnails\">
  <ul>
      ";
        // line 38
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 39
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 40
                echo "            <li>
                ";
                // line 41
                if (($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb") > 0)) {
                    // line 42
                    echo "                    <a href=\"javascript:void(0);\" 
                        class=\"img-thumb\"
                        data-html=\"true\"
                        data-toggle=\"popover\"
                        data-content=\"<img src='";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb"))), "html", null, true);
                    echo "' alt='";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "' width='370px'/>
                         <span class='title'>";
                    // line 47
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "</span>
                         <div class='content'>";
                    // line 48
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "description"));
                    echo "
                         </div>
                         <a class='close-btn' href='javascript:void(0);'></a>\">
                         <span>
                             <img src=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "\"/>
                         </span>
                        <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "id"), $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "\">
                            <strong class=\"title\">
                                ";
                    // line 56
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "
                            </strong>
                        </a>
                    </a>
                ";
                } else {
                    // line 61
                    echo "                    <a href=\"javascript:void(0);\" 
                        class=\"img-thumb\" 
                        data-html=\"true\" 
                        data-toggle=\"popover\" 
                        data-content=\"<img src='";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "' alt='";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "' width='370px'/>
                         <span class='title'>";
                    // line 66
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "</span>
                         <div class='content'>";
                    // line 67
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "description"));
                    echo "
                         </div>
                         <a class='close-btn' href='javascript:void(0);'></a>\">
                         <span>
                            <img src=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"157\" height=\"104\"/>
                         </span>
                            <a href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "id"), $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "\">
                               <strong class=\"title\">
                                   ";
                    // line 75
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "
                               </strong>
                            </a>
                    </a>
                ";
                }
                // line 80
                echo "            </li> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "      ";
        } else {
            // line 83
            echo "            ";
            if ((null === (isset($context["topEnt"]) ? $context["topEnt"] : $this->getContext($context, "topEnt")))) {
                // line 84
                echo "                <div class=\"noProduct\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data was be found", array(), "SMFrontBundle"), "html", null, true);
                echo "</div>
            ";
            }
            // line 86
            echo "      ";
        }
        // line 87
        echo "  </ul>
</div>
    
    ";
        // line 90
        if (((isset($context["totalPage"]) ? $context["totalPage"] : $this->getContext($context, "totalPage")) > 1)) {
            // line 91
            echo "        <div class=\"paging\">
            <span>";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page", array(), "SMFrontBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["totalPage"]) ? $context["totalPage"] : $this->getContext($context, "totalPage")), "html", null, true);
            echo "</span>
            <ul>
                <li class=\"prev-btn\"><a class=\"wi-icon wi-icon-10\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_cat", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "branch"), "id"), $this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "name")), "page" => (isset($context["previousPage"]) ? $context["previousPage"] : $this->getContext($context, "previousPage")))), "html", null, true);
            echo "\" title=\"<<\"><<</a></li>
                ";
            // line 95
            $context["start"] = (((isset($context["startPageOfCurrentRange"]) ? $context["startPageOfCurrentRange"] : $this->getContext($context, "startPageOfCurrentRange")) + (isset($context["perPage"]) ? $context["perPage"] : $this->getContext($context, "perPage"))) - 1);
            // line 96
            echo "                ";
            $context["classActive"] = "";
            // line 97
            echo "                ";
            $context["style"] = "";
            // line 98
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["startPageOfCurrentRange"]) ? $context["startPageOfCurrentRange"] : $this->getContext($context, "startPageOfCurrentRange")), (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 99
                echo "                    ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                    // line 100
                    echo "                        ";
                    $context["classActive"] = "active";
                    // line 101
                    echo "                    ";
                } else {
                    // line 102
                    echo "                        ";
                    $context["classActive"] = "";
                    // line 103
                    echo "                    ";
                }
                // line 104
                echo "
                    ";
                // line 105
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) <= (isset($context["totalPage"]) ? $context["totalPage"] : $this->getContext($context, "totalPage")))) {
                    // line 106
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, (isset($context["classActive"]) ? $context["classActive"] : $this->getContext($context, "classActive")), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_cat", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "branch"), "id"), $this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "name")), "page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 108
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                <li class=\"next-btn\"><a class=\"wi-icon wi-icon-11\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_cat", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "branch"), "id"), $this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "name")), "page" => (isset($context["nextPage"]) ? $context["nextPage"] : $this->getContext($context, "nextPage")))), "html", null, true);
            echo "\" title=\">>\">>></a></li>
            </ul>
        </div>
    ";
        }
        // line 113
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Product:view-cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 113,  307 => 109,  301 => 108,  291 => 106,  289 => 105,  286 => 104,  283 => 103,  280 => 102,  277 => 101,  274 => 100,  271 => 99,  266 => 98,  263 => 97,  260 => 96,  258 => 95,  254 => 94,  245 => 92,  242 => 91,  240 => 90,  235 => 87,  232 => 86,  226 => 84,  223 => 83,  220 => 82,  213 => 80,  205 => 75,  198 => 73,  193 => 71,  186 => 67,  182 => 66,  176 => 65,  170 => 61,  162 => 56,  155 => 54,  148 => 52,  141 => 48,  137 => 47,  131 => 46,  125 => 42,  123 => 41,  120 => 40,  115 => 39,  113 => 38,  107 => 34,  95 => 27,  91 => 26,  82 => 24,  77 => 21,  71 => 19,  63 => 17,  61 => 16,  56 => 14,  53 => 13,  51 => 12,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
