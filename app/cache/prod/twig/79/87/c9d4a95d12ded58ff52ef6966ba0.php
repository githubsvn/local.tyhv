<?php

/* SMAdminBundle:Media:index.html.twig */
class __TwigTemplate_7987c9d4a95d12ded58ff52ef6966ba0 extends Twig_Template
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
            \"aaSorting\": [ [2,'asc'], [3,'asc'] ],
            \"aoColumnDefs\": [
                { 'bSortable': false, 'aTargets': [ 0, 1, 4, 5 ] }
            ],
        });
    } );
</script>

<h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Media List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\" style=\"margin-bottom: 10px;\">
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <a id=\"btn-del\" class=\"btn btn-primary\" rel=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_delete_all"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete all", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>

    <div class=\"btn-group pull-center\">
        <form class=\"well form-search\" method=\"POST\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media"), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Category", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"type\" id=\"type\">
                        <option value=\"\">-- ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optMediaTypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["mediaType"]) {
            // line 31
            echo "                            ";
            if ((!(null === $this->getAttribute($this->getContext($context, "mediaType"), "getCurrentLanguage")))) {
                // line 32
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mediaType"), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getContext($context, "mediaType"), "id") == $this->getContext($context, "type"))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                    ";
                // line 33
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "mediaType"), "getCurrentLanguage"), "name"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 36
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediaType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </select>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\" id=\"btnReset\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>

<div style=\"clear: both; margin-bottom: 10px;\"></div>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 60
            echo "            <tr>
                <td style=\"text-align: center;\"><input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\" name=\"checklist[]\" class=\"chkItem\"/> </td>
                <td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>
                    <image src=\"";
            // line 64
            echo twig_escape_filter($this->env, ($this->getContext($context, "imgPath") . $this->getAttribute($this->getContext($context, "entity"), "name")), "html", null, true);
            echo "\" width=\"100px\" height=\"100px\"/>
                </td>
                <td>";
            // line 66
            if ($this->getAttribute($this->getContext($context, "entity"), "createdat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 68
            if (($this->getAttribute($this->getContext($context, "entity"), "active") == 1)) {
                // line 69
                echo "                        <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            } else {
                // line 71
                echo "                        <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            }
            // line 73
            echo "                </td>
                <td>
                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                    &nbsp; | &nbsp;
                    <a class=\"delete\" rel=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </tbody>
    </table>
</form>

";
        // line 86
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 87
            echo "<div class=\"pagination\" style=\"text-align: right;\">
    <ul>
        <li><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => 1)), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 92
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 93
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 95
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 97
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $this->getContext($context, "lastPage"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 103
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Media:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 103,  272 => 99,  267 => 98,  261 => 97,  253 => 95,  245 => 93,  242 => 92,  238 => 91,  234 => 90,  230 => 89,  226 => 87,  224 => 86,  218 => 81,  206 => 77,  199 => 75,  195 => 73,  191 => 71,  187 => 69,  185 => 68,  178 => 66,  173 => 64,  166 => 62,  162 => 61,  159 => 60,  155 => 59,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  117 => 39,  113 => 38,  110 => 37,  104 => 36,  98 => 33,  89 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  62 => 24,  56 => 23,  50 => 20,  31 => 3,  28 => 2,);
    }
}
