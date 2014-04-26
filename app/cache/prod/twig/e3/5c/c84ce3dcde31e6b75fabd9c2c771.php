<?php

/* SMAdminBundle:Company:new.html.twig */
class __TwigTemplate_e35cc84ce3dcde31e6b75fabd9c2c771 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_new"), "html", null, true);
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
            <label class=\"control-label\" for=\"input01\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'errors');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 66
        $context["isActive"] = 1;
        // line 67
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 68
            echo "                      ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 69
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 71
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 73
            echo "                      ";
            $context["isActive"] = 2;
            // line 74
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 77
        $context["isActive"] = 1;
        // line 78
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 79
            echo "                    ";
            $context["currentAL"] = null;
            // line 80
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["companyLanguage"]) {
                // line 81
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["companyLanguage"]) ? $context["companyLanguage"] : $this->getContext($context, "companyLanguage")), "vars"), "value"), "language"), "id") == $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"))) {
                    // line 82
                    echo "                            ";
                    $context["currentAL"] = (isset($context["companyLanguage"]) ? $context["companyLanguage"] : $this->getContext($context, "companyLanguage"));
                    // line 83
                    echo "                        ";
                }
                // line 84
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['companyLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                    ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 86
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 88
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 90
            echo "                            <fieldset>
                                ";
            // line 91
            if ((!(null === (isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL"))))) {
                // line 92
                echo "                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 95
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'errors');
                echo "
                                            ";
                // line 96
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 97
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                            ";
                } else {
                    // line 99
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget');
                    echo "
                                            ";
                }
                // line 101
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Address", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 107
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "address"), 'errors');
                echo "
                                            ";
                // line 108
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 109
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "address"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 111
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "address"), 'widget');
                    echo "
                                            ";
                }
                // line 113
                echo "                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 118
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'errors');
                echo "
                                            ";
                // line 119
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 120
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 122
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'widget');
                    echo "
                                            ";
                }
                // line 124
                echo "                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Video", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 129
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'errors');
                echo "
                                            ";
                // line 130
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 131
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "video"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 133
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "video"), 'widget');
                    echo "
                                            ";
                }
                // line 135
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 138
            echo "                            </fieldset>
                        </div>
                    ";
            // line 140
            $context["isActive"] = 2;
            // line 141
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 148
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
        return "SMAdminBundle:Company:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 148,  393 => 147,  389 => 146,  383 => 142,  377 => 141,  375 => 140,  371 => 138,  366 => 135,  360 => 133,  354 => 131,  352 => 130,  348 => 129,  343 => 127,  338 => 124,  332 => 122,  326 => 120,  324 => 119,  320 => 118,  315 => 116,  310 => 113,  304 => 111,  298 => 109,  296 => 108,  292 => 107,  287 => 105,  281 => 101,  275 => 99,  269 => 97,  267 => 96,  263 => 95,  258 => 93,  255 => 92,  253 => 91,  250 => 90,  244 => 88,  238 => 86,  235 => 85,  229 => 84,  226 => 83,  223 => 82,  220 => 81,  215 => 80,  212 => 79,  207 => 78,  205 => 77,  201 => 75,  195 => 74,  192 => 73,  184 => 71,  176 => 69,  173 => 68,  168 => 67,  166 => 66,  155 => 58,  151 => 57,  146 => 55,  138 => 50,  134 => 49,  129 => 47,  121 => 42,  117 => 41,  112 => 39,  105 => 35,  101 => 34,  96 => 32,  88 => 27,  84 => 26,  79 => 24,  71 => 19,  67 => 18,  62 => 16,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
