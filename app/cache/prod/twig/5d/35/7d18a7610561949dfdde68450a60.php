<?php

/* SMFrontBundle::layout.product.detail.html.twig */
class __TwigTemplate_5d357d18a7610561949dfdde68450a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $this->displayBlock('title', $context, $blocks);
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
            <section class=\"specialty-page specialty-detail\">
              <aside class=\"sidebar-left\">
                <!-- BEGIN MENU LEFT -->
                ";
        // line 41
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:leftMenu", array(), array());
        // line 42
        echo "                <!-- END MENU LEFT -->

                <!-- BEGIN GIA CA THI TRUONG -->
                ";
        // line 45
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:pricesMarket", array(), array());
        // line 46
        echo "                <!-- END GIA CA THI TRUONG -->

                <!-- BEGIN SAN PHAM KHUYEN MAI-->
                ";
        // line 49
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:saleProduct", array(), array());
        // line 50
        echo "                <!-- END SAN PHAM KHUYEN MAI-->

                <div class=\"block contact-block\">
                  <!-- BEGIN SUPPORT-->
                  ";
        // line 54
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:support", array(), array());
        // line 55
        echo "                  <!-- END SUPPORT-->

                  <!-- BEGIN REGISTER TO GET PRODUCT -->
                  ";
        // line 58
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:registerGetProduct", array(), array());
        // line 59
        echo "                  <!-- END REGISTER TO GET PRODUCT -->
                </div>

                <!-- BEGIN COUNTER -->
                ";
        // line 63
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:counter", array(), array());
        // line 64
        echo "                <!-- END COUNTER -->
              </aside>
  
              <section class=\"main-content\">
                <section id=\"main\">
                    <!-- BEGIN BODY -->
                    ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "                    <!-- END BODY -->
                </section>
              </section>
            </section>          
            </div>
        </div>
        
        ";
        // line 78
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:feedback", array(), array());
        // line 79
        echo "        
        <!-- BEGIN FOOTER -->
        ";
        // line 81
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footer", array(), array());
        // line 82
        echo "        <!-- END FOOTER -->
      </div>
    </div>
    
      <!-- build:js js/libs.min.js-->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/libs.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/l10n.min.js-->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/l10n.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/plugins.min.js-->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/start.min.js-->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/start.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
  </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Product", array(), "SMFrontBundle"), "html", null, true);
    }

    // line 70
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
        return array (  214 => 70,  208 => 9,  200 => 100,  196 => 99,  186 => 95,  182 => 94,  178 => 93,  172 => 90,  166 => 87,  159 => 82,  157 => 81,  153 => 79,  151 => 78,  142 => 71,  124 => 59,  122 => 58,  117 => 55,  115 => 54,  109 => 50,  107 => 49,  100 => 45,  95 => 42,  93 => 41,  85 => 35,  83 => 34,  61 => 21,  56 => 19,  52 => 18,  48 => 17,  44 => 16,  40 => 15,  31 => 9,  21 => 1,  283 => 98,  280 => 97,  273 => 95,  267 => 92,  260 => 90,  252 => 88,  246 => 85,  239 => 83,  231 => 81,  229 => 80,  226 => 79,  221 => 78,  219 => 77,  205 => 72,  201 => 71,  194 => 66,  192 => 65,  190 => 96,  183 => 59,  177 => 56,  171 => 54,  169 => 53,  163 => 49,  160 => 48,  154 => 47,  148 => 45,  140 => 70,  137 => 42,  132 => 64,  130 => 63,  127 => 39,  121 => 37,  113 => 35,  111 => 34,  105 => 30,  102 => 46,  96 => 28,  90 => 26,  82 => 24,  79 => 23,  74 => 22,  71 => 25,  65 => 22,  57 => 17,  55 => 16,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
