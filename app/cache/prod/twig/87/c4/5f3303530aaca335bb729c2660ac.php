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
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 6
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_product_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "id"), $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name")))), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"));
                echo "\">
                    ";
                // line 7
                if (($this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb") > 0)) {
                    // line 8
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["uploadPath"]) ? $context["uploadPath"] : $this->getContext($context, "uploadPath")) . $this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "product"), "thumb"))), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
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
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordProductTitle"]) ? $context["countWordProductTitle"] : $this->getContext($context, "countWordProductTitle")));
                echo "</h3>
                    ";
                // line 13
                echo $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "intro");
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
        return array (  61 => 13,  123 => 34,  120 => 33,  97 => 26,  93 => 25,  88 => 24,  82 => 22,  76 => 20,  73 => 19,  70 => 16,  65 => 17,  55 => 13,  51 => 12,  42 => 8,  24 => 3,  21 => 2,  60 => 15,  37 => 7,  34 => 6,  22 => 2,  72 => 18,  56 => 12,  47 => 11,  33 => 6,  30 => 5,  25 => 4,  66 => 22,  58 => 17,  50 => 10,  41 => 9,  28 => 5,  26 => 4,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 27,  99 => 43,  94 => 40,  92 => 39,  85 => 23,  75 => 28,  63 => 12,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 7,  36 => 7,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 31,  110 => 30,  100 => 29,  95 => 26,  87 => 36,  79 => 21,  77 => 29,  68 => 23,  62 => 16,  59 => 15,  54 => 10,  52 => 13,  43 => 7,  38 => 8,  35 => 7,  29 => 5,);
    }
}
