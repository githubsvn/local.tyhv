<?php

/* SMFrontBundle:Company:detail.html.twig */
class __TwigTemplate_2e89712a92c9b7e1293f16daffe813bb extends Twig_Template
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
          <div class=\"detail-img-logo\">
          <div class=\"wi-frame wi-frame-1\">
            <ul class=\"slides\">
                ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCompany"), "getThumb") != "")) {
            // line 16
            echo "                    <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "uploadPath") . $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "company"), "thumb"))), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "entity"), "name"));
            echo "\"/></li>
                ";
        } else {
            // line 18
            echo "                <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/no-image.jpg"), "html", null, true);
            echo "\" alt=\"#\" width=\"155\" height=\"67\"/></li>
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
</div>

    ";
        // line 37
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:company", array(), array());
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Company:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  90 => 30,  84 => 27,  78 => 25,  76 => 24,  70 => 20,  64 => 18,  56 => 16,  54 => 15,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
