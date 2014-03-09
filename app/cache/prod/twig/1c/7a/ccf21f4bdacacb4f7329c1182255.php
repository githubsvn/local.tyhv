<?php

/* SMFrontBundle:Page:detail.html.twig */
class __TwigTemplate_1c7accf21f4bdacacb4f7329c1182255 extends Twig_Template
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
        echo "    <div class=\"newsCategory defaultTitle\">
        <h1>";
        // line 5
        echo $this->getAttribute($this->getContext($context, "entity"), "getName");
        echo "</h1>
    </div>

    <div class=\"defaultContent newsList\">
        <table cellspacing=\"0\" cellpadding=\"0\" class=\"newsList_Item\">
            <tbody>
                <tr>
                    <td class=\"newsList_Content\">
                        <div>
                            <span class=\"newsList_Summary\">
                                ";
        // line 15
        echo $this->getAttribute($this->getContext($context, "entity"), "getIntro");
        echo "
                                ";
        // line 16
        echo $this->getAttribute($this->getContext($context, "entity"), "getDescription");
        echo "
                            </span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class=\"clear defaultFooter newsList-footer\"><div></div></div>
    <div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Page:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  54 => 15,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
