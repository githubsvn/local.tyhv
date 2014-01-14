<?php

/* SMFrontBundle:Default:company.html.twig */
class __TwigTemplate_b4d377819f117a9b6afa9c17b71fd998 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logo Company", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></span></h2>
<!--            <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_company_view_all"), "html", null, true);
        echo "\" title=\"Xem thêm\" class=\"readmore\">Xem thêm</a>-->
        </div>
    </div>
    <div class=\"thumbnails-1\">
        <ul>
            ";
        // line 10
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 11
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 12
                echo "                <li>
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_company_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "company"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\">
                        <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_company_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "company"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\">
                            <span class=\"wi-frame wi-frame-1\">
                                <span>
                                    <span>
                                        <img title=\"";
                // line 18
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\"
                                            alt=\"";
                // line 19
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\" 
                                            src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "company"), "thumb"))), "html", null, true);
                echo "\"/>
                                    </span>
                                </span>
                            </span>
                        <h3>";
                // line 24
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "</h3>
                    </a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            ";
        }
        // line 29
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  86 => 28,  76 => 24,  69 => 20,  65 => 19,  61 => 18,  52 => 14,  46 => 13,  38 => 11,  36 => 10,  28 => 5,  24 => 4,  19 => 1,  251 => 77,  243 => 129,  239 => 128,  233 => 125,  229 => 124,  225 => 123,  221 => 122,  215 => 119,  209 => 116,  201 => 110,  199 => 109,  195 => 107,  193 => 106,  183 => 98,  181 => 97,  176 => 94,  174 => 93,  169 => 90,  167 => 89,  158 => 82,  156 => 81,  151 => 78,  149 => 77,  143 => 73,  141 => 72,  132 => 65,  130 => 64,  124 => 60,  122 => 59,  117 => 56,  115 => 55,  109 => 51,  107 => 50,  102 => 47,  100 => 46,  95 => 43,  93 => 42,  84 => 35,  82 => 34,  70 => 25,  64 => 22,  60 => 21,  55 => 19,  51 => 18,  47 => 17,  43 => 12,  39 => 15,  30 => 9,  20 => 1,);
    }
}
