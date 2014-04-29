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
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 9
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 10
                echo "            <li>
                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "video"), "url"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordNewsTitle"]) ? $context["countWordNewsTitle"] : $this->getContext($context, "countWordNewsTitle")));
                echo "\">
                    ";
                // line 12
                echo $this->env->getExtension('mtx.twig.teaser_extension')->getTeaser($this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "name"), (isset($context["countWordNewsTitle"]) ? $context["countWordNewsTitle"] : $this->getContext($context, "countWordNewsTitle")));
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
        return array (  89 => 29,  52 => 14,  46 => 13,  209 => 78,  206 => 77,  199 => 75,  191 => 70,  184 => 68,  179 => 66,  172 => 62,  168 => 61,  156 => 56,  148 => 51,  141 => 49,  127 => 43,  111 => 37,  109 => 36,  106 => 35,  99 => 33,  94 => 30,  83 => 24,  59 => 16,  49 => 13,  92 => 34,  78 => 26,  71 => 22,  64 => 18,  43 => 12,  61 => 18,  120 => 33,  113 => 31,  101 => 34,  97 => 26,  82 => 22,  79 => 23,  76 => 24,  70 => 21,  65 => 19,  55 => 13,  51 => 14,  42 => 11,  24 => 4,  21 => 2,  37 => 9,  72 => 18,  62 => 16,  56 => 12,  50 => 10,  41 => 9,  35 => 10,  33 => 6,  30 => 9,  25 => 4,  87 => 30,  85 => 30,  73 => 19,  69 => 20,  60 => 15,  54 => 16,  47 => 11,  45 => 11,  38 => 11,  34 => 6,  26 => 4,  22 => 2,  19 => 1,  39 => 10,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 60,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 47,  125 => 59,  123 => 42,  117 => 41,  115 => 53,  110 => 30,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 25,  88 => 24,  86 => 28,  77 => 24,  75 => 28,  63 => 12,  57 => 14,  53 => 15,  48 => 8,  44 => 12,  40 => 7,  36 => 10,  29 => 5,  20 => 1,  31 => 4,  28 => 8,);
    }
}
