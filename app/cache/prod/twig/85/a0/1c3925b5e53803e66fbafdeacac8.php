<?php

/* SMAdminBundle::admin.login.html.twig */
class __TwigTemplate_85a01c3925b5e53803e66fbafdeacac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'bootstraps' => array($this, 'block_bootstraps'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Le styles -->
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('bootstraps', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        </body>
    </html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 30
    public function block_bootstraps($context, array $blocks = array())
    {
        // line 31
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "            <script>
              \$('.form-login').css({
                'margin-left':-(\$('.form-login').outerWidth()/2),
                'margin-top':-(\$('.form-login').outerHeight()/2)
              });
              \$(window).resize(function () {
                \$('.form-login').css({
                  'margin-left':-(\$('.form-login').outerWidth()/2),
                  'margin-top':-(\$('.form-login').outerHeight()/2)
                });
              });
              \$('#form-login-btnLogin').click(function () {
                var btn = \$(this)
                btn.button('loading');
                setTimeout(function () {
                  btn.button('reset');
                }, 3000)
              });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::admin.login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  125 => 34,  119 => 32,  114 => 31,  111 => 30,  106 => 29,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  73 => 13,  68 => 12,  65 => 11,  59 => 5,  53 => 55,  50 => 34,  47 => 30,  45 => 29,  41 => 27,  39 => 11,  30 => 5,  24 => 1,  57 => 17,  49 => 11,  43 => 8,  40 => 7,  38 => 6,  31 => 3,  28 => 2,);
    }
}
