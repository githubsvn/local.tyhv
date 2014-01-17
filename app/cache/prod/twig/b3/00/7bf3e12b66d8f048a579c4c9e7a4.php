<?php

/* SMFrontBundle::layout.home.html.twig */
class __TwigTemplate_b3007bf3e12b66d8f048a579c4c9e7a4 extends Twig_Template
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
    <meta charset=\"utf-8\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Toi Yeu Hang Viet", array(), "SMFrontBundle"), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"robots\" content=\"index, follow\">
    <meta name=\"author\" content=\"\">
    <meta name=\"viewport\" content=\"width=1300\">
    <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/apple-touch-icon-57x57.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/images/apple-touch-icon-144x144.png"), "html", null, true);
        echo "\">
    <!-- build:css css/style.min.css-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/css/custom.css"), "html", null, true);
        echo "\">
    <!-- endbuild-->
    <!-- build:js js/modernizr.min.js-->
    <script src=\"";
        // line 25
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
        // line 34
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:header", array(), array());
        // line 35
        echo "            <!-- END HEADER -->
          </header>
          <div class=\"inner\">
            <section class=\"homepage\">
              <!-- BEGIN LEFT COLUMN-->
              <aside class=\"sidebar-left\">
                <!-- BEGIN MENU LEFT -->
                ";
        // line 42
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:leftMenu", array(), array());
        // line 43
        echo "                <!-- END MENU LEFT -->

                <!-- BEGIN GIA CA THI TRUONG -->
                ";
        // line 46
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:pricesMarket", array(), array());
        // line 47
        echo "                <!-- END GIA CA THI TRUONG -->

                <!-- BEGIN SAN PHAM KHUYEN MAI-->
                ";
        // line 50
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:saleProduct", array(), array());
        // line 51
        echo "                <!-- END SAN PHAM KHUYEN MAI-->

                <div class=\"block contact-block\">
                  <!-- BEGIN SUPPORT-->
                  ";
        // line 55
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:support", array(), array());
        // line 56
        echo "                  <!-- END SUPPORT-->

                  <!-- BEGIN REGISTER TO GET PRODUCT -->
                  ";
        // line 59
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:registerGetProduct", array(), array());
        // line 60
        echo "                  <!-- END REGISTER TO GET PRODUCT -->
                </div>

                <!-- BEGIN COUNTER -->
                ";
        // line 64
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:counter", array(), array());
        // line 65
        echo "                <!-- END COUNTER -->
            </aside>
            <!-- END LEFT COLUMN-->
  
              <section class=\"main-content\">
                
                <!-- BEGIN SLIDE-->
                ";
        // line 72
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:slide", array(), array());
        // line 73
        echo "                <!-- END SLIDE-->
                
                <section id=\"main\">
                <!-- BEGIN BODY -->
                ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "                <!-- END BODY -->
                
                <!-- BEGIN HOT NEWS -->
                  ";
        // line 81
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:company", array(), array());
        // line 82
        echo "                  <!-- END HOT NEWS -->
                </section>
                
                <!-- BEGIN RIGHT -->
                <!-- END RIGHT -->
                <aside class=\"sidebar-right\">
                  <!-- BEGIN VIDEO -->
                  ";
        // line 89
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:video", array(), array());
        // line 90
        echo "                  <!-- END VIDEO -->
                    
                  <!-- BEGIN HOT NEWS -->
                  ";
        // line 93
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:hotNews", array(), array());
        // line 94
        echo "                  <!-- END HOT NEWS -->
                  
                  <!-- BEGIN ADVERTISEMENT -->
                  ";
        // line 97
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:advertisement", array(), array());
        // line 98
        echo "                  <!-- END ADVERTISEMENT -->
                  
                </aside>
                  
              </section>
            </section>
          </div>
        </div>
        ";
        // line 106
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:feedback", array(), array());
        // line 107
        echo "        
        <!-- BEGIN FOOTER -->
        ";
        // line 109
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footer", array(), array());
        // line 110
        echo "        <!-- END FOOTER -->
        
      </div>
    </div>
      
    <!-- build:js js/libs.min.js-->
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/libs.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/l10n.min.js-->
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/l10n.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/plugins.min.js-->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/start.min.js-->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/start.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
  </body>
</html>";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMFrontBundle::layout.home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 77,  243 => 129,  239 => 128,  233 => 125,  229 => 124,  225 => 123,  221 => 122,  215 => 119,  209 => 116,  201 => 110,  199 => 109,  195 => 107,  193 => 106,  183 => 98,  181 => 97,  176 => 94,  174 => 93,  169 => 90,  167 => 89,  158 => 82,  156 => 81,  151 => 78,  149 => 77,  143 => 73,  141 => 72,  132 => 65,  130 => 64,  124 => 60,  122 => 59,  117 => 56,  115 => 55,  109 => 51,  107 => 50,  102 => 47,  100 => 46,  95 => 43,  93 => 42,  84 => 35,  82 => 34,  70 => 25,  64 => 22,  60 => 21,  55 => 19,  51 => 18,  47 => 17,  43 => 16,  39 => 15,  30 => 9,  20 => 1,  31 => 3,  28 => 2,);
    }
}
