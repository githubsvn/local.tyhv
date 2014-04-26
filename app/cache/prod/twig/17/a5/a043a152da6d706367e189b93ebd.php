<?php

/* SMAdminBundle:Menu:edit.html.twig */
class __TwigTemplate_17a5a043a152da6d706367e189b93ebd extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var type = \$('#sm_bundle_adminbundle_menutype_type').attr('value');
        var link = ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["mnuTypeLink"]) ? $context["mnuTypeLink"] : $this->getContext($context, "mnuTypeLink")), "html", null, true);
        echo ";

        if (type != link) {
            \$(\"#url\").hide();
            \$(\"#param\").show();
            \$(\"input[id=sm_bundle_adminbundle_menutype_url]\").attr('value','');
        } else {
            \$(\"#url\").show();
            \$(\"#param\").hide();
        }



        \$(\"#sm_bundle_adminbundle_menutype_type\").bind(\"change\", function(){
            var mnuTypeText = ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["mnuTypeText"]) ? $context["mnuTypeText"] : $this->getContext($context, "mnuTypeText")), "html", null, true);
        echo ";
            var mnuTypeLink = ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["mnuTypeLink"]) ? $context["mnuTypeLink"] : $this->getContext($context, "mnuTypeLink")), "html", null, true);
        echo ";
            var typeMenu = \$(this).attr('value');

            if (typeMenu == mnuTypeText || typeMenu == mnuTypeLink) {
                \$('#sm_bundle_adminbundle_menutype_param').removeAttr(\"required\");
            } else {
                \$(\"#sm_bundle_adminbundle_menutype_param\").attr(\"required\", \"true\");
            }

            if (typeMenu == mnuTypeLink) {
                \$(\"#url\").show();
                \$(\"#param\").hide();
            } else {
                \$(\"#url\").hide();
                \$(\"#param\").show();
            }

            var urlMenu = \"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_get_param"), "html", null, true);
        echo "\" + '/' + typeMenu;
            \$.ajax({url:urlMenu, success:function(data){
                //remove all option of the select
                \$('#sm_bundle_adminbundle_menutype_param').children().remove();
                //set new option for select
                var jsonData = JSON.parse(data);
                \$.each(jsonData, function(index, item) {
                    \$(\"#sm_bundle_adminbundle_menutype_param\").append(\"<option value=\" + item.id + \">\" + item.name + \"</option>\");
                });
            }});

            //Call ajax
            \$('#ajaxModal').modal();
            \$('#ajaxModal').ajaxStart(function() {
                \$(this).show();
            })
            .ajaxStop(function() {
                \$('#ajaxModal').modal('hide')
            });
        });

        \$(\"#sm_bundle_adminbundle_menutype_position\").bind(\"change\", function(){
            var position = \$(this).attr('value');

            var urlGetParent = \"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_get_menuparent"), "html", null, true);
        echo "\" + '/' + position;
            \$.ajax({url:urlGetParent, success:function(data){
                //remove all option of the select
                \$('#sm_bundle_adminbundle_menutype_parent').children().remove();
                //set new option for select
                var jsonData = JSON.parse(data);
                \$.each(jsonData, function(index, item) {
                    \$(\"#sm_bundle_adminbundle_menutype_parent\").append(\"<option value=\" + item.id + \">\" + item.name + \"</option>\");
                });
            }});

            //Call ajax
            \$('#ajaxModal').modal();
            \$('#ajaxModal').ajaxStart(function() {
                \$(this).show();
            })
            .ajaxStop(function() {
                \$('#ajaxModal').modal('hide')
            });
        });


    });
</script>

<form action=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Position", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget');
        echo "
            </div>
        </div>
            
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), 'errors');
        echo "
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Type", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "
                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"url\">
            <label class=\"control-label\" for=\"input01\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url"), 'errors');
        echo "
                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"param\">
            <label class=\"control-label\" for=\"input01\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "param"), 'errors');
        echo "
                ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "param"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'errors');
        echo "
                ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 139
        $context["isActive"] = 1;
        // line 140
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 141
            echo "                      ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 142
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 144
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 146
            echo "                      ";
            $context["isActive"] = 2;
            // line 147
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 150
        $context["isActive"] = 1;
        // line 151
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 152
            echo "                    ";
            $context["currentAL"] = null;
            // line 153
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["ctLanguage"]) {
                // line 154
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ctLanguage"]) ? $context["ctLanguage"] : $this->getContext($context, "ctLanguage")), "vars"), "value"), "language"), "id") == $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"))) {
                    // line 155
                    echo "                            ";
                    $context["currentAL"] = (isset($context["ctLanguage"]) ? $context["ctLanguage"] : $this->getContext($context, "ctLanguage"));
                    // line 156
                    echo "                        ";
                }
                // line 157
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                    ";
            if (((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")) == 1)) {
                // line 159
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 161
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 163
            echo "                            <fieldset>
                                ";
            // line 164
            if ((!(null === (isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL"))))) {
                // line 165
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 166
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 168
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'errors');
                echo "
                                        ";
                // line 169
                if (($this->getAttribute((isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "vars"), "value"), "language"), "name"))) {
                    // line 170
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 172
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["currentAL"]) ? $context["currentAL"] : $this->getContext($context, "currentAL")), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 174
                echo "                                    </div>
                                </div>
                                ";
            }
            // line 177
            echo "                            </fieldset>
                        </div>
                    ";
            // line 179
            $context["isActive"] = 2;
            // line 180
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Menu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 187,  387 => 186,  383 => 185,  377 => 181,  371 => 180,  369 => 179,  365 => 177,  360 => 174,  354 => 172,  348 => 170,  346 => 169,  342 => 168,  337 => 166,  334 => 165,  332 => 164,  329 => 163,  323 => 161,  317 => 159,  314 => 158,  308 => 157,  305 => 156,  302 => 155,  299 => 154,  294 => 153,  291 => 152,  286 => 151,  284 => 150,  280 => 148,  274 => 147,  271 => 146,  263 => 144,  255 => 142,  252 => 141,  247 => 140,  245 => 139,  234 => 131,  230 => 130,  225 => 128,  217 => 123,  213 => 122,  208 => 120,  201 => 116,  197 => 115,  192 => 113,  185 => 109,  181 => 108,  176 => 106,  169 => 102,  165 => 101,  160 => 99,  152 => 94,  148 => 93,  143 => 91,  135 => 88,  107 => 63,  80 => 39,  60 => 22,  56 => 21,  39 => 7,  31 => 3,  28 => 2,);
    }
}
