<?php

/* SMAdminBundle:News:new.html.twig */
class __TwigTemplate_f0283c208321998ef266724c5f109b74 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News Category", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_id"), 'errors');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_id"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
                    ";
        // line 36
        $context["selectName"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media_id"), "get", array(0 => "full_name"), "method");
        // line 37
        echo "                    ";
        echo $this->env->getExtension('sm.twig.media_extension')->selectMedia((isset($context["optMedias"]) ? $context["optMedias"] : $this->getContext($context, "optMedias")), (isset($context["optMediaTypes"]) ? $context["optMediaTypes"] : $this->getContext($context, "optMediaTypes")), (isset($context["selectName"]) ? $context["selectName"] : $this->getContext($context, "selectName")), (isset($context["mediaPath"]) ? $context["mediaPath"] : $this->getContext($context, "mediaPath")), array("multiple" => true));
        echo "
              </label>
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 46
        $context["isActive"] = 1;
        // line 47
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 48
            echo "                      ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 49
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 51
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 53
            echo "                      ";
            $context["isActive"] = 2;
            // line 54
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 57
        $context["isActive"] = 1;
        // line 58
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 59
            echo "                    ";
            $context["currentAL"] = null;
            // line 60
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "news_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["newsLanguage"]) {
                // line 61
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["newsLanguage"]) ? $context["newsLanguage"] : $this->getContext($context, "newsLanguage")), "vars"), "value"), "language"), "id") == $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"))) {
                    // line 62
                    echo "                            ";
                    $context["currentAL"] = (isset($context["newsLanguage"]) ? $context["newsLanguage"] : $this->getContext($context, "newsLanguage"));
                    // line 63
                    echo "                        ";
                }
                // line 64
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                    ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 66
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 68
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 70
            echo "                            <fieldset>
                                ";
            // line 71
            if ((!(null === (isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL"))))) {
                // line 72
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 75
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'errors');
                echo "
                                        ";
                // line 76
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 77
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 79
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 81
                echo "                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Intro", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 87
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "intro"), 'errors');
                echo "
                                        ";
                // line 88
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "intro"), 'widget');
                echo "
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 95
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'errors');
                echo "
                                        ";
                // line 96
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "description"), 'widget');
                echo "
                                    </div>
                                </div>

                                ";
            }
            // line 101
            echo "                            </fieldset>
                        </div>
                    ";
            // line 103
            $context["isActive"] = 2;
            // line 104
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:News:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 111,  301 => 110,  297 => 109,  291 => 105,  285 => 104,  283 => 103,  279 => 101,  271 => 96,  267 => 95,  262 => 93,  254 => 88,  250 => 87,  245 => 85,  239 => 81,  233 => 79,  227 => 77,  225 => 76,  221 => 75,  216 => 73,  213 => 72,  211 => 71,  208 => 70,  202 => 68,  196 => 66,  193 => 65,  187 => 64,  184 => 63,  181 => 62,  178 => 61,  173 => 60,  170 => 59,  165 => 58,  163 => 57,  159 => 55,  153 => 54,  150 => 53,  142 => 51,  134 => 49,  131 => 48,  126 => 47,  124 => 46,  111 => 37,  109 => 36,  105 => 35,  101 => 34,  95 => 31,  87 => 26,  83 => 25,  78 => 23,  71 => 19,  67 => 18,  62 => 16,  55 => 12,  51 => 11,  46 => 9,  37 => 5,  31 => 3,  28 => 2,);
    }
}
