<?php

/* SMFrontBundle:Product:search.html.twig */
class __TwigTemplate_a6cd62d67d222491a5ee6b99db6e61cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMFrontBundle::layout.product.detail.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMFrontBundle::layout.product.detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMFrontBundle"), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"block\">
<!-- BEGIN RELATION PRODUCT -->
    <div class=\"block specialty\">
    <div class=\"title-2\">
      <div class=\"inner\">
        <h2><span><span>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
      </div>
    </div>
    <div class=\"thumbnails-1\">
      <div style=\"padding-top: 10px; padding-left: 10px;\" align=\"center\">
            <form class=\"\" method=\"POST\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_search_product"), "html", null, true);
        echo "\">
                <div>
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo " : <input size=\"40\" type=\"text\" name=\"product_name\" id=\"product_name\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\" style=\"background-color: #F0F0F0;\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Branch", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"branch\" id=\"branch\" style=\"background-color: #F0F0F0; outline-color:#F0F0F0;\">
                            <option value=\"\">-- ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optBranchs"));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 20
            echo "                                ";
            if ((!(null === $this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage")))) {
                // line 21
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "obj"), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getContext($context, "obj"), "id") == $this->getContext($context, "branchId"))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                        ";
                // line 22
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage"), "getTreeName"), 50), "html", null, true);
                echo "
                                    </option>
                                ";
            }
            // line 25
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        </select>
                </div>
                <div style=\"padding: 10px; 10px; 10px; 10px;\" align=\"center\">
                    <button type=\"submit\" class=\"btn\" style=\"width: 100px;\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
                    <button type=\"submit\" class=\"btn\" style=\"width: 100px;\" id=\"btnReset\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
                </div>
            </form>
        </div>
    </div>
  </div>

    <div class=\"block specialty\">
        <div class=\"title-2\">
          <div class=\"inner\">
            <h2><span><span>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search Results", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
          </div>
        </div>
        <div class=\"thumbnails\">
            <ul>
                ";
        // line 45
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 46
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 47
                echo "                        <li>
                            ";
                // line 48
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb") > 0)) {
                    // line 49
                    echo "                                <a href=\"javascript:void(0);\" 
                                    class=\"img-thumb\"
                                    data-html=\"true\"
                                    data-toggle=\"popover\"
                                    data-content=\"<img src='";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb"))), "html", null, true);
                    echo "' alt='";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "'/>
                                     <span class='title'>";
                    // line 54
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "</span>
                                     <div class='content'>";
                    // line 55
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "description"));
                    echo "
                                     </div>\">
                                     <span>
                                         <img src=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "\" width=\"160\" height=\"104\"/>
                                     </span>
                                    <a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "\">
                                        <strong class=\"title\">
                                            ";
                    // line 62
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "
                                        </strong>
                                    </a>
                                </a>
                            ";
                } else {
                    // line 67
                    echo "                                <a href=\"javascript:void(0);\" 
                                    class=\"img-thumb\" 
                                    data-html=\"true\" 
                                    data-toggle=\"popover\" 
                                    data-content=\"<img src='";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "' alt='";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "' />
                                     <span class='title'>";
                    // line 72
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "</span>
                                     <div class='content'>";
                    // line 73
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "description"));
                    echo "
                                     </div>\">
                                     <span>
                                        <img src=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"157\" height=\"104\"/>
                                     </span>
                                        <a href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "\">
                                           <strong class=\"title\">
                                               ";
                    // line 80
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "
                                           </strong>
                                        </a>

                                </a>
                            ";
                }
                // line 86
                echo "                        </li> 
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                  ";
        } else {
            // line 89
            echo "                        <div class=\"noProduct\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No result was found", array(), "SMFrontBundle"), "html", null, true);
            echo "</div>
                  ";
        }
        // line 91
        echo "            </ul>
        </div>
        
        ";
        // line 94
        if (($this->getContext($context, "totalPage") > 0)) {
            // line 95
            echo "        <div class=\"paging\">
            <span>";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page", array(), "SMFrontBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "currentPage"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getContext($context, "totalPage"), "html", null, true);
            echo "</span>
            <ul>
                <li class=\"prev-btn\"><a class=\"wi-icon wi-icon-10\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_search_product", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\" title=\"<<\"><<</a></li>
                ";
            // line 99
            $context["start"] = (($this->getContext($context, "startPageOfCurrentRange") + $this->getContext($context, "perPage")) - 1);
            // line 100
            echo "                ";
            $context["classActive"] = "";
            // line 101
            echo "                ";
            $context["style"] = "";
            // line 102
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getContext($context, "startPageOfCurrentRange"), $this->getContext($context, "start")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 103
                echo "                    ";
                if (($this->getContext($context, "i") == $this->getContext($context, "currentPage"))) {
                    // line 104
                    echo "                        ";
                    $context["classActive"] = "active";
                    // line 105
                    echo "                    ";
                } else {
                    // line 106
                    echo "                        ";
                    $context["classActive"] = "";
                    // line 107
                    echo "                    ";
                }
                // line 108
                echo "
                    ";
                // line 109
                if (($this->getContext($context, "i") <= $this->getContext($context, "totalPage"))) {
                    // line 110
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "classActive"), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_search_product", array("page" => $this->getContext($context, "i"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 112
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                <li class=\"next-btn\"><a class=\"wi-icon wi-icon-11\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_search_product", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\" title=\">>\">>></a></li>
            </ul>
        </div>
    ";
        }
        // line 117
        echo "    
      </div>
<!-- END NEW RELATIONPRODUCT -->
</div>                  
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Product:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 117,  317 => 113,  311 => 112,  301 => 110,  299 => 109,  296 => 108,  293 => 107,  290 => 106,  287 => 105,  284 => 104,  281 => 103,  276 => 102,  273 => 101,  270 => 100,  268 => 99,  264 => 98,  255 => 96,  252 => 95,  250 => 94,  245 => 91,  239 => 89,  236 => 88,  229 => 86,  220 => 80,  213 => 78,  208 => 76,  202 => 73,  198 => 72,  192 => 71,  186 => 67,  178 => 62,  171 => 60,  164 => 58,  158 => 55,  154 => 54,  148 => 53,  142 => 49,  140 => 48,  137 => 47,  132 => 46,  130 => 45,  122 => 40,  109 => 30,  105 => 29,  100 => 26,  94 => 25,  88 => 22,  79 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  58 => 16,  53 => 14,  45 => 9,  38 => 4,  35 => 3,  29 => 2,);
    }
}
