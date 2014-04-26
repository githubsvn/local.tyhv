<?php

/* SMAdminBundle:Menu:index.html.twig */
class __TwigTemplate_d34278367b591951d8a4b318d915ef65 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#btnReset\").click(function() {
            \$(\"#position\").val('');
        });
    } );

</script>

<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <a id=\"btn-del\" class=\"btn btn-primary\" rel=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_delete_all"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete all", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 20
            echo "                ";
            if (((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")) == $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "id"))) {
                // line 21
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 23
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 27
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1, "lang" => $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>
    </div>
    <div style=\"clear: both; margin-top: 10px;\"></div>
    <div class=\"btn-group pull-center\">
        <form class=\"well form-search\" method=\"POST\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu"), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Position", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"position\" id=\"position\">
                        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["optPosition"]) ? $context["optPosition"] : $this->getContext($context, "optPosition")));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 36
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\" ";
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </select>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\" id=\"btnReset\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>
<form method=\"post\" name=\"frmList\" id=\"frmList\" action=\"#\">
    <table class=\"table table-bordered table-striped\" id=\"sortTable\">
        <thead>
            <tr>
                <th style=\"text-align: center;\"><input type=\"checkbox\" name=\"checkAll\" id=\"checkAll\"/></th>
                <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Position", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th style=\"width: 14px;\">&nbsp;</th>
                <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 62
            echo "            <tr>
                <td style=\"text-align: center;\">
                    ";
            // line 64
            if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage")))) {
                // line 65
                echo "                        <input type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getId"), "html", null, true);
                echo "\" name=\"checklist[]\" class=\"chkItem\"/>
                    ";
            }
            // line 67
            echo "                </td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 70
            if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage")))) {
                // line 71
                echo "                        ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getTreeName"), 50), "html", null, true);
                echo "
                    ";
            } else {
                // line 73
                echo "                        <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 75
            echo "
                </td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position"), array(), "SMAdminBundle"), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 80
            if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array(), "any", false, true), "children", array(), "any", true, true)) {
                // line 81
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parent"), "children"), 0, array(), "array"), "id") != $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))) {
                    // line 82
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_up", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\">
                            <i class=\"icon-arrow-up\"></i>
                        </a>
                    ";
                }
                // line 86
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parent"), "children"), (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parent"), "children")) - 1), array(), "array"), "id") != $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))) {
                    // line 87
                    echo "                        <a class=\"pull-right\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_down", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\">
                            <i class=\"icon-arrow-down\"></i>
                        </a>
                    ";
                }
                // line 91
                echo "                    ";
            }
            // line 92
            echo "                </td>
                <td>
                    ";
            // line 94
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status") == 1)) {
                // line 95
                echo "                        <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            } else {
                // line 97
                echo "                        <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            }
            // line 99
            echo "                </td>
                <td>
                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                    ";
            // line 102
            if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage")))) {
                // line 103
                echo "                        &nbsp; | &nbsp;
                        <a href=\"#\" rel=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getId"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 106
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </tbody>
    </table>
</form>

";
        // line 115
        if (((isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")) > 1)) {
            // line 116
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1, "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => (isset($context["previousPage"]) ? $context["previousPage"] : $this->getContext($context, "previousPage")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 121
                echo "      ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                    // line 122
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 124
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 126
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => (isset($context["nextPage"]) ? $context["nextPage"] : $this->getContext($context, "nextPage")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 132
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Menu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 132,  362 => 128,  357 => 127,  351 => 126,  343 => 124,  335 => 122,  332 => 121,  328 => 120,  324 => 119,  320 => 118,  316 => 116,  314 => 115,  308 => 110,  299 => 106,  292 => 104,  289 => 103,  287 => 102,  281 => 101,  277 => 99,  273 => 97,  269 => 95,  267 => 94,  263 => 92,  260 => 91,  252 => 87,  249 => 86,  241 => 82,  238 => 81,  236 => 80,  229 => 78,  225 => 77,  221 => 75,  215 => 73,  209 => 71,  207 => 70,  202 => 68,  199 => 67,  193 => 65,  191 => 64,  187 => 62,  183 => 61,  176 => 57,  172 => 56,  167 => 54,  163 => 53,  159 => 52,  155 => 51,  143 => 42,  139 => 41,  136 => 40,  127 => 37,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  100 => 29,  89 => 27,  85 => 26,  81 => 24,  75 => 23,  69 => 21,  66 => 20,  62 => 19,  54 => 16,  48 => 15,  42 => 12,  31 => 3,  28 => 2,);
    }
}
