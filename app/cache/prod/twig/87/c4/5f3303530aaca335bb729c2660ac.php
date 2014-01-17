<?php

/* SMFrontBundle:Default:product-sale.html.twig */
class __TwigTemplate_87c45f3303530aaca335bb729c2660ac extends Twig_Template
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
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 2
            echo "    <div class=\"block sale-block\">
        <h2 class=\"title-1\">";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Promotion Product", array(), "SMFrontBundle"), "html", null, true);
            echo "</h2>
        <ul>
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 6
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\">
                    ";
                // line 7
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb") > 0)) {
                    // line 8
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "product"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                    echo "\" width=\"127\" height=\"101\"/>
                    ";
                } else {
                    // line 10
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"127\" height=\"101\"/>
                    ";
                }
                // line 12
                echo "                    <h3>";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordProductTitle"));
                echo "</h3>
                    ";
                // line 13
                echo $this->getAttribute($this->getContext($context, "ent"), "intro");
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:product-sale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  123 => 34,  120 => 33,  113 => 31,  110 => 30,  101 => 27,  97 => 26,  88 => 24,  85 => 23,  79 => 21,  76 => 20,  73 => 19,  65 => 17,  42 => 8,  36 => 7,  24 => 3,  21 => 2,  63 => 12,  40 => 7,  37 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  72 => 18,  62 => 16,  56 => 12,  44 => 10,  38 => 8,  33 => 6,  25 => 4,  23 => 3,  68 => 23,  66 => 22,  58 => 17,  54 => 10,  50 => 10,  41 => 9,  35 => 7,  26 => 4,  19 => 1,  251 => 77,  243 => 129,  239 => 128,  233 => 125,  229 => 124,  225 => 123,  221 => 122,  215 => 119,  209 => 116,  201 => 110,  199 => 109,  195 => 107,  193 => 106,  183 => 98,  181 => 97,  176 => 94,  174 => 93,  169 => 90,  167 => 89,  158 => 82,  156 => 81,  151 => 78,  149 => 77,  143 => 73,  141 => 72,  132 => 65,  130 => 64,  124 => 60,  122 => 59,  117 => 56,  115 => 55,  109 => 51,  107 => 50,  102 => 47,  100 => 46,  95 => 43,  93 => 25,  84 => 35,  82 => 22,  70 => 16,  64 => 22,  60 => 15,  55 => 13,  51 => 12,  47 => 11,  43 => 16,  39 => 8,  30 => 5,  20 => 1,  31 => 3,  28 => 5,);
    }
}
