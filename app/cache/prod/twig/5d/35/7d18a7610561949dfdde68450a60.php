<?php

/* SMFrontBundle::layout.product.detail.html.twig */
class __TwigTemplate_5d357d18a7610561949dfdde68450a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]><html lang=\"en\" class=\"no-js ie ie8\"><![endif]-->
<!--[if IE 9]><html lang=\"en\" class=\"no-js ie ie9\"><![endif]-->
<!--[if gt IE 9]><!-->
<html lang=\"en\" class=\"no-js\">
  <!--<![endif]-->
  <head>
    ";
        // line 8
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:meta", array(), array());
        // line 9
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/apple-touch-icon-57x57.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/apple-touch-icon-144x144.png"), "html", null, true);
        echo "\">
    <!-- build:css css/style.min.css-->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/css/custom.css"), "html", null, true);
        echo "\">
    <!-- endbuild-->
    <!-- build:js js/modernizr.min.js-->
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
  </head>
  <body>
    <div class=\"wrapper\">
      <div class=\"inner\">
        <div id=\"container\">
          <header id=\"header\">
            <!-- BEGIN HEADER -->
            ";
        // line 28
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:header", array(), array());
        // line 29
        echo "            <!-- END HEADER -->
          </header>
          <div class=\"inner\">
            <section class=\"specialty-page specialty-detail\">
              <aside class=\"sidebar-left\">
                <!-- BEGIN MENU LEFT -->
                ";
        // line 35
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:leftMenu", array(), array());
        // line 36
        echo "                <!-- END MENU LEFT -->

                <!-- BEGIN GIA CA THI TRUONG -->
                ";
        // line 39
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:pricesMarket", array(), array());
        // line 40
        echo "                <!-- END GIA CA THI TRUONG -->

                <!-- BEGIN SAN PHAM KHUYEN MAI-->
                ";
        // line 43
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:saleProduct", array(), array());
        // line 44
        echo "                <!-- END SAN PHAM KHUYEN MAI-->

                <div class=\"block contact-block\">
                  <!-- BEGIN SUPPORT-->
                  ";
        // line 48
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:support", array(), array());
        // line 49
        echo "                  <!-- END SUPPORT-->

                  <!-- BEGIN REGISTER TO GET PRODUCT -->
                  ";
        // line 52
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:registerGetProduct", array(), array());
        // line 53
        echo "                  <!-- END REGISTER TO GET PRODUCT -->
                </div>

                <!-- BEGIN COUNTER -->
                ";
        // line 57
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:counter", array(), array());
        // line 58
        echo "                <!-- END COUNTER -->
              </aside>
  
              <section class=\"main-content\">
                <section id=\"main\">
                    <!-- BEGIN BODY -->
                    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "                    <!-- END BODY -->
                </section>
              </section>
            </section>          
            </div>
        </div>
        
        ";
        // line 72
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:feedback", array(), array());
        // line 73
        echo "        
        <!-- BEGIN FOOTER -->
        ";
        // line 75
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footer", array(), array());
        // line 76
        echo "        <!-- END FOOTER -->
      </div>
    </div>
    
      <!-- build:js js/libs.min.js-->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/libs.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/l10n.min.js-->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/l10n.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/plugins.min.js-->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/start.min.js-->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/start.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
  </body>
</html>";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMFrontBundle::layout.product.detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 64,  192 => 94,  188 => 93,  182 => 90,  178 => 89,  174 => 88,  170 => 87,  164 => 84,  158 => 81,  151 => 76,  149 => 75,  145 => 73,  143 => 72,  134 => 65,  132 => 64,  124 => 58,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 44,  99 => 43,  94 => 40,  92 => 39,  87 => 36,  85 => 35,  77 => 29,  75 => 28,  63 => 19,  57 => 16,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  31 => 9,  29 => 8,  20 => 1,);
    }
}
