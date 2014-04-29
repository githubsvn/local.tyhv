<?php

/* SMAdminBundle::admin.html.twig */
class __TwigTemplate_e202a4495fd9f6029b4d0056e032e144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'logo' => array($this, 'block_logo'),
            'profile' => array($this, 'block_profile'),
            'topbar_before_nav' => array($this, 'block_topbar_before_nav'),
            'topbar_nav' => array($this, 'block_topbar_nav'),
            'topbar_after_nav' => array($this, 'block_topbar_after_nav'),
            'grouplabel' => array($this, 'block_grouplabel'),
            'notice' => array($this, 'block_notice'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
        // line 38
        echo "
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>

        </head>
    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    ";
        // line 51
        $this->displayBlock('logo', $context, $blocks);
        // line 54
        echo "                    ";
        $this->displayBlock('profile', $context, $blocks);
        // line 65
        echo "                    <ul class=\"nav\">
                        ";
        // line 66
        $this->displayBlock('topbar_before_nav', $context, $blocks);
        // line 67
        echo "                        ";
        $this->displayBlock('topbar_nav', $context, $blocks);
        // line 72
        echo "                        ";
        $this->displayBlock('topbar_after_nav', $context, $blocks);
        // line 73
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    ";
        // line 80
        $this->displayBlock('grouplabel', $context, $blocks);
        // line 85
        echo "                    ";
        if (((array_key_exists("_breadcrumb", $context) && (!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))))) || array_key_exists("action", $context))) {
            // line 86
            echo "                        <ul class=\"breadcrumb\">
                            ";
            // line 87
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 88
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 89
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                        // line 90
                        echo "                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 91
                            echo "                                            <li><a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["uri"]) ? $context["uri"] : $this->getContext($context, "uri")), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</a><span class=\"divider\">/</span></li>
                                        ";
                        } else {
                            // line 93
                            echo "                                            <li class=\"active\">";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 95
                        echo "                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                                ";
                }
                // line 97
                echo "                            ";
            } else {
                // line 98
                echo "                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                            ";
            }
            // line 100
            echo "                        </ul>
                        <hr/>
                    ";
        }
        // line 103
        echo "
                    ";
        // line 104
        $this->displayBlock('notice', $context, $blocks);
        // line 117
        echo "
                    ";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "                </div>
            </div>
            ";
        // line 121
        $this->displayBlock('footer', $context, $blocks);
        // line 127
        echo "        </div>
        <!-- Loading image will be show when ajax called. -->
        <div class=\"modal hide\" id=\"ajaxModal\" style=\"text-align: center;\">
            <img alt=\"Loading, please wait..\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/img/loading.gif"), "html", null, true);
        echo "\" />
        </div>


        <!-- This block is contain language for JS-->
        <script type=\"text/javascript\">
            var js_lang_do_you_want_to_delete = '";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Do you want to delete", array(), "SMAdminBundle"), "html", null, true);
        echo "';
            var js_lang_please_choose_at_least_one_item = '";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Please choose at least one item", array(), "SMAdminBundle"), "html", null, true);
        echo "';
            var js_lang_do_you_want_to_change_status = '";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Do you want to change status of the item", array(), "SMAdminBundle"), "html", null, true);
        echo "';
        </script>

        <!-- -->

        <!-- Le javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        ";
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        // line 153
        echo "        ";
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administrator";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/DataTables/media/css/demo_table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <style type=\"text/css\">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <!--<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js') }}\"></script>-->
            <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        ";
    }

    // line 51
    public function block_logo($context, array $blocks = array())
    {
        // line 52
        echo "                    <a style=\"padding-top: 12px;\" class=\"brand\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_admin_home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Welcome", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
                    ";
    }

    // line 54
    public function block_profile($context, array $blocks = array())
    {
        // line 55
        echo "                    <div class=\"btn-group pull-right\">
                        <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:void(0)\">
                            <i class=\"icon-user icon-white\"></i>";
        // line 57
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "fullname"), "html", null, true);
            echo " ";
        }
        echo "<span class=\"caret\"></span> </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profile", array(), "SMAdminBundle"), "html", null, true);
        echo "</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_admin_logout"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sign Out", array(), "SMAdminBundle"), "html", null, true);
        echo "</a></li>
                        </ul>
                    </div>
                    ";
    }

    // line 66
    public function block_topbar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 67
    public function block_topbar_nav($context, array $blocks = array())
    {
        // line 68
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 69
            echo "                                ";
            echo $this->env->getExtension('actions')->renderAction("SMAdminBundle:Default:menu", array(), array());
            // line 70
            echo "                            ";
        }
        // line 71
        echo "                        ";
    }

    // line 72
    public function block_topbar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 80
    public function block_grouplabel($context, array $blocks = array())
    {
        // line 81
        echo "                        ";
        if (array_key_exists("_grouplabel", $context)) {
            // line 82
            echo "                        <h1>";
            echo twig_escape_filter($this->env, (isset($context["_grouplabel"]) ? $context["_grouplabel"] : $this->getContext($context, "_grouplabel")), "html", null, true);
            echo "</h1>
                        ";
        }
        // line 84
        echo "                    ";
    }

    // line 104
    public function block_notice($context, array $blocks = array())
    {
        // line 105
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 106
            echo "                            ";
            $context["session_var"] = ("sm_flash_" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level")));
            // line 107
            echo "                            ";
            $context["session_flashbag"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : $this->getContext($context, "session_var"))), "method");
            // line 108
            echo "                            ";
            if ((isset($context["session_flashbag"]) ? $context["session_flashbag"] : $this->getContext($context, "session_flashbag"))) {
                // line 109
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["session_flashbag"]) ? $context["session_flashbag"] : $this->getContext($context, "session_flashbag")));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 110
                    echo "                                <div class=\"alert ";
                    echo twig_escape_filter($this->env, ("alert-" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level"))), "html", null, true);
                    echo "\">
                                    ";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), array(), "SMAdminBundle"), "html", null, true);
                    echo "
                                </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                            ";
            }
            // line 115
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                    ";
    }

    // line 118
    public function block_body($context, array $blocks = array())
    {
    }

    // line 121
    public function block_footer($context, array $blocks = array())
    {
        // line 122
        echo "            <hr/>
            <footer>
                <p>&copy; Admin Panel 2013</p>
            </footer>
            ";
    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        // line 147
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/prettify.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/common.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/static/admin/js/twig.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/DataTables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 151,  464 => 150,  460 => 149,  456 => 148,  451 => 147,  448 => 146,  440 => 122,  437 => 121,  432 => 118,  428 => 116,  422 => 115,  419 => 114,  410 => 111,  405 => 110,  400 => 109,  397 => 108,  394 => 107,  391 => 106,  386 => 105,  383 => 104,  379 => 84,  373 => 82,  370 => 81,  367 => 80,  361 => 72,  357 => 71,  354 => 70,  351 => 69,  348 => 68,  345 => 67,  339 => 66,  329 => 61,  322 => 59,  313 => 57,  309 => 55,  306 => 54,  297 => 52,  294 => 51,  288 => 36,  284 => 35,  280 => 34,  276 => 33,  262 => 25,  258 => 24,  244 => 13,  239 => 12,  236 => 11,  221 => 153,  219 => 146,  208 => 138,  204 => 137,  200 => 136,  186 => 127,  184 => 121,  180 => 119,  175 => 117,  170 => 103,  165 => 100,  156 => 97,  153 => 96,  139 => 95,  133 => 93,  125 => 91,  122 => 90,  101 => 88,  99 => 87,  96 => 86,  93 => 85,  91 => 80,  79 => 72,  76 => 67,  71 => 65,  68 => 54,  66 => 51,  51 => 39,  48 => 38,  46 => 11,  37 => 5,  279 => 103,  272 => 32,  267 => 98,  261 => 97,  253 => 95,  245 => 93,  242 => 92,  238 => 91,  234 => 90,  230 => 5,  226 => 87,  224 => 86,  218 => 81,  206 => 77,  199 => 75,  195 => 73,  191 => 130,  187 => 69,  185 => 68,  178 => 118,  173 => 104,  166 => 62,  162 => 61,  159 => 98,  155 => 59,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  117 => 39,  113 => 38,  110 => 37,  104 => 89,  98 => 33,  89 => 32,  86 => 31,  82 => 73,  78 => 29,  74 => 66,  70 => 27,  62 => 24,  56 => 23,  50 => 20,  31 => 1,  28 => 2,);
    }
}
