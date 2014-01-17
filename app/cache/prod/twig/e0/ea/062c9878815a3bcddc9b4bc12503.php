<?php

/* SMFrontBundle::layout.company.html.twig */
class __TwigTemplate_e0ea062c9878815a3bcddc9b4bc12503 extends Twig_Template
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
            <section class=\"homepage\">
              <aside class=\"sidebar-left\">
                <!-- BEGIN MENU LEFT DAC SAN VUNG MIEN-->
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
        echo "                  <!-- END BODY -->
                </section>
                <aside class=\"sidebar-right\">
                  <!-- BEGIN VIDEO -->
                  ";
        // line 75
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:video", array(), array());
        // line 76
        echo "                  <!-- END VIDEO -->
                    
                  <!-- BEGIN HOT NEWS -->
                  ";
        // line 79
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:hotNews", array(), array());
        // line 80
        echo "                  <!-- END HOT NEWS -->
                  
                  <!-- BEGIN ADVERTISEMENT -->
                  ";
        // line 83
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:advertisement", array(), array());
        // line 84
        echo "                  <!-- END ADVERTISEMENT -->
                </aside>
              </section>
            </section>          
          </div>
        </div>
        ";
        // line 90
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:feedback", array(), array());
        // line 91
        echo "        
        <!-- BEGIN FOOTER -->
        ";
        // line 93
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footer", array(), array());
        // line 94
        echo "        <!-- END FOOTER -->
      </div>
    </div>
    
    <!-- build:js js/libs.min.js-->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/libs.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/l10n.min.js-->
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/l10n.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/plugins.min.js-->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
    <!-- build:js js/start.min.js-->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/start.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- endbuild-->
  </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logo Company", array(), "SMFrontBundle"), "html", null, true);
    }

    // line 70
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
        return array (  235 => 70,  229 => 9,  221 => 112,  217 => 111,  211 => 108,  207 => 107,  203 => 106,  193 => 102,  187 => 99,  180 => 94,  178 => 93,  174 => 91,  172 => 90,  162 => 83,  157 => 80,  148 => 75,  140 => 70,  132 => 64,  130 => 63,  122 => 58,  117 => 55,  115 => 54,  109 => 50,  107 => 49,  102 => 46,  93 => 41,  85 => 35,  83 => 34,  71 => 25,  65 => 22,  61 => 21,  56 => 19,  48 => 17,  44 => 16,  40 => 15,  31 => 9,  21 => 1,  199 => 105,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 53,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 79,  150 => 76,  147 => 46,  144 => 45,  142 => 71,  138 => 43,  129 => 41,  126 => 40,  124 => 59,  119 => 36,  113 => 34,  110 => 33,  100 => 45,  95 => 42,  87 => 24,  79 => 22,  77 => 21,  68 => 17,  62 => 16,  59 => 15,  54 => 14,  52 => 18,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
