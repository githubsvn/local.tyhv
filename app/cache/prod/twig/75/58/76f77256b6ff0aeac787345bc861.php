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
        // line 33
        echo "</div>
    
<div class=\"thumbnails\">
  <ul>
      ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 38
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 39
                echo "            <li>
                ";
                // line 40
                if (($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb") > 0)) {
                    // line 41
                    echo "                    <a href=\"javascript:void(0);\" 
                        class=\"img-thumb\"
                        data-html=\"true\"
                        data-toggle=\"popover\"
                        data-content=\"<img src='";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb"))), "html", null, true);
                    echo "' alt='";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "' width='370px'/>
                         <span class='title'>";
                    // line 46
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "</span>
                         <div class='content'>";
                    // line 47
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "description"));
                    echo "
                         </div>
                         <a class='close-btn' href='javascript:void(0);'></a>\">
                         <span>
                             <img src=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "\"/>
                         </span>
                        <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "id"), $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "\">
                            <strong class=\"title\">
                                ";
                    // line 55
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "
                            </strong>
                        </a>
                    </a>
                ";
                } else {
                    // line 60
                    echo "                    <a href=\"javascript:void(0);\" 
                        class=\"img-thumb\" 
                        data-html=\"true\" 
                        data-toggle=\"popover\" 
                        data-content=\"<img src='";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "' alt='";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "' width='370px'/>
                         <span class='title'>";
                    // line 65
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "</span>
                         <div class='content'>";
                    // line 66
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "description"));
                    echo "
                         </div>
                         <a class='close-btn' href='javascript:void(0);'></a>\">
                         <span>
                            <img src=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"157\" height=\"104\"/>
                         </span>
                            <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "id"), $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "\">
                               <strong class=\"title\">
                                   ";
                    // line 74
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "
                               </strong>
                            </a>
                    </a>
                ";
                }
                // line 79
                echo "            </li> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "      ";
        } else {
            // line 82
            echo "<!--            <div class=\"noProduct\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data was be found", array(), "SMFrontBundle"), "html", null, true);
            echo "</div>-->
      ";
        }
        // line 84
        echo "  </ul>
</div>
    
    ";
        // line 87
        if (((isset($context["totalPage"]) ? $context["totalPage"] : $this->getContext($context, "totalPage")) > 0)) {
            // line 88
            echo "        <div class=\"paging\">
            <span>";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page", array(), "SMFrontBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["totalPage"]) ? $context["totalPage"] : $this->getContext($context, "totalPage")), "html", null, true);
            echo "</span>
            <ul>
                <li class=\"prev-btn\"><a class=\"wi-icon wi-icon-10\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_cat", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "branch"), "id"), $this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "name")), "page" => (isset($context["previousPage"]) ? $context["previousPage"] : $this->getContext($context, "previousPage")))), "html", null, true);
            echo "\" title=\"<<\"><<</a></li>
                ";
            // line 92
            $context["start"] = (((isset($context["startPageOfCurrentRange"]) ? $context["startPageOfCurrentRange"] : $this->getContext($context, "startPageOfCurrentRange")) + (isset($context["perPage"]) ? $context["perPage"] : $this->getContext($context, "perPage"))) - 1);
            // line 93
            echo "                ";
            $context["classActive"] = "";
            // line 94
            echo "                ";
            $context["style"] = "";
            // line 95
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["startPageOfCurrentRange"]) ? $context["startPageOfCurrentRange"] : $this->getContext($context, "startPageOfCurrentRange")), (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 96
                echo "                    ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                    // line 97
                    echo "                        ";
                    $context["classActive"] = "active";
                    // line 98
                    echo "                    ";
                } else {
                    // line 99
                    echo "                        ";
                    $context["classActive"] = "";
                    // line 100
                    echo "                    ";
                }
                // line 101
                echo "
                    ";
                // line 102
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) <= (isset($context["totalPage"]) ? $context["totalPage"] : $this->getContext($context, "totalPage")))) {
                    // line 103
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, (isset($context["classActive"]) ? $context["classActive"] : $this->getContext($context, "classActive")), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_cat", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "branch"), "id"), $this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "name")), "page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 105
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                <li class=\"next-btn\"><a class=\"wi-icon wi-icon-11\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_cat", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "branch"), "id"), $this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "name")), "page" => (isset($context["nextPage"]) ? $context["nextPage"] : $this->getContext($context, "nextPage")))), "html", null, true);
            echo "\" title=\">>\">>></a></li>
            </ul>
        </div>
    ";
        }
        // line 110
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
        return array (  308 => 110,  300 => 106,  294 => 105,  284 => 103,  282 => 102,  279 => 101,  276 => 100,  273 => 99,  270 => 98,  267 => 97,  264 => 96,  259 => 95,  256 => 94,  253 => 93,  251 => 92,  247 => 91,  238 => 89,  235 => 88,  233 => 87,  228 => 84,  222 => 82,  219 => 81,  212 => 79,  204 => 74,  197 => 72,  192 => 70,  185 => 66,  181 => 65,  175 => 64,  169 => 60,  161 => 55,  154 => 53,  147 => 51,  140 => 47,  136 => 46,  130 => 45,  124 => 41,  122 => 40,  119 => 39,  114 => 38,  112 => 37,  106 => 33,  95 => 27,  91 => 26,  82 => 24,  77 => 21,  71 => 19,  63 => 17,  61 => 16,  56 => 14,  53 => 13,  51 => 12,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
