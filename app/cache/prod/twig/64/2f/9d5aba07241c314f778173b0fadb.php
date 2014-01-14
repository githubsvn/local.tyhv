<?php

/* SMAdminBundle:MediaCategory:index.html.twig */
class __TwigTemplate_642f9d5aba07241c314f778173b0fadb extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Media Category List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <a id=\"btn-del\" class=\"btn btn-primary\" rel=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_delete_all"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete all", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 11
            echo "                ";
            if (($this->getContext($context, "lang") == $this->getAttribute($this->getContext($context, "opt"), "id"))) {
                // line 12
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 14
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 18
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory", array("page" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </ul>
    </div>
</div>

<form method=\"post\" name=\"frmList\" id=\"frmList\" action=\"#\">
    <table class=\"table table-bordered table-striped\" id=\"sortTable\">
        <thead>
            <tr>
                <th style=\"text-align: center;\"><input type=\"checkbox\" name=\"checkAll\" id=\"checkAll\"/></th>
                <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th style=\"width: 14px;\">&nbsp;</th>
                <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "            <tr>
                <td style=\"text-align: center;\">
                    ";
            // line 41
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                // line 42
                echo "                        <input type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getId"), "html", null, true);
                echo "\" name=\"checklist[]\" class=\"chkItem\"/>
                    ";
            }
            // line 44
            echo "                </td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 47
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                // line 48
                echo "                        ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getTreeName"), 50), "html", null, true);
                echo "
                    ";
            } else {
                // line 50
                echo "                        <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 52
            echo "
                </td>
                <td>";
            // line 54
            if ($this->getAttribute($this->getContext($context, "entity"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 56
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "entity", true), "parent", array(), "any", false, true), "children", array(), "any", true, true)) {
                // line 57
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "parent"), "children"), 0, array(), "array"), "id") != $this->getAttribute($this->getContext($context, "entity"), "id"))) {
                    // line 58
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_up", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                    echo "\">
                            <i class=\"icon-arrow-up\"></i>
                        </a>
                    ";
                }
                // line 62
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "parent"), "children"), (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "parent"), "children")) - 1), array(), "array"), "id") != $this->getAttribute($this->getContext($context, "entity"), "id"))) {
                    // line 63
                    echo "                        <a class=\"pull-right\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_down", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                    echo "\">
                            <i class=\"icon-arrow-down\"></i>
                        </a>
                    ";
                }
                // line 67
                echo "                    ";
            }
            // line 68
            echo "                </td>
                <td>
                    ";
            // line 70
            if (($this->getAttribute($this->getContext($context, "entity"), "status") == 1)) {
                // line 71
                echo "                        <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            } else {
                // line 73
                echo "                        <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            }
            // line 75
            echo "                </td>
                <td>
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                    ";
            // line 78
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                // line 79
                echo "                        &nbsp; | &nbsp;
                        <a href=\"#\" rel=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getId"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 82
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </tbody>
    </table>
</form>

";
        // line 91
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 92
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory", array("page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory", array("page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 96
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 97
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 98
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 100
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 102
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory", array("page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory", array("page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 108
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:MediaCategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 108,  300 => 104,  295 => 103,  289 => 102,  281 => 100,  273 => 98,  270 => 97,  266 => 96,  262 => 95,  258 => 94,  254 => 92,  252 => 91,  246 => 86,  237 => 82,  230 => 80,  227 => 79,  225 => 78,  219 => 77,  215 => 75,  211 => 73,  207 => 71,  205 => 70,  201 => 68,  198 => 67,  190 => 63,  187 => 62,  179 => 58,  176 => 57,  174 => 56,  167 => 54,  163 => 52,  157 => 50,  151 => 48,  149 => 47,  144 => 45,  141 => 44,  135 => 42,  133 => 41,  129 => 39,  125 => 38,  118 => 34,  114 => 33,  109 => 31,  105 => 30,  101 => 29,  90 => 20,  79 => 18,  75 => 17,  71 => 15,  65 => 14,  59 => 12,  56 => 11,  52 => 10,  44 => 7,  38 => 6,  31 => 3,  28 => 2,);
    }
}
