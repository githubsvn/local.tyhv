<?php

/* SMFrontBundle:News:detail.html.twig */
class __TwigTemplate_84825406fa3bc05174124386919e6f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMFrontBundle::layout.news.detail.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMFrontBundle::layout.news.detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getContext($context, "entity"), "getName");
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
      </div>
    </div>
    <div class=\"highlight\">
      <article>
        <div class=\"carousel\">
          <div class=\"preview wi-frame wi-frame-3\">
            <ul class=\"slides\">
                ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "image") != "")) {
            // line 16
            echo "                    <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "image"))), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "entity"), "name"));
            echo "\" width=\"420\" height=\"277\"/></li>
                ";
        } else {
            // line 18
            echo "                    <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
            echo "\" alt=\"#\" width=\"420\" height=\"277\"/></li>
                ";
        }
        // line 20
        echo "            </ul>
          </div>
        </div>                                           
        <div class=\"content\">
          ";
        // line 24
        if ((!(null === $this->getContext($context, "entity")))) {
            // line 25
            echo "            <h3>";
            echo $this->getAttribute($this->getContext($context, "entity"), "getName");
            echo "</h3>
            <div class=\"desc\">
                ";
            // line 27
            echo $this->getAttribute($this->getContext($context, "entity"), "getDescription");
            echo "
            </div>
          ";
        }
        // line 30
        echo "
        </div>
      </article>
    </div><!-- end highlight -->

<!-- BEGIN RELATION PRODUCT -->
    <div class=\"others-specialty\">
    <h3><span>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lastest News", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></h3>
        <ul>
          ";
        // line 39
        if ((twig_length_filter($this->env, $this->getContext($context, "newsLastest")) > 0)) {
            // line 40
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "newsLastest"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 41
                echo "                <li>
                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_news_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "news"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\">
                        ";
                // line 43
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitleList"));
                echo "
                    </a>
                </li> 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            ";
        }
        // line 48
        echo "        </ul>
    </div>

    <div class=\"others-specialty\">
    <h3><span>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Oldest News", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></h3>
        <ul>
            ";
        // line 54
        if ((twig_length_filter($this->env, $this->getContext($context, "newsOldest")) > 0)) {
            // line 55
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "newsOldest"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 56
                echo "                    <li>
                        <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_view_news_detail", array("slug" => $this->env->getExtension('mtx.twig.build_url')->buildUrl($this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "news"), "id"), $this->getAttribute($this->getContext($context, "ent"), "name")))), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"));
                echo "\">
                            ";
                // line 58
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitleList"));
                echo "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            ";
        }
        // line 63
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:News:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 63,  170 => 62,  160 => 58,  154 => 57,  151 => 56,  146 => 55,  144 => 54,  139 => 52,  133 => 48,  130 => 47,  120 => 43,  114 => 42,  111 => 41,  106 => 40,  104 => 39,  99 => 37,  90 => 30,  84 => 27,  78 => 25,  76 => 24,  70 => 20,  64 => 18,  56 => 16,  54 => 15,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
