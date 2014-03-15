<?php

/* SMFrontBundle:Default:video.html.twig */
class __TwigTemplate_09d335be72ab745c521eaab17275829d extends Twig_Template
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
        echo "<!--<div class=\"video-block\">
    <iframe width=\"208\" height=\"153\" src=\"http://www.youtube.com/embed/u2IDsSL0OHg?wmode=transparent\"></iframe>
</div>-->

<div class=\"video-block-list yt_holder\">
    <div id=\"ytvideo\"></div>
    <ul class=\"demo1\">
        ";
        // line 8
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 9
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 10
                echo "            <li>
                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "ent"), "video"), "url"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitle"));
                echo "\">
                    ";
                // line 12
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute($this->getContext($context, "ent"), "name"), $this->getContext($context, "countWordNewsTitle"));
                echo "
                </a>
              </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        echo "       
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  44 => 12,  38 => 11,  35 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
