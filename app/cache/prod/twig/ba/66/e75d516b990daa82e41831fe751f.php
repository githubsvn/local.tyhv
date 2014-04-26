<?php

/* SMAdminBundle:Category:edit.html.twig */
class __TwigTemplate_ba66e75d516b990daa82e41831fe751f extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Category Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h1>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 26
        $context["isActive"] = 1;
        // line 27
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 28
            echo "                      ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 29
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 31
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 33
            echo "                      ";
            $context["isActive"] = 2;
            // line 34
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 37
        $context["isActive"] = 1;
        // line 38
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 39
            echo "                    ";
            $context["currentAL"] = null;
            // line 40
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["ctLanguage"]) {
                // line 41
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ctLanguage"]) ? $context["ctLanguage"] : $this->getContext($context, "ctLanguage")), "vars"), "value"), "language"), "id") == $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"))) {
                    // line 42
                    echo "                            ";
                    $context["currentAL"] = (isset($context["ctLanguage"]) ? $context["ctLanguage"] : $this->getContext($context, "ctLanguage"));
                    // line 43
                    echo "                        ";
                }
                // line 44
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 46
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 48
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 50
            echo "                            <fieldset>
                                ";
            // line 51
            if ((!(null === (isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL"))))) {
                // line 52
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 55
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'errors');
                echo "
                                        ";
                // line 56
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 57
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 59
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 61
                echo "                                    </div>
                                </div>
                                ";
            }
            // line 64
            echo "                            </fieldset>
                        </div>
                    ";
            // line 66
            $context["isActive"] = 2;
            // line 67
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 74,  223 => 73,  219 => 72,  213 => 68,  207 => 67,  205 => 66,  201 => 64,  196 => 61,  190 => 59,  184 => 57,  182 => 56,  178 => 55,  173 => 53,  170 => 52,  168 => 51,  165 => 50,  159 => 48,  153 => 46,  150 => 45,  144 => 44,  141 => 43,  138 => 42,  135 => 41,  130 => 40,  127 => 39,  122 => 38,  120 => 37,  116 => 35,  110 => 34,  107 => 33,  99 => 31,  91 => 29,  88 => 28,  83 => 27,  81 => 26,  70 => 18,  66 => 17,  61 => 15,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
