<?php

/* SMAdminBundle:Comment:index.html.twig */
class __TwigTemplate_c245535668bb18e2bad89d7c7b8dba8c extends Twig_Template
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
                { 'bSortable': false, 'aTargets': [ 0, 3, 4 ] }
            ],
        });
    } );

    \$(document).ready(function() {
        \$(\"#btnReset\").click(function() {
            \$(\"#name\").val('');
            \$(\"#product\").val('');
        });
    } );

</script>

<h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Comment List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a class=\"btn btn-primary btn-change-status\" rel=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment_change_status_all", array("product" => $this->getContext($context, "productId"), "status" => 1)), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Approval", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <a class=\"btn btn-primary btn-change-status\" rel=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment_change_status_all", array("product" => $this->getContext($context, "productId"), "status" => 0)), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not approval", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <a id=\"btn-del\" class=\"btn btn-primary\" rel=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment_delete_all", array("product" => $this->getContext($context, "productId"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete all", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>

    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 38
            echo "                ";
            if (($this->getContext($context, "lang") == $this->getAttribute($this->getContext($context, "opt"), "id"))) {
                // line 39
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 45
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment", array("page" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </ul>
    </div>
    <div style=\"clear: both; margin-top: 10px;\"></div>
    <div class=\"btn-group pull-center\">
        <form class=\"well form-search\" method=\"POST\" action=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment"), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo " : <input type=\"text\" name=\"name\" id=\"name\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\">
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Product", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"product\" id=\"product\">
                        <option value=\"\">-- ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optProducts"));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 56
            echo "                            ";
            if ((!(null === $this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage")))) {
                // line 57
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "obj"), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getContext($context, "obj"), "id") == $this->getContext($context, "productId"))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                    ";
                // line 58
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage"), "getName"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 61
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </select>
            <input type=\"hidden\" name=\"language\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getContext($context, "lang"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\" id=\"btnReset\">";
        // line 65
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
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 84
            echo "            <tr>
                <td style=\"text-align: center;\"><input type=\"checkbox\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\" name=\"checklist[]\" class=\"chkItem\"/> </td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "comment"), "id"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 88
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "title")))) {
                // line 89
                echo "                        ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title"), 50), "html", null, true);
                echo "
                    ";
            } else {
                // line 91
                echo "                        <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 93
            echo "                </td>
                <td>";
            // line 94
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "comment"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "comment"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 96
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "comment"), "status") == 1)) {
                // line 97
                echo "                        <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            } else {
                // line 99
                echo "                        <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            }
            // line 101
            echo "                </td>
                <td>
                    ";
            // line 103
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "comment"), "status") == 1)) {
                // line 104
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment_change_status", array("product" => $this->getContext($context, "productId"), "id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "comment"), "id"), "status" => 0)), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not approval", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 106
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment_change_status", array("product" => $this->getContext($context, "productId"), "id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "comment"), "id"), "status" => 1)), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Approval", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 108
            echo "                    
                    ";
            // line 109
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "language")))) {
                // line 110
                echo "                        &nbsp; | &nbsp;
                        <a href=\"#\" rel=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "product" => $this->getContext($context, "productId"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 113
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        </tbody>
    </table>
</form>
";
        // line 121
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 122
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment", array("productId" => $this->getContext($context, "productId"), "page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment", array("productId" => $this->getContext($context, "productId"), "page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 126
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 127
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 128
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment", array("productId" => $this->getContext($context, "productId"), "page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 130
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment", array("productId" => $this->getContext($context, "productId"), "page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 132
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment", array("productId" => $this->getContext($context, "productId"), "page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment", array("productId" => $this->getContext($context, "productId"), "page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 138
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 138,  371 => 134,  366 => 133,  360 => 132,  352 => 130,  344 => 128,  341 => 127,  337 => 126,  333 => 125,  329 => 124,  325 => 122,  323 => 121,  318 => 117,  309 => 113,  302 => 111,  299 => 110,  297 => 109,  294 => 108,  286 => 106,  278 => 104,  276 => 103,  272 => 101,  268 => 99,  264 => 97,  262 => 96,  255 => 94,  252 => 93,  246 => 91,  240 => 89,  238 => 88,  233 => 86,  229 => 85,  226 => 84,  222 => 83,  215 => 79,  211 => 78,  207 => 77,  203 => 76,  199 => 75,  186 => 65,  182 => 64,  178 => 63,  175 => 62,  169 => 61,  163 => 58,  154 => 57,  151 => 56,  147 => 55,  143 => 54,  139 => 53,  133 => 52,  129 => 51,  123 => 47,  112 => 45,  108 => 44,  104 => 42,  98 => 41,  92 => 39,  89 => 38,  85 => 37,  76 => 33,  70 => 32,  64 => 31,  58 => 28,  31 => 3,  28 => 2,);
    }
}
