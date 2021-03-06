<?php

/* SMAdminBundle:Category:index.html.twig */
class __TwigTemplate_e1f48d821d7104adeb8550380d7e82a9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Category List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <a id=\"btn-del\" class=\"btn btn-primary\" rel=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete_all"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete all", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>

    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 12
            echo "                ";
            if (((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")) == $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "id"))) {
                // line 13
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 15
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langList"]) ? $context["langList"] : $this->getContext($context, "langList")));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 19
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => 1, "lang" => $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : $this->getContext($context, "opt")), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>
    </div>
</div>

<form method=\"post\" name=\"frmList\" id=\"frmList\" action=\"#\">
    <table class=\"table table-bordered table-striped\" id=\"sortTable\">
        <thead>
            <tr>
                <th style=\"text-align: center;\"><input type=\"checkbox\" name=\"checkAll\" id=\"checkAll\"/></th>
                <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th style=\"width: 14px;\">&nbsp;</th>
                <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "            <tr>
                <td style=\"text-align: center;\">
                    ";
            // line 42
            if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage")))) {
                // line 43
                echo "                        <input type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getId"), "html", null, true);
                echo "\" name=\"checklist[]\" class=\"chkItem\"/>
                    ";
            }
            // line 45
            echo "                </td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 48
            if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage")))) {
                // line 49
                echo "                        ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getTreeName"), 50), "html", null, true);
                echo "
                    ";
            } else {
                // line 51
                echo "                        <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 53
            echo "
                </td>
                <td>";
            // line 55
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 57
            if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parent", array(), "any", false, true), "children", array(), "any", true, true)) {
                // line 58
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parent"), "children"), 0, array(), "array"), "id") != $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))) {
                    // line 59
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_up", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\">
                            <i class=\"icon-arrow-up\"></i>
                        </a>
                    ";
                }
                // line 63
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parent"), "children"), (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parent"), "children")) - 1), array(), "array"), "id") != $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))) {
                    // line 64
                    echo "                        <a class=\"pull-right\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_down", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\">
                            <i class=\"icon-arrow-down\"></i>
                        </a>
                    ";
                }
                // line 68
                echo "                    ";
            }
            // line 69
            echo "                </td>
                <td>
                    ";
            // line 71
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status") == 1)) {
                // line 72
                echo "                        <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            } else {
                // line 74
                echo "                        <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            }
            // line 76
            echo "                </td>
                <td>
                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                    ";
            // line 79
            if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage")))) {
                // line 80
                echo "                        &nbsp; | &nbsp;
                        <a href=\"#\" rel=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCurrentLanguage"), "getId"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 83
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </tbody>
    </table>
</form>

";
        // line 92
        if (((isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")) > 1)) {
            // line 93
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => 1, "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => (isset($context["previousPage"]) ? $context["previousPage"] : $this->getContext($context, "previousPage")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 98
                echo "      ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                    // line 99
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 101
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 103
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => (isset($context["nextPage"]) ? $context["nextPage"] : $this->getContext($context, "nextPage")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")), "lang" => (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 109
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 109,  301 => 105,  296 => 104,  290 => 103,  282 => 101,  274 => 99,  271 => 98,  267 => 97,  263 => 96,  259 => 95,  255 => 93,  253 => 92,  247 => 87,  238 => 83,  231 => 81,  228 => 80,  226 => 79,  220 => 78,  216 => 76,  212 => 74,  208 => 72,  206 => 71,  202 => 69,  199 => 68,  191 => 64,  188 => 63,  180 => 59,  177 => 58,  175 => 57,  168 => 55,  164 => 53,  158 => 51,  152 => 49,  150 => 48,  145 => 46,  142 => 45,  136 => 43,  134 => 42,  130 => 40,  126 => 39,  119 => 35,  115 => 34,  110 => 32,  106 => 31,  102 => 30,  91 => 21,  80 => 19,  76 => 18,  72 => 16,  66 => 15,  60 => 13,  57 => 12,  53 => 11,  44 => 7,  38 => 6,  31 => 3,  28 => 2,);
    }
}
