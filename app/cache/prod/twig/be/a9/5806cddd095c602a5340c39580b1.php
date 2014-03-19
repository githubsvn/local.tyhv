<?php

/* SMFrontBundle:Product:detail.html.twig */
class __TwigTemplate_bea95806cddd095c602a5340c39580b1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Detail Information", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
<!--    <a href=\"#\" title=\"Xem thêm\" class=\"readmore\">Xem thêm</a>-->
  </div>
</div>
<div class=\"highlight\">
  <article>
    <div class=\"carousel\">
      <div class=\"preview wi-frame wi-frame-3\">
        <ul class=\"slides\">
            ";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "product"), "thumb") > 0)) {
            // line 17
            echo "                <li class=\"slide\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "product"), "thumb"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "product"), "thumb"))), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"));
            echo "\" width=\"420\" height=\"277\"/></a></li>
            ";
        } else {
            // line 19
            echo "                <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
            echo "\" alt=\"#\" width=\"420\" height=\"277\"/></li>
            ";
        }
        // line 21
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias"))) > 0)) {
            // line 22
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias")));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 23
                echo "                    ";
                if ((!(null === (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img"))))) {
                    // line 24
                    echo "                        <li class=\"slide\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "name"))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "name"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"));
                    echo "\" width=\"420\" height=\"277\"/></a></li>
                    ";
                } else {
                    // line 26
                    echo "                        <li><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"420\" height=\"277\"/></li>
                    ";
                }
                // line 28
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        }
        // line 30
        echo "        </ul>
      </div>
      <div class=\"thumb\">
        <ul class=\"slides\">
            ";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "product"), "thumb") > 0)) {
            // line 35
            echo "                <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "product"), "thumb"))), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"));
            echo "\" width=\"104\" height=\"64\"/></li>
            ";
        } else {
            // line 37
            echo "                <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
            echo "\" alt=\"#\" width=\"104\" height=\"64\"/></li>
            ";
        }
        // line 39
        echo "            
            ";
        // line 40
        if ((twig_length_filter($this->env, (isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias"))) > 0)) {
            // line 41
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias")));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 42
                echo "                    ";
                if ((!(null === (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img"))))) {
                    // line 43
                    echo "                        <li><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "name"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"));
                    echo "\" width=\"104\" height=\"64\"/></li>
                    ";
                } else {
                    // line 45
                    echo "                        <li><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"104\" height=\"64\"/></li>
                    ";
                }
                // line 47
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        }
        // line 49
        echo "        </ul>
      </div>
    </div>                                           
    <div class=\"content\">
      ";
        // line 53
        if ((!(null === (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))))) {
            // line 54
            echo "        <h3>";
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getName");
            echo "</h3>
        <div class=\"desc\">
            ";
            // line 56
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getDescription");
            echo "
        </div>
      ";
        }
        // line 59
        echo "      
    </div>
  </article>
</div><!-- end highlight -->

";
        // line 64
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:formComment", array(), array());
        // line 65
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:listComment", array(), array());
        // line 66
        echo "
<!-- BEGIN RELATION PRODUCT -->
<div class=\"block specialty\">
    <div class=\"title-2\">
      <div class=\"inner\">
        <h2><span><span>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Relation Product", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
        <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["urlHost"]) ? $context["urlHost"] : $this->getContext($context, "urlHost")), "html", null, true);
        echo "/product/view-branch/1/";
        echo twig_escape_filter($this->env, $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "id"), $this->getAttribute($this->getAttribute((isset($context["branch"]) ? $context["branch"] : $this->getContext($context, "branch")), "getCurrentLanguage"), "getName")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View more", array(), "SMFrontBundle"), "html", null, true);
        echo "\" class=\"readmore\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View more", array(), "SMFrontBundle"), "html", null, true);
        echo "</a>
      </div>
    </div>
    <div class=\"thumbnails-1\">
      <ul>
          ";
        // line 77
        if ((twig_length_filter($this->env, (isset($context["productsRelative"]) ? $context["productsRelative"] : $this->getContext($context, "productsRelative"))) > 0)) {
            // line 78
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productsRelative"]) ? $context["productsRelative"] : $this->getContext($context, "productsRelative")));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 79
                echo "                <li>
                    ";
                // line 80
                if (($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb") != "")) {
                    // line 81
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "id"), $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "\"\">
                            <span class=\"wi-frame wi-frame-2\"><span><span>
                                <img src=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "\"/>
                            </span></span></span>
                            <h3>";
                    // line 85
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "</h3>
                        </a>
                    ";
                } else {
                    // line 88
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "id"), $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "\">
                            <span class=\"wi-frame wi-frame-2\"><span><span>
                                <img src=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" width=\"157\" height=\"104\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "\"/>
                            </span></span></span>
                            <h3>";
                    // line 92
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "</h3>
                        </a>
                    ";
                }
                // line 95
                echo "                </li> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "      ";
        }
        // line 98
        echo "      </ul>
    </div>
  </div>
<!-- END NEW RELATIONPRODUCT -->
</div>                  
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Product:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 98,  284 => 97,  277 => 95,  271 => 92,  264 => 90,  256 => 88,  250 => 85,  243 => 83,  235 => 81,  233 => 80,  230 => 79,  225 => 78,  223 => 77,  209 => 72,  205 => 71,  198 => 66,  196 => 65,  194 => 64,  187 => 59,  181 => 56,  175 => 54,  173 => 53,  167 => 49,  164 => 48,  158 => 47,  152 => 45,  144 => 43,  141 => 42,  136 => 41,  134 => 40,  131 => 39,  125 => 37,  117 => 35,  115 => 34,  109 => 30,  106 => 29,  100 => 28,  94 => 26,  84 => 24,  81 => 23,  76 => 22,  73 => 21,  67 => 19,  57 => 17,  55 => 16,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
