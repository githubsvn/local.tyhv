<?php

/* SMAdminBundle:File:index.html.twig */
class __TwigTemplate_b6467797ce07e2c3091e1f15c9e97002 extends Twig_Template
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
        \$('#sortTable').dataTable({
            \"bPaginate\": false,
            \"bLengthChange\": false,
            \"bFilter\": false,
            \"bSort\": true,
            \"bInfo\": false,
            \"bAutoWidth\": true,
            \"aaSorting\": [ [1,'asc'], [2,'asc'] ],
            \"aoColumnDefs\": [
                { 'bSortable': false, 'aTargets': [ 0, 4, 5 ] }
            ],
        });
    } );

    \$(document).ready(function() {
        \$(\"#btnReset\").click(function() {
            \$(\"#name\").val('');
        });
    } );

</script>

<h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("File List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <a id=\"btn-del\" class=\"btn btn-primary\" rel=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_delete_all"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete all", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>

    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 36
            echo "                ";
            if (($this->getContext($context, "lang") == $this->getAttribute($this->getContext($context, "opt"), "id"))) {
                // line 37
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 39
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 43
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file", array("file" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </ul>
    </div>
    <div style=\"clear: both; margin-top: 10px;\"></div>
    <div class=\"btn-group pull-center\">
        <form class=\"well form-search\" method=\"POST\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file"), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo " : <input type=\"text\" name=\"name\" id=\"name\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"language\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getContext($context, "lang"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\" id=\"btnReset\">";
        // line 53
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
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 72
            echo "            <tr>
                <td style=\"text-align: center;\">
                    ";
            // line 74
            if ((!(null === $this->getContext($context, "entity")))) {
                // line 75
                echo "                        <input type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "file"), "getId"), "html", null, true);
                echo "\" name=\"checklist[]\" class=\"chkItem\"/>
                    ";
            }
            // line 77
            echo "                </td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "file"), "id"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 80
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "name")))) {
                // line 81
                echo "                        ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), 50), "html", null, true);
                echo "
                    ";
            } else {
                // line 83
                echo "                        <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 85
            echo "                </td>
                <td>";
            // line 86
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "file"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "file"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 88
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "file"), "status") == 1)) {
                // line 89
                echo "                        <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            } else {
                // line 91
                echo "                        <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            }
            // line 93
            echo "                </td>
                <td>
                    <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "file"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                    ";
            // line 96
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "language")))) {
                // line 97
                echo "                        &nbsp; | &nbsp;
                        <a href=\"#\" rel=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 100
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </tbody>
    </table>
</form>

";
        // line 109
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 110
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file", array("page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file", array("page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 115
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 116
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 118
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 120
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file", array("page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file", array("page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 126
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:File:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 126,  319 => 122,  314 => 121,  308 => 120,  300 => 118,  292 => 116,  289 => 115,  285 => 114,  281 => 113,  277 => 112,  273 => 110,  271 => 109,  265 => 104,  256 => 100,  249 => 98,  246 => 97,  244 => 96,  238 => 95,  234 => 93,  230 => 91,  226 => 89,  224 => 88,  217 => 86,  214 => 85,  208 => 83,  202 => 81,  200 => 80,  195 => 78,  192 => 77,  186 => 75,  184 => 74,  180 => 72,  176 => 71,  169 => 67,  165 => 66,  161 => 65,  157 => 64,  153 => 63,  140 => 53,  136 => 52,  132 => 51,  126 => 50,  122 => 49,  116 => 45,  105 => 43,  101 => 42,  97 => 40,  91 => 39,  85 => 37,  82 => 36,  78 => 35,  69 => 31,  63 => 30,  57 => 27,  31 => 3,  28 => 2,);
    }
}
