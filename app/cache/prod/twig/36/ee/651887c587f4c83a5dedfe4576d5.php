<?php

/* SMAdminBundle:Twig:media.html.twig */
class __TwigTemplate_36ee651887c587f4c83a5dedfe4576d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
            \$(\"#typeImg\").bind(\"change\", function(){
            var type = \$(this).attr('value');
            var url = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_get_media"), "html", null, true);
        echo "\" + '/' + type;
            \$.ajax({url:url, success:function(data){
                \$('.thumbnail, .popup').children().remove();
                //set new option for select
                var jsonData = JSON.parse(data);
                \$.each(jsonData, function(index, item) {
                    var str = '<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["mediaPath"]) ? $context["mediaPath"] : $this->getContext($context, "mediaPath")), "html", null, true);
        echo "' + item.name +'\" width=\"100px\" height=\"100px;\"/>';
                    var id = '#label_' + item.id;
                    \$(id).append(str);
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

<a href=\"#backgroundModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
<!-- Modal -->
<div id=\"backgroundModal\" class=\"modal hide fade\" style=\"width: 580px;\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h3 id=\"backgroundModalLabel\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image", array(), "SMAdminBundle"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"modal-body\">
        <div style=\"text-align: center;\">
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Type of media", array(), "SMAdminBundle"), "html", null, true);
        echo " :
            <select name=\"typeImg\" id=\"typeImg\">
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["optMediaTypes"]) ? $context["optMediaTypes"] : $this->getContext($context, "optMediaTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 43
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "getCurrentLanguage"), "getTreeName"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </select>
        </div>
        <ul class=\"thumbnails\">
            ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["optMedias"]) ? $context["optMedias"] : $this->getContext($context, "optMedias")));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 49
            echo "                <li class=\"thumbImg\" style=\"text-align: center;\" data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "category"), "id"), "html", null, true);
            echo "\">
                    <label id=\"label_";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "id"), "html", null, true);
            echo "\" class=\"thumbnail popup\" for=\"bg_";
            echo twig_escape_filter($this->env, (isset($context["mediaName"]) ? $context["mediaName"] : $this->getContext($context, "mediaName")), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "id"), "html", null, true);
            echo "\" style=\"border: 0px;\">
                    </label>
                    <input id=\"bg_";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "id"), "html", null, true);
            echo "\" name=\"bg_";
            echo twig_escape_filter($this->env, (isset($context["mediaName"]) ? $context["mediaName"] : $this->getContext($context, "mediaName")), "html", null, true);
            echo "\" imagepath=\"";
            echo twig_escape_filter($this->env, ((isset($context["mediaPath"]) ? $context["mediaPath"] : $this->getContext($context, "mediaPath")) . $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "name")), "html", null, true);
            echo "\" type=\"";
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "multiple", array(), "any", true, true)) {
                if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "multiple")) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
            } else {
                echo "radio";
            }
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "id"), "html", null, true);
            echo "\" style=\"margin-left: 40px;\"/>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </ul>
    </div>
    <div class=\"modal-footer\">
        <div class=\"row\">
            ";
        // line 59
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "multiple", array(), "any", true, true)) {
            // line 60
            echo "                ";
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "multiple")) {
                // line 61
                echo "                <div class=\"span2\" style=\"width: 200px;\">
                        <a class=\"btn\" onclick=\"checkAll('";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["mediaName"]) ? $context["mediaName"] : $this->getContext($context, "mediaName")), "html", null, true);
                echo "');\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select All", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                        <a class=\"btn\" onclick=\"clearAll('";
                // line 63
                echo twig_escape_filter($this->env, (isset($context["mediaName"]) ? $context["mediaName"] : $this->getContext($context, "mediaName")), "html", null, true);
                echo "');\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Clear All", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 66
            echo "            ";
        }
        // line 67
        echo "            <div class=\"pull-right\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"applySelect('";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["mediaName"]) ? $context["mediaName"] : $this->getContext($context, "mediaName")), "html", null, true);
        echo "')\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>

<div>
    <ul class=\"thumbnails\" id=\"preview_";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["mediaName"]) ? $context["mediaName"] : $this->getContext($context, "mediaName")), "html", null, true);
        echo "\">
    </ul>
</div>

<script type=\"text/javascript\" >
    var mediaPath = \"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["mediaPath"]) ? $context["mediaPath"] : $this->getContext($context, "mediaPath")), "html", null, true);
        echo "\";
    \$(function() {
        initSelect('";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["mediaName"]) ? $context["mediaName"] : $this->getContext($context, "mediaName")), "html", null, true);
        echo "');
        \$('#backgroundModal').on('hidden', function () {
        });
    });
</script>


<script type=\"text/javascript\">
    \$(document).ready(function() {
        var imgType = 0;

        //get imgType
        \$(\"li.thumbImg\").each(function(){
            var currentLi = \$(this);
            var input = \$(this).find(\"input\");
            if (\$(\"#\"+input.attr('id')).is(':checked')) {
                imgType = currentLi.attr(\"data-type\");
            }
        });

        if (!imgType) {
            imgType = \$(\"#typeImg\").val();
        } else {
            \$(\"#typeImg\").val(imgType);
        }

        \$(\"li.thumbImg\").each(function(){
            var currentLi = \$(this);
            var liType;
            liType = currentLi.attr(\"data-type\");

            if (liType == imgType) {
                currentLi.css('display', 'inline');
            } else {
                currentLi.css('display', 'none');
            }
        });

        \$(\"#typeImg\").bind(\"change\", function(e) {
            var imgType = \$(this).val();
            \$(\"li.thumbImg\").each(function(){
                var currentLi = \$(this);
                var liType = currentLi.attr(\"data-type\");
                if (liType == imgType) {
                    currentLi.css('display', 'inline');
                } else {
                    currentLi.css('display', 'none');
                }
            });
        });
    } );
</script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Twig:media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 83,  199 => 81,  191 => 76,  179 => 69,  175 => 68,  172 => 67,  169 => 66,  161 => 63,  155 => 62,  152 => 61,  149 => 60,  147 => 59,  141 => 55,  116 => 52,  107 => 50,  102 => 49,  98 => 48,  93 => 45,  82 => 43,  73 => 40,  66 => 36,  58 => 31,  36 => 12,  27 => 6,  21 => 2,  19 => 1,  305 => 111,  301 => 110,  297 => 109,  291 => 105,  285 => 104,  283 => 103,  279 => 101,  271 => 96,  267 => 95,  262 => 93,  254 => 88,  250 => 87,  245 => 85,  239 => 81,  233 => 79,  227 => 77,  225 => 76,  221 => 75,  216 => 73,  213 => 72,  211 => 71,  208 => 70,  202 => 68,  196 => 66,  193 => 65,  187 => 64,  184 => 63,  181 => 62,  178 => 61,  173 => 60,  170 => 59,  165 => 58,  163 => 57,  159 => 55,  153 => 54,  150 => 53,  142 => 51,  134 => 49,  131 => 48,  126 => 47,  124 => 46,  111 => 37,  109 => 36,  105 => 35,  101 => 34,  95 => 31,  87 => 26,  83 => 25,  78 => 42,  71 => 19,  67 => 18,  62 => 16,  55 => 12,  51 => 11,  46 => 9,  37 => 5,  31 => 3,  28 => 2,);
    }
}