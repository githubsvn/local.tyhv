<?php

/* SMFrontBundle:Default:new-product.html.twig */
class __TwigTemplate_fc16c8669cfbcdd59ab5a4b975309839 extends Twig_Template
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
        echo "<div class=\"block new-specialty\">
<div class=\"title-2\">
  <div class=\"inner\">
    <h2><span><span>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New Product", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
<!--    <a href=\"#\" title=\"Xem thêm\" class=\"readmore\">Xem thêm</a>-->
  </div>
</div>
<div class=\"thumbnails-1\">
    <ul>
      ";
        // line 10
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 11
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 12
                echo "            <li>
                ";
                // line 13
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb") > 0)) {
                    // line 14
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "\"\">
                        <span class=\"wi-frame wi-frame-2\"><span><span>
                            <img src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "\"/>
                        </span></span></span>
                    </a>
                ";
                } else {
                    // line 20
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                    echo "\">
                        <span class=\"wi-frame wi-frame-2\"><span><span>
                            <img src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"157\" height=\"104\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "\"/>
                        </span></span></span>
                    </a>
                ";
                }
                // line 26
                echo "            </li> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "      ";
        } else {
            // line 29
            echo "            <div class=\"noProduct\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data was be found", array(), "SMFrontBundle"), "html", null, true);
            echo "</div>
      ";
        }
        // line 31
        echo "  </ul>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:new-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  89 => 29,  86 => 28,  79 => 26,  70 => 22,  62 => 20,  53 => 16,  45 => 14,  43 => 13,  40 => 12,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}
