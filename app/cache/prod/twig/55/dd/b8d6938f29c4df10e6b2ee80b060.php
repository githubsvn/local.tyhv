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
        return array (  81 => 24,  70 => 19,  65 => 16,  59 => 14,  54 => 12,  47 => 11,  45 => 10,  37 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
