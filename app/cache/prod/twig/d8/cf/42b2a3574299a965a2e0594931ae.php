<?php

/* SMFrontBundle::layout.product.html.twig */
class __TwigTemplate_d8cf42b2a3574299a965a2e0594931ae extends Twig_Template
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
                   
                  <!-- BEGIN NEW PRODUCT -->
                  ";
        // line 68
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:newProduct", array(), array());
        // line 69
        echo "                  <!-- END NEW PRODUCT -->
                  
                </section>
                <aside class=\"sidebar-right\">
                  <!-- BEGIN VIDEO -->
                  ";
        // line 74
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:video", array(), array());
        // line 75
        echo "                  <!-- END VIDEO -->
                    
                  <!-- BEGIN HOT NEWS -->
                  ";
        // line 78
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:hotNews", array(), array());
        // line 79
        echo "                  <!-- END HOT NEWS -->
                  
                  <!-- BEGIN ADVERTISEMENT -->
                  ";
        // line 82
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:advertisement", array(), array());
        // line 83
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
    ";
        // line 97
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:leftAds", array(), array());
        // line 98
        echo "    <!-- build:js js/libs.min.js-->
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
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/front/js/jquery.youtubeplaylist.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
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
        return "SMFrontBundle::layout.product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 64,  229 => 113,  225 => 112,  221 => 111,  215 => 108,  211 => 107,  207 => 106,  203 => 105,  191 => 99,  188 => 98,  186 => 97,  179 => 93,  173 => 90,  164 => 83,  162 => 82,  157 => 79,  155 => 78,  150 => 75,  148 => 74,  141 => 69,  139 => 68,  134 => 65,  132 => 64,  116 => 53,  109 => 49,  107 => 48,  101 => 44,  99 => 43,  94 => 40,  92 => 39,  87 => 36,  85 => 35,  75 => 28,  57 => 16,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  31 => 9,  20 => 1,  308 => 110,  300 => 106,  294 => 105,  284 => 103,  282 => 102,  279 => 101,  276 => 100,  273 => 99,  270 => 98,  267 => 97,  264 => 96,  259 => 95,  256 => 94,  253 => 93,  251 => 92,  247 => 91,  238 => 89,  235 => 88,  233 => 114,  228 => 84,  222 => 82,  219 => 81,  212 => 79,  204 => 74,  197 => 102,  192 => 70,  185 => 66,  181 => 94,  175 => 91,  169 => 60,  161 => 55,  154 => 53,  147 => 51,  140 => 47,  136 => 46,  130 => 45,  124 => 58,  122 => 57,  119 => 39,  114 => 52,  112 => 37,  106 => 33,  95 => 27,  91 => 26,  82 => 24,  77 => 29,  71 => 19,  63 => 19,  61 => 16,  56 => 14,  53 => 15,  51 => 12,  43 => 7,  38 => 4,  35 => 3,  29 => 8,);
    }
}
