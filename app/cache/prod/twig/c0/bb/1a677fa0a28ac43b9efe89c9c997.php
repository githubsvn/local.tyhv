<?php

/* SMFrontBundle:Default:top-product.html.twig */
class __TwigTemplate_c0bb1a677fa0a28ac43b9efe89c9c997 extends Twig_Template
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
        echo "<div class=\"block\">
    <div class=\"title-2\">
      <div class=\"inner\">
        <h2><span><span>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Newest Product", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
<!--        <a href=\"#\" title=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View more", array(), "SMFrontBundle"), "html", null, true);
        echo "\" class=\"readmore\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View more", array(), "SMFrontBundle"), "html", null, true);
        echo "</a>-->
      </div>
    </div>
    <div class=\"highlight\">
      ";
        // line 9
        if ((!(null === $this->getContext($context, "topEnt")))) {
            // line 10
            echo "            <article>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "topEnt"), "product"), "id"), $this->getAttribute($this->getContext($context, "topEnt"), "name")))), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "topEnt"), "name"), $this->getContext($context, "countWordProductTitle"));
            echo "\" class=\"img-thumb\">
                <span>
                ";
            // line 13
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "topEnt"), "product"), "thumb") > 0)) {
                // line 14
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "topEnt"), "product"), "thumb"))), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "topEnt"), "name"), $this->getContext($context, "countWordProductTitle"));
                echo "\" width=\"250\" height=\"196\"/>
                    ";
            } else {
                // line 16
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                echo "\" alt=\"#\" width=\"250\" height=\"196\"/>
                    ";
            }
            // line 18
            echo "                </span>
            </a>
            <div class=\"content\">
              <h3><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "topEnt"), "product"), "id"), $this->getAttribute($this->getContext($context, "topEnt"), "name")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topEnt"), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "topEnt"), "name"), "html", null, true);
            echo "</a></h3>
              <div class=\"desc\">
                <p>";
            // line 23
            echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "topEnt"), "description"));
            echo "
        <!--            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "topEnt"), "product"), "id"), $this->getAttribute($this->getContext($context, "topEnt"), "name")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View more", array(), "SMFrontBundle"), "html", null, true);
            echo "\">[...]</a>-->
                </p>
              </div>
            </div>
            </article>
        ";
        }
        // line 30
        echo "    </div>
    <div class=\"thumbnails\">
      <ul>
          ";
        // line 33
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 34
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 35
                echo "                <li>
                    ";
                // line 36
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb") > 0)) {
                    // line 37
                    echo "                        <a href=\"javascript:void(0);\" 
                            class=\"img-thumb\"
                            data-html=\"true\"
                            data-toggle=\"popover\"
                            data-content=\"<img src='";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb"))), "html", null, true);
                    echo "' alt='";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "'/>
                             <span class='title'>";
                    // line 42
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "</span>
                             <div class='content'>";
                    // line 43
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "description"));
                    echo "
                             </div>\">
                             <span>
                                 <img src=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "\"/>
                             </span>
                            <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "\">
                                <strong class=\"title\">
                                    ";
                    // line 50
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "
                                </strong>
                            </a>
                        </a>
                    ";
                } else {
                    // line 55
                    echo "                        <a href=\"javascript:void(0);\" 
                            class=\"img-thumb\" 
                            data-html=\"true\" 
                            data-toggle=\"popover\" 
                            data-content=\"<img src='";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "' alt='";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "' />
                             <span class='title'>";
                    // line 60
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "</span>
                             <div class='content'>";
                    // line 61
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "description"));
                    echo "
                             </div>\">
                             <span>
                                <img src=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"157\" height=\"104\"/>
                             </span>
                             <a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "\">
                                 <strong class=\"title\">
                                    ";
                    // line 68
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "
                                 </strong>
                             </a>
                        </a>
                    ";
                }
                // line 73
                echo "                </li> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "          ";
        }
        // line 76
        echo "      </ul>
<!--      <a href=\"#\" title=\"Xem thêm\" class=\"wi-icon wi-icon-3\">Xem thêm</a>-->
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:top-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 76,  204 => 75,  197 => 73,  189 => 68,  182 => 66,  177 => 64,  171 => 61,  167 => 60,  161 => 59,  155 => 55,  147 => 50,  140 => 48,  133 => 46,  127 => 43,  123 => 42,  117 => 41,  111 => 37,  109 => 36,  106 => 35,  101 => 34,  99 => 33,  94 => 30,  83 => 24,  79 => 23,  70 => 21,  65 => 18,  59 => 16,  51 => 14,  49 => 13,  42 => 11,  39 => 10,  37 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
