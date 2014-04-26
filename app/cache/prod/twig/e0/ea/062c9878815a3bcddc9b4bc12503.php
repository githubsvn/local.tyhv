<?php

/* SMFrontBundle::layout.company.html.twig */
class __TwigTemplate_e0ea062c9878815a3bcddc9b4bc12503 extends Twig_Template
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
        // line 84
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:feedback", array(), array());
        // line 85
        echo "        
        <!-- BEGIN FOOTER -->
        ";
        // line 87
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footer", array(), array());
        // line 88
        echo "        <!-- END FOOTER -->
      </div>
    </div>
    ";
        // line 91
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:leftAds", array(), array());
        // line 92
        echo "    <!-- build:js js/libs.min.js-->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/libs.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/l10n.min.js-->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/l10n.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/plugins.min.js-->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/start.min.js-->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/start.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.youtubeplaylist.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
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
        return "SMFrontBundle::layout.company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 44,  99 => 43,  94 => 40,  92 => 39,  85 => 35,  75 => 28,  63 => 19,  57 => 16,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  31 => 9,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 34,  110 => 33,  100 => 29,  95 => 26,  87 => 36,  79 => 22,  77 => 29,  68 => 17,  62 => 16,  59 => 15,  54 => 14,  52 => 13,  43 => 7,  38 => 4,  35 => 3,  29 => 8,);
    }
}
