<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_60e7c00acd8501af30c91697ec7da750 extends Twig_Template
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
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : $this->getContext($context, "tinymce_jquery"))) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/vendor/tiny_mce/jquery.tinymce.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/js/init.jquery.js"))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/vendor/tiny_mce/tiny_mce.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/js/ready.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/js/init.standard.js"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    initTinyMCE(";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : $this->getContext($context, "tinymce_config"));
        echo ");
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  42 => 9,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  52 => 11,  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  468 => 151,  464 => 150,  460 => 149,  456 => 148,  451 => 147,  448 => 146,  440 => 122,  437 => 121,  432 => 118,  428 => 116,  422 => 115,  419 => 114,  410 => 111,  405 => 110,  400 => 109,  397 => 108,  394 => 107,  391 => 106,  386 => 105,  383 => 104,  379 => 84,  373 => 82,  370 => 81,  367 => 80,  361 => 72,  357 => 71,  354 => 70,  351 => 69,  348 => 68,  345 => 67,  339 => 66,  329 => 61,  322 => 59,  313 => 57,  309 => 55,  306 => 54,  297 => 52,  294 => 51,  288 => 36,  284 => 35,  280 => 34,  276 => 33,  262 => 25,  258 => 24,  244 => 13,  239 => 12,  236 => 11,  221 => 153,  219 => 146,  208 => 138,  204 => 137,  200 => 136,  186 => 127,  184 => 121,  180 => 119,  175 => 117,  170 => 103,  165 => 100,  156 => 97,  153 => 96,  139 => 95,  133 => 93,  125 => 91,  122 => 90,  101 => 88,  99 => 87,  96 => 86,  93 => 85,  91 => 80,  79 => 72,  76 => 67,  71 => 65,  68 => 54,  66 => 51,  51 => 12,  48 => 38,  46 => 10,  37 => 8,  279 => 103,  272 => 32,  267 => 98,  261 => 97,  253 => 95,  245 => 93,  242 => 92,  238 => 91,  234 => 90,  230 => 5,  226 => 87,  224 => 86,  218 => 81,  206 => 77,  199 => 75,  195 => 73,  191 => 130,  187 => 69,  185 => 68,  178 => 118,  173 => 104,  166 => 62,  162 => 61,  159 => 98,  155 => 59,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  117 => 39,  113 => 38,  110 => 37,  104 => 89,  98 => 33,  89 => 32,  86 => 31,  82 => 73,  78 => 29,  74 => 66,  70 => 27,  62 => 24,  56 => 23,  50 => 20,  31 => 1,  28 => 2,);
    }
}
