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
        return array (  61 => 13,  120 => 33,  113 => 31,  101 => 27,  97 => 26,  82 => 22,  79 => 21,  76 => 20,  70 => 16,  65 => 17,  55 => 13,  51 => 12,  42 => 8,  24 => 3,  21 => 2,  37 => 7,  72 => 18,  62 => 16,  56 => 12,  50 => 10,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  25 => 4,  87 => 30,  85 => 23,  73 => 19,  69 => 22,  60 => 15,  54 => 10,  47 => 11,  45 => 11,  38 => 8,  34 => 6,  26 => 3,  22 => 2,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 84,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 66,  125 => 59,  123 => 34,  117 => 54,  115 => 53,  110 => 30,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 25,  88 => 24,  86 => 36,  77 => 24,  75 => 28,  63 => 12,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 7,  36 => 7,  29 => 5,  20 => 1,  31 => 4,  28 => 2,);
    }
}
