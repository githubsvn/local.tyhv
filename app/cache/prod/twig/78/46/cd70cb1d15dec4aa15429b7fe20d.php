<?php

/* SMFrontBundle::layout.news.html.twig */
class __TwigTemplate_7846cd70cb1d15dec4aa15429b7fe20d extends Twig_Template
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
            <section class=\"homepage\">
              <aside class=\"sidebar-left\">
                <!-- BEGIN MENU LEFT DAC SAN VUNG MIEN-->
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
        echo "                  <!-- END BODY -->
                </section>
                <aside class=\"sidebar-right\">
                  <!-- BEGIN VIDEO -->
                  ";
        // line 69
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:video", array(), array());
        // line 70
        echo "                  <!-- END VIDEO -->
                    
                  <!-- BEGIN HOT NEWS -->
                  ";
        // line 73
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:hotNews", array(), array());
        // line 74
        echo "                  <!-- END HOT NEWS -->
                  
                  <!-- BEGIN ADVERTISEMENT -->
                  ";
        // line 77
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:advertisement", array(), array());
        // line 78
        echo "                  <!-- END ADVERTISEMENT -->
                </aside>
              </section>
            </section>          
          </div>
        </div>
        
        ";
        // line 85
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:feedback", array(), array());
        // line 86
        echo "        
        <!-- BEGIN FOOTER -->
        ";
        // line 88
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footer", array(), array());
        // line 89
        echo "        <!-- END FOOTER -->
      </div>
    </div>
    ";
        // line 92
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:leftAds", array(), array());
        // line 93
        echo "    <!-- build:js js/libs.min.js-->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/libs.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/l10n.min.js-->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/l10n.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/plugins.min.js-->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/start.min.js-->
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/start.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.youtubeplaylist.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/home.js"), "html", null, true);
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
        return "SMFrontBundle::layout.news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 64,  225 => 109,  221 => 108,  213 => 106,  207 => 103,  199 => 101,  195 => 100,  189 => 97,  183 => 94,  178 => 92,  173 => 89,  171 => 88,  167 => 86,  165 => 85,  156 => 78,  154 => 77,  149 => 74,  147 => 73,  142 => 70,  140 => 69,  134 => 65,  132 => 64,  124 => 58,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 44,  99 => 43,  94 => 40,  92 => 39,  87 => 36,  85 => 35,  77 => 29,  57 => 16,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  31 => 9,  20 => 1,  255 => 88,  247 => 84,  241 => 83,  231 => 81,  229 => 80,  226 => 79,  223 => 78,  220 => 77,  217 => 107,  214 => 75,  211 => 74,  206 => 73,  203 => 102,  200 => 71,  198 => 70,  194 => 69,  185 => 67,  182 => 66,  180 => 93,  175 => 62,  169 => 60,  166 => 59,  159 => 57,  152 => 53,  146 => 50,  138 => 48,  131 => 44,  123 => 41,  115 => 39,  113 => 38,  110 => 37,  105 => 36,  103 => 35,  97 => 31,  89 => 26,  80 => 24,  75 => 28,  69 => 19,  63 => 19,  61 => 16,  56 => 14,  53 => 15,  51 => 12,  43 => 7,  38 => 4,  35 => 3,  29 => 8,);
    }
}
