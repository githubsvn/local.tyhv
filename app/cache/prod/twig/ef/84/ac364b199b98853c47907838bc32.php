<?php

/* SMAdminBundle:Company:edit.html.twig */
class __TwigTemplate_ef84ac364b199b98853c47907838bc32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Type", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Phone", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fax", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Website", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logo", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "thumb"), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "thumb"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\"></label>
            <div class=\"controls\">
                ";
        // line 57
        echo $this->env->getExtension('mtx.twig.show_image_extension')->showImages((isset($context["arrImgs"]) ? $context["arrImgs"] : $this->getContext($context, "arrImgs")), (isset($context["imgPath"]) ? $context["imgPath"] : $this->getContext($context, "imgPath")));
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />
        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 72
        $context["isActive"] = 1;
        // line 73
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 74
            echo "                      ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 75
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 77
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 79
            echo "                      ";
            $context["isActive"] = 2;
            // line 80
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 83
        $context["isActive"] = 1;
        // line 84
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 85
            echo "                    ";
            $context["currentAL"] = null;
            // line 86
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["companyLanguage"]) {
                // line 87
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["companyLanguage"]) ? $context["companyLanguage"] : $this->getContext($context, "companyLanguage")), "vars"), "value"), "language"), "id") == $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"))) {
                    // line 88
                    echo "                            ";
                    $context["currentAL"] = (isset($context["companyLanguage"]) ? $context["companyLanguage"] : $this->getContext($context, "companyLanguage"));
                    // line 89
                    echo "                        ";
                }
                // line 90
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['companyLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 92
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 94
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 96
            echo "                            <fieldset>
                                ";
            // line 97
            if ((!(null === (isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL"))))) {
                // line 98
                echo "                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 101
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'errors');
                echo "
                                            ";
                // line 102
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 103
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                            ";
                } else {
                    // line 105
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget');
                    echo "
                                            ";
                }
                // line 107
                echo "                                        </div>
                                    </div>
                                    
                                <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Alias", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 113
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'errors');
                echo "
                                            ";
                // line 114
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 115
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "alias"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                            ";
                } else {
                    // line 117
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "alias"), 'widget');
                    echo "
                                            ";
                }
                // line 119
                echo "                                        </div>
                                    </div>
                                
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Address", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 125
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "address"), 'errors');
                echo "
                                            ";
                // line 126
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 127
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "address"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 129
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "address"), 'widget');
                    echo "
                                            ";
                }
                // line 131
                echo "                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 136
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'errors');
                echo "
                                            ";
                // line 137
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 138
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 140
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'widget');
                    echo "
                                            ";
                }
                // line 142
                echo "                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                            <label class=\"control-label\" for=\"input01\">";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Video", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                            <div class=\"controls\">
                                                ";
                // line 147
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'errors');
                echo "
                                                ";
                // line 148
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 149
                    echo "                                                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "video"), 'widget');
                    echo "
                                                ";
                } else {
                    // line 151
                    echo "                                                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "video"), 'widget');
                    echo "
                                                ";
                }
                // line 153
                echo "                                            </div>
                                        </div>
                                ";
            }
            // line 156
            echo "                            </fieldset>
                        </div>
                    ";
            // line 158
            $context["isActive"] = 2;
            // line 159
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Company:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 166,  431 => 165,  427 => 164,  421 => 160,  415 => 159,  413 => 158,  409 => 156,  404 => 153,  398 => 151,  392 => 149,  390 => 148,  386 => 147,  381 => 145,  376 => 142,  370 => 140,  364 => 138,  362 => 137,  358 => 136,  353 => 134,  348 => 131,  342 => 129,  336 => 127,  334 => 126,  330 => 125,  325 => 123,  319 => 119,  313 => 117,  307 => 115,  305 => 114,  301 => 113,  296 => 111,  290 => 107,  284 => 105,  278 => 103,  276 => 102,  272 => 101,  267 => 99,  264 => 98,  262 => 97,  259 => 96,  253 => 94,  247 => 92,  244 => 91,  238 => 90,  235 => 89,  232 => 88,  229 => 87,  224 => 86,  221 => 85,  216 => 84,  214 => 83,  210 => 81,  204 => 80,  201 => 79,  193 => 77,  185 => 75,  182 => 74,  177 => 73,  175 => 72,  165 => 65,  161 => 64,  156 => 62,  148 => 57,  138 => 50,  134 => 49,  129 => 47,  121 => 42,  117 => 41,  112 => 39,  105 => 35,  101 => 34,  96 => 32,  88 => 27,  84 => 26,  79 => 24,  71 => 19,  67 => 18,  62 => 16,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
