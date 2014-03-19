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
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 11
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 12
                echo "            <li>
                ";
                // line 13
                if (($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb") > 0)) {
                    // line 14
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "id"), $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "\"\">
                        <span class=\"wi-frame wi-frame-2\"><span><span>
                            <img src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                    echo "\"/>
                        </span></span></span>
                    </a>
                ";
                } else {
                    // line 20
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "id"), $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name")))), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                    echo "\">
                        <span class=\"wi-frame wi-frame-2\"><span><span>
                            <img src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"157\" height=\"104\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
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
        return array (  89 => 29,  86 => 28,  79 => 26,  70 => 22,  62 => 20,  45 => 14,  33 => 10,  24 => 4,  19 => 1,  241 => 64,  229 => 113,  225 => 112,  221 => 111,  215 => 108,  211 => 107,  207 => 106,  203 => 105,  191 => 99,  188 => 98,  186 => 97,  179 => 93,  173 => 90,  164 => 83,  162 => 82,  157 => 79,  155 => 78,  150 => 75,  148 => 74,  141 => 69,  139 => 68,  134 => 65,  132 => 64,  116 => 53,  109 => 49,  107 => 48,  101 => 44,  99 => 43,  94 => 40,  92 => 39,  87 => 36,  85 => 35,  75 => 28,  57 => 16,  48 => 13,  44 => 12,  40 => 12,  36 => 10,  31 => 9,  20 => 1,  308 => 110,  300 => 106,  294 => 105,  284 => 103,  282 => 102,  279 => 101,  276 => 100,  273 => 99,  270 => 98,  267 => 97,  264 => 96,  259 => 95,  256 => 94,  253 => 93,  251 => 92,  247 => 91,  238 => 89,  235 => 88,  233 => 114,  228 => 84,  222 => 82,  219 => 81,  212 => 79,  204 => 74,  197 => 102,  192 => 70,  185 => 66,  181 => 94,  175 => 91,  169 => 60,  161 => 55,  154 => 53,  147 => 51,  140 => 47,  136 => 46,  130 => 45,  124 => 58,  122 => 57,  119 => 39,  114 => 52,  112 => 37,  106 => 33,  95 => 31,  91 => 26,  82 => 24,  77 => 29,  71 => 19,  63 => 19,  61 => 16,  56 => 14,  53 => 16,  51 => 12,  43 => 13,  38 => 4,  35 => 11,  29 => 8,);
    }
}
