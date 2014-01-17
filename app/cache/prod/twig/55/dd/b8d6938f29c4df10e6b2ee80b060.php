<?php

/* SMFrontBundle:Default:hot-news.html.twig */
class __TwigTemplate_55ddb8d6938f29c4df10e6b2ee80b060 extends Twig_Template
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
        echo "<div class=\"block news-block\">
<h2 class=\"title-1\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News & Events", array(), "SMFrontBundle"), "html", null, true);
        echo "</h2>
<ul>
    ";
        // line 4
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 6
                echo "            <li>
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_news_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getContext($context, "ent"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\">
                  <span class=\"img-thumb\">
                      <span>
                        ";
                // line 10
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "news"), "image") != "")) {
                    // line 11
                    echo "                            <img title=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitle"));
                    echo "\" alt=\"";
                    echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitle"));
                    echo "\" 
                                 src=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "news"), "image"))), "html", null, true);
                    echo "\" width=\"57\" height=\"49\">
                        ";
                } else {
                    // line 14
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
                    echo "\" alt=\"#\" width=\"57\" height=\"57\"/>
                        ";
                }
                // line 16
                echo "                      </span>
                  </span>
                  <div class=\"content\">
                    <p>";
                // line 19
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitle"));
                echo "</p>
                  </div>
                </a>
              </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        echo "            
</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:hot-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  45 => 10,  89 => 29,  86 => 28,  69 => 20,  52 => 14,  46 => 13,  207 => 76,  204 => 75,  197 => 73,  189 => 68,  182 => 66,  177 => 64,  171 => 61,  161 => 59,  155 => 55,  147 => 50,  140 => 48,  133 => 46,  127 => 43,  111 => 37,  106 => 35,  99 => 33,  94 => 30,  83 => 24,  59 => 14,  49 => 13,  61 => 18,  123 => 42,  120 => 33,  113 => 31,  110 => 30,  101 => 34,  97 => 26,  88 => 24,  85 => 23,  79 => 23,  76 => 24,  73 => 19,  65 => 16,  42 => 11,  36 => 10,  24 => 4,  21 => 2,  63 => 12,  40 => 7,  37 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  72 => 18,  62 => 16,  56 => 12,  44 => 10,  38 => 11,  33 => 6,  25 => 4,  23 => 3,  68 => 23,  66 => 22,  58 => 17,  54 => 12,  50 => 10,  41 => 9,  35 => 7,  26 => 4,  19 => 1,  251 => 77,  243 => 129,  239 => 128,  233 => 125,  229 => 124,  225 => 123,  221 => 122,  215 => 119,  209 => 116,  201 => 110,  199 => 109,  195 => 107,  193 => 106,  183 => 98,  181 => 97,  176 => 94,  174 => 93,  169 => 90,  167 => 60,  158 => 82,  156 => 81,  151 => 78,  149 => 77,  143 => 73,  141 => 72,  132 => 65,  130 => 64,  124 => 60,  122 => 59,  117 => 41,  115 => 55,  109 => 36,  107 => 50,  102 => 47,  100 => 46,  95 => 43,  93 => 25,  84 => 35,  82 => 22,  70 => 19,  64 => 22,  60 => 15,  55 => 13,  51 => 14,  47 => 11,  43 => 12,  39 => 10,  30 => 5,  20 => 1,  31 => 3,  28 => 5,);
    }
}
